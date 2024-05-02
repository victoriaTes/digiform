<?php

namespace App\Http\Controllers\CS;

use App\Http\Controllers\Controller;
use App\Models\CustomerModel\CustomerModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use DateTime;

class ControllerCS extends Controller
{
    public function logActivity($activityuser, $actionuser)
    {
        $userlogin = Auth::user()->username;
        $tanggal = date('Y-m-d H:i:s');
        $cabanguser = Auth::user()->cabang;

        $log = $userlogin . "|" . $activityuser . "|" . $tanggal . "|" . $cabanguser . "|" . $actionuser;

        DB::select('CALL sp_log(?,?)', ['1', $log]);
    }

    public function laporan()
    {
        $cabang = Auth::user()->cabang;

        $laporan = DB::select('CALL sp_nasabah(?,?)', ['3', $cabang]);

        return view('cs.laporan', ['laporan' => $laporan]);
    }

    public function registrasi()
    {
        return view('cs/registrasi');
    }

    public function atm()
    {
        return view('cs/atm');
    }

    public function ambilAtm()
    {

    }

    public function otp()
    {
        return view('cs/otp');
    }

    public function reg_id(Request $request)
    {
        $regid = $request->input('regid');
        $noKtp = $request->input('noKtp');

        $isidata = $regid . "|" . $noKtp;

        $this->logActivity('Cari Data Nasabah', 'Cari Registrasi Nasabah');

        DB::select('CALL sp_edit_nasabah_cs(?,?)', ['4', $isidata]);

        session()->put('regid', $regid);
        session()->put('noKtp', $noKtp);

        return redirect()->route('permohonan');
    }

    public function permohonan()
    {
        $regid = session()->get('regid');
        $noKtp = session()->get('noKtp');

        $isidata = $regid . "|" . $noKtp;
        $cabang = Auth::user()->cabang;

        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['1', $isidata]);
        $selesai = DB::select('CALL sp_nasabah(?,?)', ['3', $cabang]);

