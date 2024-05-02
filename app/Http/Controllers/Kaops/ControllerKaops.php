<?php

namespace App\Http\Controllers\Kaops;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Nasabah\Nasabah_Model;
use GuzzleHttp\Client;
use DateTime;
use Carbon\Carbon;

class ControllerKaops
{

    public function logActivity($activityuser, $actionuser)
    {
        $userlogin = Auth::user()->username;
        $tanggal = date('Y-m-d H:i:s');
        $cabanguser = Auth::user()->cabang;

        $log = $userlogin . "|" . $activityuser . "|" . $tanggal . "|" . $cabanguser . "|" . $actionuser;

        DB::select('CALL sp_log(?,?)', ['1', $log]);
    }


    public function kaops()
    {
        $cabang = Auth::user()->cabang;
        $nasabah = DB::select('CALL sp_kaops(?,?)', ['1', $cabang]);

        return view('kaops.menukaops', ['nasabahs' => $nasabah]);
    }

    public function editkaops()
    {
        return view('kaops/edit');
    }

    public function print($reg_id)
    {
        // return view('kaops/print');
        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['2', $reg_id]);
        $nasabah = $nasabah[0];
        return view('kaops.print', compact('nasabah'));
    }


    public function approval_menu($reg_id)
    {
        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['2', $reg_id]);
        $nasabah = $nasabah[0];
        return view('kaops.approval', compact('nasabah'));
    }

    public function approval(Request $request, $id_nasabah)
    {
        $id_nasabah = $request->input('id_nasabah');
        $action = $request->input('action');

        $rejectReason = $request->input('rejectReason');
        $userlogin = Auth::user()->username;
        $tanggal = date('Y-m-d H:i:s');
        $cabanglogin = Auth::user()->cabang;


        if ($action === 'approve') {
            $value = $request->input('approve');
            $spType = '3';
            $successMessage = 'Sukses approve data nasabah!';
            $aktivitas = 'Sukses Approve Data Nasabah';
            $actionuser = 'Approve Data Nasabah';
            $rejectReason = '-';
            $this->core($request, $id_nasabah);

            //nolak
        } elseif ($action === 'edit') {
            $value = $request->input('edit');
            $spType = '5';
            $isidata = $id_nasabah . "|" . $value;
            $successMessage = 'Sukses menolak data nasabah!';
            $userlogin = Auth::user()->username;
            $aktivitas = 'Sukses menolak data nasabah';
            $tanggal = date('Y-m-d H:i:s');
            $cabanglogin = Auth::user()->cabang;
            $actionuser = 'Tolak Data Nasabah';
            $rejectReason = '-';
            $login = $userlogin . "|" . $aktivitas . "|" . $tanggal . "|" . $cabanglogin . "|" . $actionuser;

            // Call the stored procedure to log the logout activity
            DB::select('CALL sp_log(?,?)', ['1', $login]);
            DB::select('CALL sp_kaops(?,?)', [$spType, $isidata]);
            // return view('kaops/edit');
        } else {
            // Handle other actions or invalid actions
            return redirect()->back()->with('error', 'Invalid action');
        }

        $login = $userlogin . "|" . $aktivitas . "|" . $tanggal . "|" . $cabanglogin . "|" . $actionuser;

        $isidata = $id_nasabah . "|" . $value . "|" . $rejectReason;
        // $isidata = $id_nasabah . "|" . $value;

        DB::select('CALL sp_kaops(?,?)', [$spType, $isidata]);

        DB::select('CALL sp_log(?,?)', ['1', $login]);

        return redirect()->route('kaops')->with('success', $successMessage);
    }


    // public function approval(Request $request, $id_nasabah)
    // {
    //     $id_nasabah = $request->input('id_nasabah');

    //     $userlogin = Auth::user()->username;
    //     $tanggal = date('Y-m-d H:i:s');
    //     $cabanglogin = Auth::user()->cabang;
    //     $rejectReason = $request->input('rejectReason');

    //     $value = $request->input('approve');
    //     $spType = '3';
    //     $successMessage = 'Sukses approve data nasabah!';
    //     $aktivitas = 'Sukses Approve Data Nasabah';
    //     $actionuser = 'Approve Data Nasabah';
    //     $rejectReason = '-';
    //     $this->core($request, $id_nasabah);

    //     $login = $userlogin . "|" . $aktivitas . "|" . $tanggal . "|" . $cabanglogin . "|" . $actionuser;

    //     // Menyimpan alasan penolakan ke dalam database
    //     $isidata = $id_nasabah . "|" . $value . "|" . $rejectReason;
    //     DB::select('CALL sp_kaops(?,?)', [$spType, $isidata]);

    //     DB::select('CALL sp_log(?,?)', ['1', $login]);

    //     return redirect()->route('kaops')->with('success', $successMessage);
    // }

    public function reject(Request $request, $reg_id)
    {
        $id_nasabah = $reg_id; // Gunakan $reg_id sebagai $id_nasabah
        $userlogin = Auth::user()->username;
        $tanggal = date('Y-m-d H:i:s');
        $cabanglogin = Auth::user()->cabang;
        $rejectReason = $request->input('rejectReason');
        $value = '6';
        $spType = '4';
        $successMessage = 'Sukses ubah status edit data nasabah!';
        $aktivitas = 'Sukses Ubah Status Edit Nasabah';
        $actionuser = 'Edit Data Nasabah';
        $login = $userlogin . "|" . $aktivitas . "|" . $tanggal . "|" . $cabanglogin . "|" . $actionuser;
        // Menyimpan alasan penolakan ke dalam database
        $isidata = $id_nasabah . "|" . $value . "|" . $rejectReason;
        DB::select('CALL sp_kaops(?,?)', [$spType, $isidata]);
        DB::select('CALL sp_log(?,?)', ['1', $login]);
        return redirect()->route('kaops')->with('success', $successMessage);
    }

    public function core(Request $request, $id_nasabah)
    {
        $id_nasabah = $request->input('id_nasabah');
        $client = new Client();
        $apiUrl = 'http://172.21.20.88:8000/api/kycCif';

        $msg = "12345";
        $productCode = 'OPENCIFKYC';
        $kosong = "";
        $hobby = "0";
        $legal = "1";
        $currency = "IDR";
        $flag = "2";
        $golPemilik = "886";
        $jumAnak = "00";

        $tanggalktp = $request->input('datepicker1');
        $tanggalTerbit = Carbon::parse($tanggalktp)->addYears(17)->format('Ymd');
        $dom4 = substr(
            $request->input('dom5') . ', ' . $request->input('propdomi'),
            0,
            30
        );

        $dom3 = substr(
            $request->input('dom3') . ', ' . $request->input('dom4'),
            0,
            30
        );

        $jsonBody = [
            'noKtp' => $request->input('noKtp'),
            'noNPWP' => $request->input('noKtp'),
            'namaCust' => substr($request->input('namaCust'), 0, 30),
            'address1' => substr($request->input('address1'), 0, 30),
            'address2' => substr($request->input('address2'), 0, 30),
            'address3' => substr($request->input('address3'), 0, 30),
            'address4' => substr($request->input('address4'), 0, 30),
            'address5' => substr($request->input('address5'), 0, 30),
            'propinsi' => $request->input('propinsi'),
            'zipCode' => $request->input('kodepos'),
            'domisili1' => substr($request->input('dom1'), 0, 30),
            'domisili2' => $request->input('dom2'),
            'domisili3' => $dom3,
            'domisili4' => $dom4,
            'tempatLahir' => $request->input('tempatLahir'),
            'tanggalLahir' => (new DateTime($request->input('datepicker1')))->format('dmY'),
            'tglLahir' => (new DateTime($request->input('datepicker1')))->format('dmY'),
            'agama' => $request->input('agama'),
            'jenisKelamin' => $request->input('sex'),
            'negaraAsal' => "ID",
            'statusNikah' => $request->input('statusperkawinan'),
            'pendAkhir' => $request->input('pendAkhir'),
            'statusRes' => $request->input('rumah'),
            'motherMaidenName' => substr($request->input('motherMaidenName'), 0, 30),
            'emailAddr' => $request->input('email'),
            'mobilePhone' => $request->input('nohp'),
            'industryName' => $request->input('namaperusahaan'),
            'addressCompany' => $request->input('alamatPerusahaan'),
            // 'addressCompany' => $request->input('alamatPerusahaan') . ', ' . $request->input('rtperusahaan') . '/' . $request->input('rwperusahaan') . ', ' . $request->input('kelurahanperusahaan') . ', ' . $request->input('kecamatanperusahaan') . ', ' . $request->input('propinsiperusahaan'),
            'empAddress2' => $request->input('propinsiperusahaan'),
            'City' => $request->input('kabupatenperusahaan'),
            'zipCode1' => $request->input('kodeposperusahaan'),
            'companyNumber' => $kosong,
            'noPhone1' => $request->input('teleponperusahaan'),
            'noPhone2' => $kosong,
            'areaPhone1' => $request->input('artlpprs'),
            'areaPhone2' => $kosong,
            'jenisKerja' => $request->input('pkrjn'),
            'industryType' => $request->input('bdgusaha'),
            'jobPosition' => $request->input('jabatan'),
            'purposeOpenAccount' => $request->input('pembukanrekening'),
            'purposeOpenAccountDesc' => $request->input('pembukanrekening'),
            'sourceFund' => $request->input('danasumber'),
            'tujuanGuna' => $request->input('pengguanaandana'),
            'estimatedTransaction' => $request->input('trxsetorantunai'),
            'estimatedTransactionDesc' => $request->input('trxsetorantunai'),
            'frequencyTransaction' => $request->input('setorantunai'),
            'frequencyTransactionDesc' => $request->input('setorantunai'),
            'tipeRekening' => $request->input('tabungan'),
            'avgTransaction' => $request->input('trxsetorantunai'),
            'avgTransactionDesc' => "AVG TRANSACTION DESC",
            'ext1' => $kosong,
            'purposeFundDesc' => $kosong,
            'purposeOfDataUse' => $kosong,
            'purposeOfDataUseDesc' => $kosong,
            'incomeRange' => $request->input('hasil'),
            'incomeRangeDesc' => "INCOME RANGE DESC",
            'idNas' => $request->input('riskProfile'),
            'infoLain' => $request->input('riskProfile'),
            'jumTrx' => $request->input('riskProfile'),
            'kegUsaha' => $request->input('riskProfile'),
            'lokasiUsaha' => $request->input('riskProfile'),
            'profNasabah' => $request->input('riskProfile'),
            'resumAkhir' => $request->input('riskProfile'),
            'strukPemilik' => $request->input('riskProfile'),
            'branchCode' => $request->input('cabang'),
            'productCode' => $productCode,
            'msgId' => $msg,
            'Cellular' => $kosong,
            'City1' => $kosong,
            'Distric' => $request->input('address4'),
            'Ext2' => $kosong,
            'Gender' => $kosong,
            'Hobby' => $hobby,
            'Hp1' => $kosong,
            'Legal' => $legal,
            'Prov1' => $kosong,
            'Religion1' => $kosong,
            'Village' => $request->input('address3'),
            'accTujuan' => $kosong,
            'addMsg1' => $kosong,
            'addMsg2' => $kosong,
            'addMsg3' => $kosong,
            'avEarning' => $kosong,
            'benefAddr1' => $kosong,
            'benefAddr2' => $kosong,
            'benefDom1' =>  $kosong,
            'benefDom2' =>  $kosong,
            'benefDom3' =>  $kosong,
            'benefDom4' =>  $kosong,
            'benefName' =>  $kosong,
            'benefOwner' => $kosong,
            'birthPlace' => $request->input('tempatLahir'),
            'cifType' => $legal,
            'currency' => $currency,
            'flagProcess' => $flag,
            'fundPurpose1' => $kosong,
            'golPemilik' => $golPemilik,
            'indCode' => "0000",
            'jenisId' => $legal,
            'jobPositionCode' => $request->input('jobPositionCode'),
            'jumAnak' => $jumAnak,
            'jumIstri' => $jumAnak,
            'jumTanggung' => $jumAnak,
            'kodeAo' => $request->input('kode_ao'),
            'kodeTelp' => $kosong,
            'lamaKerja' => $request->input('lama_kerja'),
            'marStatus' => $kosong,
            'noCif' => $kosong,
            'noTelp' => $kosong,
            'otherInfo' => $kosong,
            'purposeFund' => $kosong,
            'relFlag' => $legal,
            'resident' => $legal,
            'riskFactor' => $request->input('riskFactor'),
            'shippingAddress' => $kosong,
            'shippingAddressDes' => $kosong,
            'sourceFund1' => $request->input('danasumber'),
            'sourceIncome' => $kosong,
            'sumberHasil' => $request->input('sumberdana'),
            'tanggalAkhir' => "99999999",
            'tanggalTerbit' => $tanggalTerbit,
            'yearResiden' => $kosong
        ];

        // dd($jsonBody);  

        $response = $client->request('POST', $apiUrl, [
            'json' => $jsonBody
        ]);

        $statusCode = $response->getStatusCode();
        $body = $response->getBody();

        if ($statusCode == 200) {
            $data = json_decode($body, true);
            // dd($data);
            $cif = $id_nasabah . "|" . $data['nomorRek'] . "|" . $data['cifNo'];
            DB::select('CALL sp_kaops(?,?)', ['6', $cif]);
            return;
        } elseif ($statusCode == 500) {
            // handle error
            redirect()->back()->with('error', 'Invalid action');
        } else {
            // handle error
            return response()->json(['error' => 'Error in API response']);
        }
    }
}