        return view('cs.permohonan', ['nasabahs' => $nasabah], ['selesai' => $selesai]);
    }

    public function konfirmasi($reg_id)
    {
        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['2', $reg_id]);

        $produks = DB::select('CALL sp_edit_nasabah_cs(?,?)', ['6', '']);

        $kodeao = DB::select('CALL sp_edit_nasabah_cs(?,?)', ['7', '']);

        $nasabah = $nasabah[0];

        return view('cs.konfirmasi', compact('nasabah', 'produks', 'kodeao'));
    }

    public function tabungan(Request $request, $reg_id)
    {
        // Mengambil data dari form
        $id_nasabah = $request->input('id_nasabah');
        $tabungan = $request->input('tabungan');
        $transfer = $request->input('transfer');
        $nilaisetor = $request->input('nilaisetor');
        $kode_ao = $request->input('kode_ao');
        $action = $request->input('action'); // Menambahkan ini

        $isidata = $id_nasabah . "|" . $tabungan . "|" . $transfer . "|" . $nilaisetor . "|" . $kode_ao;

        // Menambahkan kondisi if
        if ($action == 'proses') {
            $this->dukcapil($request, $id_nasabah);
            $dukcapilResponse = $this->dukcapil($request, $id_nasabah);
            if ($dukcapilResponse) {
                return $dukcapilResponse;
            }
            DB::select('CALL sp_edit_nasabah_cs(?,?)', ['2', $isidata]);
            $this->logActivity('Proses Data Nasabah', 'Verifikasi Data Nasabah');
            return redirect()->route('kirim.detail', ['reg_id' => $reg_id]);
        } else {
            DB::select('CALL sp_edit_nasabah_cs(?,?)', ['5', $isidata]);
            $this->logActivity('Menunggu Edit Data Nasabah', 'Edit Data Nasabah');
            return view('cs.edit');
        }
    }

    public function dukcapil(Request $request)
    {
        $client = new Client();
        $apiUrl = 'http://172.21.20.88:8000/api/checkNikDukcapil';

        $msg = "12345";
        $kosong = "";

        $jsonBody = [
            'msgId' => $msg,
            'nik' => $request->input('noKtp'),
            'nomerKk' => $kosong,
            'namaLengkap' => $request->input('namaCust'),
            'alamat' => $request->input('address1') . ', ' . $request->input('address4') . ', ' . $request->input('address3') . ', ' . $request->input('address5'),
            'tempatlahir' => $request->input('tempatLahir'),
            // 'tglLahir' => $request->input('datepicker1'),
            'tglLahir' => (new DateTime($request->input('datepicker1')))->format('d-m-Y'),
            'statusKawin' => $request->input('statusperkawinan'),
            'pendidikanAkhir' => $request->input('pendidikan'),
            'namaLengkapIbu' => $request->input('motherMaidenName'),
            'statusHBKEL' => $kosong,
            'kabupaten' => $request->input('address5'),
            'noKabupaten' => $kosong,
            'kecamatan' => $request->input('address4'),
            'noKecamatan' => $kosong,
            'kelurahan' => $request->input('address3'),
            'noKelurahan' => $kosong,
            'propinsi' => $request->input('propinsi'),
            'noPropinsi' => $kosong,
            'rt' => substr($request->input('address2'), 0, 3), // ambil 3 digit depan
            'rw' => substr($request->input('address2'), -3),  // ambil 3 digit belakang
            'jenisPekerjaan' => $request->input('jobPositionCode'),
            'jenisKelamin' => $request->input('sex'),
            'treshold' => "90"
        ];

        $response = $client->request('POST', $apiUrl, [
            'json' => $jsonBody
        ]);

        $statusCode = $response->getStatusCode();
        $body = $response->getBody();

        if ($statusCode == 200) {
            $data = json_decode($body, true);

            // Jika respCode adalah 68, NIK tidak ditemukan
            if (isset($data['respCode']) && $data['respCode'] == '68') {
                return redirect()->back()->with('error', 'NIK tidak ditemukan/salah input di dukcapil');
            }

            $namaLengkap = explode(' ', str_replace(['(', ')'], '', $data['namaLengkap']));
            if ($namaLengkap[0] != 'Sesuai' || (isset($namaLengkap[1]) && (int)$namaLengkap[1] < 90)) {
                return redirect()->back()->with('error', 'Nama lengkap tidak sesuai');
            }

            $tempatlahir = explode(' ', str_replace(['(', ')'], '', $data['tempatlahir']));
            if ($tempatlahir[0] != 'Sesuai' || (isset($tempatlahir[1]) && (int)$tempatlahir[1] < 90)) {
                return redirect()->back()->with('error', 'Tempat lahir tidak sesuai dengan dukcapil');
            }

            $namaLengkapIbu = explode(' ', str_replace(['(', ')'], '', $data['namaLengkapIbu']));
            if ($namaLengkapIbu[0] != 'Sesuai' || (isset($namaLengkapIbu[1]) && (int)$namaLengkapIbu[1] < 90)) {
                return redirect()->back()->with('error', 'Nama ibu tidak sesuai dengan dukcapil');
            }
        } else {
            // handle error
            return redirect()->back()->with('error', 'Invalid action');
        }
    }


    public function editview()
    {
        return view('cs.edit');
    }

    public function kirim($reg_id)
    {
        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['2', $reg_id]);
        $nasabah = $nasabah[0];
        return view('cs.kirim', compact('nasabah'));
    }

    public function cek_data(Request $request, $id_nasabah)
    {
        // Mengambil data dari form
        $id_nasabah = $request->input('id_nasabah');
        $aml = $request->input('aml') ? '1' : '0';
        $dukcapil = $request->input('dukcapil') ? '1' : '0';
        $edd = $request->input('edd') ? '1' : '0';
        $bo = $request->input('bo') ? '1' : '0';
        $cabang = Auth::user()->cabang;
        $flag_proses = $request->input('flag_proses');
        $catatan = $request->input('catatan');
        $wktukirim = date('Y-m-d H:i:s');

        $cifResponse = $this->checkCIF($request, $id_nasabah);
        if ($cifResponse) {
            return $cifResponse;
        }

        $isidata = $id_nasabah . "|" . $aml . "|" . $dukcapil . "|" . $edd . "|" . $bo . "|" . $cabang . "|" . $flag_proses . "|" . $catatan . "|" . $wktukirim;

        DB::select('CALL sp_edit_nasabah_cs(?,?)', ['3', $isidata]);

        $this->logActivity('Kirim Data Nasabah', 'Kirim Approval');

        return redirect()->route('menu')->with('success', 'Sukses mengirim data!');
        // return redirect()->route('listuser')->with('success', 'Sukses merubah data user!');
    }


    public function checkCIF(Request $request)
    {
        $client = new Client();
        $apiUrl = 'http://172.21.20.88:8000/api/inquirybyNik';

        $kosong = "";
        $jsonBody = [
            'msgId' => $kosong,
            'noKtp' => $request->input('noKtp'),
            'transactionId' => $kosong
        ];

        $response = $client->request('POST', $apiUrl, [
            'json' => $jsonBody
        ]);

        $statusCode = $response->getStatusCode();
        $body = $response->getBody();

        if ($statusCode == 200) {
            $data = json_decode($body, true);
            // dd($data);

            if ($data['cifNo'] == 'NN') {
                return;
            }

            if ($data['cifNo'] !== 'NN') {
                return redirect()->back()->with('error', 'Nasabah sudah memiliki CIF');
            }


        } else {
            // handle error
            return redirect()->back()->with('error', 'Invalid action');
        }
    }

    public function checkNIK(Request $request)
    {
        $client = new Client();
        $apiUrl = 'http://172.21.20.88:8800/api/digiformapi/inquirybyNik';
        $apiUrlCASA = 'http://172.21.20.88:8800/api/digiformapi/inquiryCASA';

        $kosong = "";

        $nik = $request->input('nik');
        $noAccount = $request->input('noAccount');

        $jsonBody = [
            'msgId' => $kosong,
            'noKtp' => $request->input('nik'),
            'transactionId' => $kosong
        ];

        $jsonBodyCASA = [
            'account' => $request->input('noAccount')
        ];

        $response = $client->request('POST', $apiUrl, [
            'json' => $jsonBody
        ]);

        $responseCASA = $client->request('POST', $apiUrlCASA, [
            'json' => $jsonBodyCASA
        ]);

        $statusCode = $response->getStatusCode();
        $body = $response->getBody();

        $statusCodeCASA = $responseCASA->getStatusCode();
        $bodyCASA = $responseCASA->getBody();

        if ($statusCode == 200 && $statusCodeCASA == 200) {
            $data = json_decode($body, true);
            $dataCASA = json_decode($bodyCASA, true);
            // Check if data is found
            if($data['cifNo'] !== 'NN'){
                if($dataCASA['respCode'] == '00'){
                    $cif = $data['cifNo'];
                    $noHp = $data['noHandPhone'];
                    $fullAddress = $data['fullAddress'];
                    $isidata = $nik . "|" . $noAccount . "|" . $cif . "|" . $fullAddress;
                    DB::select('CALL sp_atm(?,?)', ['1', $isidata]);
                    return response()->json(['result' => 'Data Sesuai', 'noHp' => $noHp, 'alamat' => $fullAddress]);
                }
                else{
                    return response()->json(['result' => 'No. Rekening Tidak Sesuai']);
                }
            }

            else if($data['cifNo'] == 'NN'){
                if($dataCASA['respCode'] == '00'){
                    return response()->json(['result' => 'NIK Tidak Sesuai']);
                }

                else{
                    return response()->json(['result' => 'Data not found']);
                }
            }
        } else {
            // Handle error
            return 'Error';
        }
    }

    public function checkFaceDukcapil(Request $request)
    {
        try {
            $client = new Client();
            $apiUrl = 'http://172.21.20.88:8800/api/digiformapi/checkFaceDukcapil';
            
            $nik = $request->input('nik');
            // $id_user_cs = Auth::user()->id;
            $id_user_cs = '1';
            // $id_customer = CustomerModel::where('nik', $nik)->first();
            $id_customer = DB::select('CALL sp_atm(?,?)', ['4', $nik]);
            $firstRow = $id_customer[0];
            $id_request = $firstRow->id_request;
            $tgl_verify = now()->setTimezone('Asia/Jakarta')->toDateTimeString();
            
            $kosong = "";
            $image = $request->image;
            $jsonBody = [
                'nik' => $nik,
                'image' => $image,
                'template' => $kosong
            ];
        
            $response = $client->request('POST', $apiUrl, [
                'json' => $jsonBody
            ]);
        
            $statusCode = $response->getStatusCode();
            $body = $response->getBody();
        
            if ($statusCode == 200) {
                $data = json_decode($body, true);
                // Check if data is found
                if ($data['message'] == "Success") {
                    $result_dukcapil = $data['respCode'];
                    $isidata = $id_user_cs . "|" . $id_request . "|" . $result_dukcapil . "|" . $tgl_verify;
                    DB::select('CALL sp_atm(?,?)', ['3', $isidata]);
                    // Return the HTML content
                    return 'Sudah Sesuai';
                } else {
                    // Return a message indicating data not found
                    return 'Tidak Sesuai';
                }
            } else {
                // Handle error
                return 'Error';
            }
        } catch (\Exception $e) {
            // Handle any unexpected exceptions (e.g., network errors)
            return 'Error: ' . $e->getMessage();
        }
    }

    public function sendOtp(Request $request)
    {
        try {
            $client = new Client();
            $apiUrl = 'http://172.21.20.88:8800/api/digiformapi/otpGenerate';

            $merchantCode = '6017';

            $noHp = $request->input('noHp');
            $jsonBody = [
                'msisdn' => $noHp,
                'merchantCode' => $merchantCode
            ];
        
            $response = $client->request('POST', $apiUrl, [
                'json' => $jsonBody
            ]);
        
            $statusCode = $response->getStatusCode();
            $body = $response->getBody();
        
            if ($statusCode == 200) {
                $data = json_decode($body, true);
                // Check if data is found
                if ($data['respCode'] == '00') {
                    $transId = $data['transactionId'];
                    return response()->json(['transId' => $transId]);
                } else {
                    // Return a message indicating data not found
                    return response()->json(['Tidak Sesuai']);
                }
            } else {
                // Handle error
                return response()->json(['Error']);
            }
        } catch (\Exception $e) {
            // Handle any unexpected exceptions (e.g., network errors)
            return 'Error: ' . $e->getMessage();
        }
    }

    public function token(Request $request)
    {
        try {
            $client = new Client();
            $apiUrl = 'http://172.21.20.88:8800/api/digiformapi/validateSoftToken';

            $transactionId = $request->input('transactionId');
            $token = $request->input('token');
            $jsonBody = [
                'transactionId' => $transactionId,
                'token' => $token
            ];
        
            $response = $client->request('POST', $apiUrl, [
                'json' => $jsonBody
            ]);
        
            $statusCode = $response->getStatusCode();
            $body = $response->getBody();
        
            if ($statusCode == 200) {
                $data = json_decode($body, true);
                // Check if data is found
                if ($data['respCode'] == '00') {
                    $message = $data['message'];
                    return response()->json(['message' => $message]);
                } 
                if ($data['respCode'] == '55') {
                    $message = $data['message'];
                    return response()->json(['message' => $message]);
                }else {
                    // Return a message indicating data not found
                    return response()->json(['message' =>'Tidak Sesuai']);
                }
            } else {
                // Handle error
                return response()->json(['message' =>'Error']);
            }
        } catch (\Exception $e) {
            // Handle any unexpected exceptions (e.g., network errors)
            return 'Error: ' . $e->getMessage();
        }
    }

    public function printatm($nik)
    {
        $nasabah = DB::select('CALL sp_atm(?,?)', ['5', $nik]);
    
        if (!empty($nasabah)) {
            $nasabah = $nasabah[0];
            return view('kaops.printatm', compact('nasabah'));
        } else {
            echo 'Tidak ada data';
        }
    }
    

    public function atmSave(Request $request){
        $nik = $request->input('nik');
        $tgl_datang = now()->setTimezone('Asia/Jakarta')->toDateTimeString();
        $image = $request->image;

        $isidata = $nik . "|" . $tgl_datang . "|" . $image;
        DB::select('CALL sp_atm(?,?)', ['2', $isidata]);

        // return view('kaops.printatm', compact('nik', 'image'));
    }
}
