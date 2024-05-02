<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Digiformemail;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
//use Illuminate\Support\Facades\Mail; 
use App\Mail\Digiformemail;
use Mail;
//use Illuminate\Support\Facades\Mail;
//use RealRashid\SweetAlert\Facades\Alert;
//use Image;
//use Intervention\Image\Facades\Image as Image;
// use Intervention\Image\ImageManager;
// use Intervention\Image\Drivers\Gd\Driver;


class BerandaController extends Controller
{
    public function index()
    {
        $dateTime = Carbon::now();
        $dateTime->setTimezone('Asia/Jakarta');
        $formattedTime = $dateTime->format('H');

        if ($formattedTime < "24") {
            $data["greeting"] = "Selamat Malam";
        }

        if ($formattedTime < "18") {
            $data["greeting"] = "Selamat Sore";
        }

        if ($formattedTime < "15") {
            $data["greeting"] = "Selamat Siang";
        }

        if ($formattedTime < "11") {
            $data["greeting"] = "Selamat Pagi";
        }

        return view('landing', $data);
    }

    public function termcondition()
    {
        return view('termcondition');
    }

    public function openaccount()
    {
        return view('openaccount');
    }


    public function addaccount()
    {
        return view('addaccount');
    }

    public function konfirmasi()
    {
        return view('konfirmasi');
    }

    public function konfirmasa(Request $request)
    {
        //$reg_id = $request->input('reg_id');
        //''file' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048','
        //'file' => 'required|image|file|max:1024',

        // $request->validate([
        //     'file' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
        // ]);
        $prop = DB::select('CALL sp_insert_nasabah(?,?)', ['13', '']);
        $agam = DB::select('CALL referensi(?)', ['AGAMA']);
        $STATUSNIKA = DB::select('CALL referensi(?)', ['STATUSNIKAH']);

        // foreach($prop as $jkt){
        //     $nama_prop = $jkt->nama_prop;
        // }

        $file = $request->file('file');

        $ukuran_gambar = $file->getSize();

        $filename = $file->getClientOriginalName();

        $file->storeAs('gambarktp', $filename, 'public');


        $nama_gambar = $filename;
        $jenis_gambar = $file->getClientOriginalExtension();


        $data_to_send  = [
            'multipart' => [
                [
                    'name' => 'ocrImage',
                    'contents' => fopen($file->path(), 'r'),
                ],
            ],
        ];

        $client = new Client();
        $response = $client->post('http://172.21.24.38:8000/api/cekKtp', [
            // $response = $client->post('http://voucher.victoriabank.co.id/api-adapter/cekKtp', [
            'multipart' => $data_to_send['multipart'],
        ]);

        $dataObj = json_decode($response->getBody(), true);

        if (is_null($dataObj)) {
            echo "Gagal OCR";
        } else {
            $rowdata = DB::select('CALL sp_insert_nasabah(?,?)', ['16', $dataObj['idNumber']]);

            foreach ($rowdata as $drt) {
                $jumlah = $drt->jumlah;
            }

            if ($jumlah == 0) {
                $responses = $client->request('POST', 'http://172.21.24.38:8000/api/inquirybyNik', [
                    'form_params' => [
                        'nik' => $dataObj['idNumber'],
                    ]
                ]);

                $responseBody = json_decode($responses->getBody(), true);

                if ($responseBody['cifNo'] == "NN") {
                    $regidi = $request->input('regid');

                    $ultah = substr($dataObj['birthday'], 3, 2) . "" . substr($dataObj['birthday'], 0, 2) . "" . substr($dataObj['birthday'], 6, 4);

                    if ($dataObj['religion'] == "KATHOLIK") {
                        $agamas = "KATOLIK";
                    } elseif ($dataObj['religion'] == "KRISTEN") {
                        $agamas = "PROTESTAN";
                    } elseif ($dataObj['religion'] == "BUDDHA") {
                        $agamas = "BUDHA";
                    } elseif ($dataObj['religion'] == "KONGHUCU") {
                        $agamas = "KHONGHUCU";
                    } else {
                        $agamas = $dataObj['religion'];
                    }

                    if ($dataObj['maritalStatus'] == "KAWIN") {
                        $statusnikah = "MENIKAH";
                    } elseif ($dataObj['maritalStatus'] == "BELUM KAWIN") {
                        $statusnikah = "BELUM NIKAH";
                    } else {
                        $statusnikah = $dataObj['maritalStatus'];
                    }

                    if ($dataObj['occupation'] == "MENGURUS RUMAH TANGGA") {
                        $kerja = "IBU RUMAH TANGGA";
                    } elseif ($dataObj['occupation'] == "PENSIUNAN") {
                        $kerja = "PENSIUNAN PEG. NEGERI/SWASTA";
                    } else {
                        $kerja = $dataObj['occupation'];
                    }

                    $dataxkrj = DB::select('select kode from referensi where keterangan = ? and tipe = "012";', [$kerja]);


                    foreach($dataxkrj as $ty){
                        $kerja = $ty->kode;
                    }

                    if ($regidi == "T") {
                        $datainsert = $dataObj['idNumber'] . "|" . $dataObj['name'] . "|" . $dataObj['address'] . "|" . $dataObj['rtrw'] . "|" .
                            $dataObj['village'] . "|" . $dataObj['district'] . "|" . $dataObj['city'] . "|" . $dataObj['province']
                            . "|" . $dataObj['birthPlace'] . "|" . $ultah . "|" . $agamas . "|" . $dataObj['gender'] . "|" . $statusnikah
                            . "|" . $kerja;

                        DB::select('CALL sp_insert_nasabah(?,?)', ['1', $datainsert]);

                        $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['4', $dataObj['idNumber']]);

                        foreach ($datax as $obj) {
                            $reg_id = $obj->reg_id;
                            $idNumber = $obj->nik;
                            $nama = $obj->nama_lengkap;
                            $alamat_ktp = $obj->alamat_ktp;
                            $rtrw_ktp = $obj->rtrw_ktp;
                            $kelurahan_ktp = $obj->kelurahan_ktp;
                            $kecamatan_ktp = $obj->kecamatan_ktp;
                            $kabupaten_ktp = $obj->kabupaten_ktp;
                            $propinsi_ktp = $obj->propinsi_ktp;
                            $tempat_lahir = $obj->tempat_lahir;
                            $tgl_lahir = $obj->tgl_lahir;
                            $tgl_lahir = substr($tgl_lahir, 0, 2) . "/" . substr($tgl_lahir, 2, 2) . "/" . substr($tgl_lahir, 4, 4);
                            $agama = $obj->agama;
                            $jenis_kelamin = $obj->jenis_kelamin;
                            $status_perkawinan = $obj->status_perkawinan;
                            $pekerjaan = $obj->pekerjaan;
                        }


                        //$tgllhr = substr($tgllhr, 3, 2).substr($tgllhr, 0, 2).substr($tgllhr, 6, 4);

                        $array = [
                            "reg_id" => $reg_id,
                            "idNumber" => $idNumber,
                            "nama_lengkap" => $nama,
                            "alamat_ktp" => $alamat_ktp,
                            "rtrw_ktp" => $rtrw_ktp,
                            "kelurahan_ktp" => $kelurahan_ktp,
                            "kecamatan_ktp" => $kecamatan_ktp,
                            "kabupaten_ktp" => $kabupaten_ktp,
                            "propinsi_ktp" => $propinsi_ktp,
                            "tempat_lahir" => $tempat_lahir,
                            "tgl_lahir" => $tgl_lahir,
                            "agama" => $agama,
                            "jenis_kelamin" => $jenis_kelamin,
                            "status_perkawinan" => $status_perkawinan,
                            "pekerjaan" => $pekerjaan,

                            "gelar" => '',
                            "kodepos" => '',
                            "normh" => '',
                            "dom1" => '',
                            "dom2" => '',
                            "dom3" => '',
                            "dom4" => '',
                            "dom5" => '',
                            "propdomi" => '',
                            "kodeposdomi" => '',
                            "nohp" => '',
                            "negara" => '',
                            "pendidikan" => '',
                            "statusrumah" => '',
                            "motherMaidenName" => '',

                            "email" => '',

                            "hobby" => '',
                            "punya_anak" => '',
                            "punya_istri" => '',
                        ];
                    } else {
                        $datainsert = $regidi . "|" . $dataObj['idNumber'] . "|" . $dataObj['name'] . "|" . $dataObj['address'] . "|" . $dataObj['rtrw'] . "|" .
                            $dataObj['village'] . "|" . $dataObj['district'] . "|" . $dataObj['city'] . "|" . $dataObj['province']
                            . "|" . $dataObj['birthPlace'] . "|" . $ultah . "|" . $agamas . "|" . $dataObj['gender'] . "|" . $statusnikah
                            . "|" . $kerja;

                        DB::select('CALL sp_insert_nasabah(?,?)', ['11', $datainsert]);

                        $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $regidi]);

                        foreach ($datax as $obj) {
                            $reg_id = $obj->reg_id;
                            $idNumber = $obj->nik;
                            $nama = $obj->nama_lengkap;
                            $alamat_ktp = $obj->alamat_ktp;
                            $rtrw_ktp = $obj->rtrw_ktp;
                            $kelurahan_ktp = $obj->kelurahan_ktp;
                            $kecamatan_ktp = $obj->kecamatan_ktp;
                            $kabupaten_ktp = $obj->kabupaten_ktp;
                            $propinsi_ktp = $obj->propinsi_ktp;
                            $tempat_lahir = $obj->tempat_lahir;
                            $tgl_lahir = $obj->tgl_lahir;
                            $tgl_lahir = substr($tgl_lahir, 0, 2) . "/" . substr($tgl_lahir, 2, 2) . "/" . substr($tgl_lahir, 4, 4);
                            $agama = $obj->agama;
                            $jenis_kelamin = $obj->jenis_kelamin;
                            $status_perkawinan = $obj->status_perkawinan;
                            $pekerjaan = $obj->pekerjaan;

                            $nomor_rumah = $obj->nomor_rumah;
                            $alamat = $obj->alamat;
                            $gelar = $obj->gelar;
                            $kode_pos_ktp = $obj->kode_pos_ktp;
                            $rtrw = $obj->rtrw;
                            $kelurahan = $obj->kelurahan;
                            $kecamatan = $obj->kecamatan;
                            $kabupaten = $obj->kabupaten;
                            $propinsi = $obj->propinsi;
                            $kode_pos = $obj->kode_pos;
                            $negara = $obj->negara;
                            $pendidikan = $obj->pendidikan;
                            $status_rumah = $obj->status_rumah;
                            $nama_ibu = $obj->nama_ibu;

                            $email = $obj->email;
                            $no_hp = $obj->no_hp;

                            $hobby = $obj->hobby;
                            $punya_anak = $obj->punya_anak;
                            $punya_istri = $obj->punya_istri;
                        }

                        $array = [
                            "reg_id" => $reg_id,
                            "idNumber" => $idNumber,
                            "nama_lengkap" => $nama,
                            "alamat_ktp" => $alamat_ktp,
                            "rtrw_ktp" => $rtrw_ktp,
                            "kelurahan_ktp" => $kelurahan_ktp,
                            "kecamatan_ktp" => $kecamatan_ktp,
                            "kabupaten_ktp" => $kabupaten_ktp,
                            "propinsi_ktp" => $propinsi_ktp,
                            "tempat_lahir" => $tempat_lahir,
                            "tgl_lahir" => $tgl_lahir,
                            "agama" => $agama,
                            "jenis_kelamin" => $jenis_kelamin,
                            "status_perkawinan" => $status_perkawinan,
                            "pekerjaan" => $pekerjaan,

                            "gelar" => $gelar,
                            "kodepos" => $kode_pos_ktp,
                            "normh" => $nomor_rumah,
                            "dom1" => $alamat,
                            "dom2" => $rtrw,
                            "dom3" => $kelurahan,
                            "dom4" => $kecamatan,
                            "dom5" => $kabupaten,
                            "propdomi" => $propinsi,
                            "kodeposdomi" => $kode_pos,
                            "nohp" => $no_hp,
                            "negara" => $negara,
                            "pendidikan" => $pendidikan,
                            "statusrumah" => $status_rumah,
                            "motherMaidenName" => $nama_ibu,

                            "email" => $email,

                            "hobby" => $hobby,
                            "punya_anak" => $punya_anak,
                            "punya_istri" => $punya_istri,
                        ];
                    }

                    $isidata = $reg_id . "|" . $nama_gambar . "|" . $jenis_gambar . "|" . $ukuran_gambar;
                    DB::select('CALL sp_upload_gambar(?,?)', ['1', $isidata]);




                    return view('konfirmasi', $array, compact('prop', 'agam', 'STATUSNIKA'));
                } else {
                    echo " <script>
                    alert('NIK Anda Sudah Terdaftar Menjadi Nasabah !');
                        </script>";
                    return view('unggahfoto');
                    //echo "Sudah Nasabah ".$responseBody['cifNo']; 
                }
            } else {
                echo " <script>
                alert('NIK Anda Sudah Pernah Di daftarkan !');
                    </script>";
                return view('ceknik');
            }
        }
    }


    public function konfirmasih()
    {
        return view('konfirmasi');
    }

    public function datapekerjaan()
    {
        return view('datapekerjaan');
    }

    public function datapekerjain(Request $request)
    {
        //return request()->all();
        $btnkrmdata = $request->input('login');

        $prop = DB::select('CALL sp_insert_nasabah(?,?)', ['13', '']);
        $PEKERJAA = DB::select('CALL referensi(?)', ['PEKERJAAN']);
        $BIDANGPEKERJAA = DB::select('CALL referensi(?)', ['BIDANGPEKERJAAN']);
        $JABATA = DB::select('CALL referensi(?)', ['JABATAN']);
        $KARYAWA = DB::select('CALL referensi(?)', ['KARYAWAN']);

        if ($btnkrmdata == "Kembali") {
            $regid = $request->input('regid');

            $array = [
                "regid" => $regid,
            ];

            return view('unggahfoto', $array);
        } else {
            $request->validate([
                'email' => 'required|email:dns'
            ]);


            if ($request->has('domis')) {
                $propdomi = $request->input('propdomi');
            } else {
                $propdomi = $request->input('propdomis');
            }

            $regid = $request->input('regid');
            $nomornik = $request->input('noKtp');
            $namaCust = $request->input('namaCust');
            $gelar = $request->input('gelar');
            $address1 = $request->input('address1');
            $address2 = $request->input('address2');
            $address3 = $request->input('address3');
            $address4 = $request->input('address4');
            $address5 = $request->input('address5');
            $propinsi = $request->input('propinsi');
            $kodepos = $request->input('kodepos');
            $dom1 = $request->input('dom1');
            $normh = $request->input('normh');
            $dom2 = $request->input('dom2');
            $dom3 = $request->input('dom3');
            $dom4 = $request->input('dom4');
            $dom5 = $request->input('dom5');

            $kodeposdomi = $request->input('kodeposdomi');
            $tempatLahir = $request->input('tempatLahir');
            $datepicker1 = $request->input('datepicker1');
            $datepicker1 = substr($datepicker1, 0, 2) . substr($datepicker1, 3, 2) . substr($datepicker1, 6, 4);
            $nohp = $request->input('nohp');
            $agama = $request->input('agama');
            $sex = $request->input('sex');
            $negara = $request->input('negara');
            $statusperkawinan = $request->input('statusperkawinan');
            $pendidikan = $request->input('pendidikan');
            $statusrumah = $request->input('statusrumah');
            $motherMaidenName = $request->input('motherMaidenName');
            $email = $request->input('email');
            $pekerjaan = $request->input('pekerjaan');
            $istri = $request->input('istri');
            $anak = $request->input('anak');
            $hobby = $request->input('hobby');

            $isidata =  $regid . "|" . $nomornik . "|" . $namaCust . "|" . $gelar . "|" . $address1 . "|" . $address2 . "|" . $address3 . "|" . $address4 . "|" . $address5
                . "|" . $propinsi . "|" . $kodepos . "|" . $normh . "|" . $dom2 . "|" . $dom3 . "|" . $dom4 . "|" . $dom5
                . "|" . $propdomi . "|" . $kodeposdomi . "|" . $tempatLahir . "|" . $datepicker1 . "|" . $agama . "|" . $sex . "|" . $negara . "|" . $statusperkawinan . "|" . $pendidikan
                . "|" . $statusrumah . "|" . $motherMaidenName . "|" . $email . "|" . $dom1 . "|" . $nohp . "|" . $hobby . "|" . $anak . "|" . $istri;


            $resulta = DB::select('CALL sp_insert_nasabah(?,?)', ['7', $isidata]);

            $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $regid]);

            foreach ($datax as $obj) {
                $reg_id = $obj->reg_id;
                $nama_perusahaan = $obj->nama_perusahaan;
                $rt_perusahaan = $obj->rt_perusahaan;
                $rw_perusahaan = $obj->rw_perusahaan;
                $kelurahan_perusahaan = $obj->kelurahan_perusahaan;
                $kecamatan_perusahaan = $obj->kecamatan_perusahaan;
                $kabupaten_perusahaan = $obj->kabupaten_perusahaan;
                $propinsi_perusahaan = $obj->propinsi_perusahaan;
                $kode_pos_perusahaan = $obj->kode_pos_perusahaan;
                $telpon_perusahaan = $obj->telpon_perusahaan;
                $kd_pekerjaan = $obj->kd_pekerjaan;
                $pekerjaan = $obj->pekerjaan;
                $kd_usaha = $obj->kd_usaha;
                $bidang_usaha = $obj->bidang_usaha;
                $jabatan = $obj->jabatan;
                $alamat_perusahaan = $obj->alamat_perusahaan;
                $artlpprs = $obj->artlpprs;
                $lama_kerja = $obj->lama_kerja;
                $jumlah_karyawan = $obj->jumlah_karyawan;
            }



            if ($nama_perusahaan) {
                $array = [
                    "idNumber" => $reg_id,
                    "nama_perusahaan" => $nama_perusahaan,
                    "rt_perusahaan" => $rt_perusahaan,
                    "rw_perusahaan" => $rw_perusahaan,
                    "kelurahan_perusahaan" => $kelurahan_perusahaan,
                    "kecamatan_perusahaan" => $kecamatan_perusahaan,
                    "kabupaten_perusahaan" => $kabupaten_perusahaan,
                    "propinsi_perusahaan" => $propinsi_perusahaan,
                    "kode_pos_perusahaan" => $kode_pos_perusahaan,
                    "telpon_perusahaan" => $telpon_perusahaan,
                    "kd_pekerjaan" => $kd_pekerjaan,
                    "pekerjaan" => $pekerjaan,
                    "kd_usaha" => $kd_usaha,
                    "bidang_usaha" => $bidang_usaha,
                    "jabatan" => $jabatan,
                    "alamat_perusahaan" => $alamat_perusahaan,
                    "artlpprs" => $artlpprs,
                    "lama_kerja" => $lama_kerja,
                    "jumlah_karyawan" => $jumlah_karyawan,
                    "required" => '',
                ];
            } else {
                $array = [
                    "idNumber" => $regid,
                    "pekerjaan" => $pekerjaan,
                    "nama_perusahaan" => '',
                    "rt_perusahaan" => '',
                    "rw_perusahaan" => '',
                    "kelurahan_perusahaan" => '',
                    "kecamatan_perusahaan" => '',
                    "kabupaten_perusahaan" => '',
                    "propinsi_perusahaan" => '',
                    "kode_pos_perusahaan" => '',
                    "telpon_perusahaan" => '',
                    "kd_pekerjaan" => $kd_pekerjaan,
                    "kd_usaha" => '',
                    "bidang_usaha" => '',
                    "jabatan" => '',
                    "alamat_perusahaan" => '',
                    "artlpprs" => '',
                    "lama_kerja" => '',
                    "jumlah_karyawan" => '',
                    "required" => '',
                ];
            }

            // dd('register berhasil');
            return view('datapekerjaan', $array, compact('prop', 'PEKERJAA', 'BIDANGPEKERJAA', 'JABATA', 'KARYAWA'));
        }
    }

    public function datakeuangan(Request $request)
    {
        $nomornik = $request->input('noKtp');
        return view('datakeuangan');
    }

    public function datakeuangin(Request $request)
    {
        $nomornik = $request->input('noKtp');
        $btnkrmdata = $request->input('login');

        if ($btnkrmdata == "Kembali") {

            $prop = DB::select('CALL sp_insert_nasabah(?,?)', ['13', '']);
            $agam = DB::select('CALL referensi(?)', ['AGAMA']);
            $STATUSNIKA = DB::select('CALL referensi(?)', ['STATUSNIKAH']);

            $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $nomornik]);

            foreach ($datax as $obj) {
                $reg_id = $obj->reg_id;
                $idNumber = $obj->nik;
                $nama = $obj->nama_lengkap;
                $alamat_ktp = $obj->alamat_ktp;
                $rtrw_ktp = $obj->rtrw_ktp;
                $kelurahan_ktp = $obj->kelurahan_ktp;
                $kecamatan_ktp = $obj->kecamatan_ktp;
                $kabupaten_ktp = $obj->kabupaten_ktp;
                $propinsi_ktp = $obj->propinsi_ktp;
                $tempat_lahir = $obj->tempat_lahir;
                $tgl_lahir = $obj->tgl_lahir;
                $tgl_lahir = substr($tgl_lahir, 0, 2) . "/" . substr($tgl_lahir, 2, 2) . "/" . substr($tgl_lahir, 4, 4);
                $agama = $obj->agama;
                $jenis_kelamin = $obj->jenis_kelamin;
                $status_perkawinan = $obj->status_perkawinan;
                $pekerjaan = $obj->pekerjaan;

                $nomor_rumah = $obj->nomor_rumah;
                $alamat = $obj->alamat;
                $gelar = $obj->gelar;
                $kode_pos_ktp = $obj->kode_pos_ktp;
                $rtrw = $obj->rtrw;
                $kelurahan = $obj->kelurahan;
                $kecamatan = $obj->kecamatan;
                $kabupaten = $obj->kabupaten;
                $propinsi = $obj->propinsi;
                $kode_pos = $obj->kode_pos;
                $negara = $obj->negara;
                $pendidikan = $obj->pendidikan;
                $status_rumah = $obj->status_rumah;
                $nama_ibu = $obj->nama_ibu;

                $email = $obj->email;
                $no_hp = $obj->no_hp;

                $hobby = $obj->hobby;
                $punya_anak = $obj->punya_anak;
                $punya_istri = $obj->punya_istri;
            }

            $array = [
                "reg_id" => $reg_id,
                "idNumber" => $idNumber,
                "nama_lengkap" => $nama,
                "alamat_ktp" => $alamat_ktp,
                "rtrw_ktp" => $rtrw_ktp,
                "kelurahan_ktp" => $kelurahan_ktp,
                "kecamatan_ktp" => $kecamatan_ktp,
                "kabupaten_ktp" => $kabupaten_ktp,
                "propinsi_ktp" => $propinsi_ktp,
                "tempat_lahir" => $tempat_lahir,
                "tgl_lahir" => $tgl_lahir,
                "agama" => $agama,
                "jenis_kelamin" => $jenis_kelamin,
                "status_perkawinan" => $status_perkawinan,
                "pekerjaan" => $pekerjaan,

                "gelar" => $gelar,
                "kodepos" => $kode_pos_ktp,
                "normh" => $nomor_rumah,
                "dom1" => $alamat,
                "dom2" => $rtrw,
                "dom3" => $kelurahan,
                "dom4" => $kecamatan,
                "dom5" => $kabupaten,
                "propdomi" => $propinsi,
                "kodeposdomi" => $kode_pos,
                "nohp" => $no_hp,
                "negara" => $negara,
                "pendidikan" => $pendidikan,
                "statusrumah" => $status_rumah,
                "motherMaidenName" => $nama_ibu,

                "email" => $email,

                "hobby" => $hobby,
                "punya_anak" => $punya_anak,
                "punya_istri" => $punya_istri,

                "required" => '',
            ];

            return view('konfirmasi', $array, compact('prop', 'agam', 'STATUSNIKA'));
        } else {
            $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $nomornik]);
            $SUMBERPENGHASILA = DB::select('CALL referensi(?)', ['SUMBERPENGHASILAN']);
            $SUMBERDAN = DB::select('CALL referensi(?)', ['SUMBERDANA']);
            $PENDAPATA = DB::select('CALL referensi(?)', ['PENDAPATAN']);

            foreach ($datax as $obj) {
                $reg_id = $obj->reg_id;
                $tujuan_rek = $obj->tujuan_rek;
                $sumber_dana = $obj->sumber_dana;
                $dana_tambahan = $obj->dana_tambahan;
                $tujuan_dana = $obj->tujuan_dana;
                $penghasilan = $obj->penghasilan;
                $omzet_karyawan = $obj->omzet_karyawan;
            }

            if ($tujuan_rek) {
                // echo "test ".$required;
                // die();

                $array = [
                    "idNumber" => $reg_id,
                    "tujuan_rek" => $tujuan_rek,
                    "sumber_dana" => $sumber_dana,
                    "dana_tambahan" => $dana_tambahan,
                    "tujuan_dana" => $tujuan_dana,
                    "penghasilan" => $penghasilan,
                    "omzet_karyawan" => $omzet_karyawan,
                    "required" => '',

                ];
            } else {
                // echo "woy ".$required;
                // die();

                $array = [
                    "idNumber" => $nomornik,
                    "tujuan_rek" => '',
                    "sumber_dana" => '',
                    "dana_tambahan" => '',
                    "tujuan_dana" => '',
                    "penghasilan" => '',
                    "omzet_karyawan" => '',
                    "required" => 'required',
                ];
            }


            $namaperusahaan = $request->input('namaperusahaan');
            $alamatPerusahaan = $request->input('alamatPerusahaan');
            $rtperusahaan = $request->input('rtperusahaan');
            $rwperusahaan = $request->input('rwperusahaan');
            $kelurahanperusahaan = $request->input('kelurahanperusahaan');
            $kecamatanperusahaan = $request->input('kecamatanperusahaan');
            $kabupatenperusahaan = $request->input('kabupatenperusahaan');
            $propinsiperusahaan = $request->input('propinsiperusahaan');
            $kodeposperusahaan = $request->input('kodeposperusahaan');
            $teleponperusahaan = $request->input('teleponperusahaan');
            $teleponareaperusahaan = $request->input('teleponareaperusahaan');
            $jobPositionCode = $request->input('jobPositionCode');
            $bidangusaha = $request->input('bidangusaha');
            $jabatan = $request->input('jabatan');
            $lama_kerja = $request->input('lama_kerja');
            $jumlah_karyawan = $request->input('jumlah_karyawan');

            $isidata = $nomornik . "|" . $namaperusahaan . "|" . $alamatPerusahaan . "|" . $rtperusahaan . "|" . $rwperusahaan . "|" . $kelurahanperusahaan . "|" . $kecamatanperusahaan . "|" . $kabupatenperusahaan . "|" . $propinsiperusahaan
                . "|" . $kodeposperusahaan . "|" . $teleponperusahaan . "|" . $jobPositionCode . "|" . $bidangusaha . "|" . $jabatan . "|" . $teleponareaperusahaan . "|" . $lama_kerja . "|" . $jumlah_karyawan;


            // echo $isidata;
            // die();

            $resulta = DB::select('CALL sp_insert_nasabah(?,?)', ['2', $isidata]);

            return view('datakeuangan', $array, compact('SUMBERPENGHASILA', 'SUMBERDAN', 'PENDAPATA'));
        }
    }

    public function unggahfoto(Request $request)
    {
        $regid = $request->input('regid');

        $array = [
            "regid" => $regid,
        ];

        return view('unggahfoto', $array);
    }

    public function viewdatanasabah()
    {
        return view('viewdatanasabah');
    }

    public function msgkirimdata(Request $request)
    {
        $nomornik = $request->input('noKtp');
        $btnkrmdata = $request->input('login');
        $PENDAPATA = DB::select('CALL referensi(?)', ['PENDAPATAN']);
        $FREKUENSI = DB::select('CALL referensi(?)', ['FREKUENSI']);

        if ($btnkrmdata == "Kembali") {
            $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $nomornik]);

            foreach ($datax as $obj) {
                $reg_id = $obj->reg_id;
                $setoran_tunai = $obj->setoran_tunai;
                $penarikan_tunai = $obj->penarikan_tunai;
                $setoran_nontunai = $obj->setoran_nontunai;
                $penarikan_nontunai = $obj->penarikan_nontunai;
            }

            $array = [
                "idNumber" => $reg_id,
                "setoran_tunai" => $setoran_tunai,
                "penarikan_tunai" => $penarikan_tunai,
                "setoran_nontunai" => $setoran_nontunai,
                "penarikan_nontunai" => $penarikan_nontunai,
            ];

            return view('frekuensitransaksi', $array, compact('PENDAPATA', 'FREKUENSI'));
        } else {
            $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $nomornik]);

            foreach ($datax as $obj) {
                $reg_id = $obj->reg_id;
                $email = $obj->email;
                $nama = $obj->nama_lengkap;
                $nomornika = $obj->nik;
                $nama_ibu = $obj->nama_ibu;
                $tempat_lahir = $obj->tempat_lahir;
                $tgl_lahir = $obj->tgl_lahir;
                $alamat_ktp = $obj->alamat_ktp;
                $propinsi_ktp = $obj->propinsi_ktp;
                $jabatan = $obj->jabatan;
                $pekerjaan = $obj->pekerjaan;
                $sumber_dana = $obj->sumber_dana;
                $bidang_usaha = $obj->bidang_usaha;
            }

            $tgl_lahir = substr($tgl_lahir, 2, 2) . "-" . substr($tgl_lahir, 0, 2) . "-" . substr($tgl_lahir, 4, 4);

            $datap = DB::select('CALL sp_insert_nasabah(?,?)', ['14', $nomornik]);

            foreach ($datap as $dml) {
                $idaml = $dml->idaml;
            }

            $client = new Client();
            $responses = $client->request('POST', 'http://digital.victoriabank.co.id/api/cekAML', [
                'form_params' => [
                    'subsystem' => 'Mobile Banking',
                    'name' => $nama,
                    'position' => $jabatan,
                    'occupation' => $pekerjaan,
                    'personType' => 'Nasabah',
                    'country' => 'Indonesia',
                    'province' => $propinsi_ktp,
                    'dateOfBirth' => $tgl_lahir,
                    'identityNo' => $nomornika,
                    'product' => 'Tabungan',
                    'address' => $alamat_ktp,
                    'sourceOfFund' => $sumber_dana,
                    'motherName' => $nama_ibu,
                    'placeOfBirth' => $tempat_lahir,
                    'id' => $idaml,
                    'natureOfBusiness' => $bidang_usaha,
                    'taxNo' => $nomornika,
                ]
            ]);

            $responseBody = json_decode($responses->getBody(), true);

            foreach ($responseBody as $mli) {
                $hasil = $mli["hasil"];
                $riskProfile = $mli["riskProfile"];
                $riskId = $mli["riskId"];
            }

            if ($hasil == "LOLOS") {
                $array = [
                    "regid" => $nomornik,
                ];

                $datisi = $nomornik . "|" . $riskProfile . "|" . $riskId;

                $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['17', $datisi]);

                $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['10', $nomornik]);

                //dd($nomornik);
                try {
                    Mail::to($email)
                        ->send(new Digiformemail(
                            $reg_id,
                            $nama,
                            $nomornika
                        ));

                    return view('mssgkirim', $array);
                } catch (\Exception $e) {
                    dd($e->getMessage());
                }
            } else {
                echo " <script>
                alert('Maaf Data Anda Tidak Lolos Verifikasi, Silahkan Input Kembali data !');
                    </script>";

                $dltdata = DB::select('CALL sp_insert_nasabah(?,?)', ['15', $nomornik]);

                return view('home');
            }

            // $has = $wow["hasil"];
            // $riskProfile = $wow['riskProfile'];
            // $riskId = $wow["riskId"];

        }
    }

    public function viewdatanasabih(Request $request)
    {
        $nomornik = $request->input('noKtp');
        $btnkrmdata = $request->input('login');
        $PENDAPATA = DB::select('CALL referensi(?)', ['PENDAPATAN']);

        if ($btnkrmdata == "Kembali") {
            $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $nomornik]);


            foreach ($datax as $obj) {
                $reg_id = $obj->reg_id;
                $trx_str_tunai = $obj->trx_str_tunai;
                $trx_pnrkn_tunai = $obj->trx_pnrkn_tunai;
                $trx_str_nontunai = $obj->trx_str_nontunai;
                $trx_pnrkn_nontunai = $obj->trx_pnrkn_nontunai;
            }

            $array = [
                "idNumber" => $reg_id,
                "trx_str_tunai" => $trx_str_tunai,
                "trx_pnrkn_tunai" => $trx_pnrkn_tunai,
                "trx_str_nontunai" => $trx_str_nontunai,
                "trx_pnrkn_nontunai" => $trx_pnrkn_nontunai,
            ];

            return view('estimasiperkiraan', $array, compact('PENDAPATA'));
        } else {
            $setorantunai = $request->input('setorantunai');
            $penukarantunai = $request->input('penukarantunai');
            $setorannontunai = $request->input('setorannontunai');
            $penarikannontunai = $request->input('penarikannontunai');

            $isidata = $nomornik . "|" . $setorantunai . "|" . $penukarantunai . "|" . $setorannontunai . "|" . $penarikannontunai;

            $resulta = DB::select('CALL sp_insert_nasabah(?,?)', ['6', $isidata]);

            $data = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $nomornik]);

            foreach ($data as $slc) {
                $reg_id = $slc->reg_id;
                $nomornika = $slc->nik;
                $nama = $slc->nama_lengkap;
                $alamat_ktp = $slc->alamat_ktp;
                $gelar = $slc->gelar;
                $rtrw_ktp = $slc->rtrw_ktp;
                $kelurahan_ktp = $slc->kelurahan_ktp;
                $kecamatan_ktp = $slc->kecamatan_ktp;
                $kabupaten_ktp = $slc->kabupaten_ktp;
                $nomornika = $slc->nik;
                $propinsi_ktp = $slc->propinsi_ktp;
                $kode_pos_ktp = $slc->kode_pos_ktp;
                $alamat = $slc->alamat;
                $nomor_rumah = $slc->nomor_rumah;
                $rtrw = $slc->rtrw;
                $kelurahan = $slc->kelurahan;
                $kecamatan = $slc->kecamatan;
                $kabupaten = $slc->kabupaten;
                $propinsi = $slc->propinsi;
                $kode_pos = $slc->kode_pos;
                $tempat_lahir = $slc->tempat_lahir;
                $tgl_lahir = $slc->tgl_lahir;

                if (substr($tgl_lahir, 0, 2) == 1) {
                    $bulan = "Januari";
                } elseif (substr($tgl_lahir, 0, 2) == 2) {
                    $bulan = "Februari";
                } elseif (substr($tgl_lahir, 0, 2) == 3) {
                    $bulan = "Maret";
                } elseif (substr($tgl_lahir, 0, 2) == 4) {
                    $bulan = "April";
                } elseif (substr($tgl_lahir, 0, 2) == 5) {
                    $bulan = "Mei";
                } elseif (substr($tgl_lahir, 0, 2) == 6) {
                    $bulan = "Juni";
                } elseif (substr($tgl_lahir, 0, 2) == 7) {
                    $bulan = "Juli";
                } elseif (substr($tgl_lahir, 0, 2) == 8) {
                    $bulan = "Agustus";
                } elseif (substr($tgl_lahir, 0, 2) == 9) {
                    $bulan = "September";
                } elseif (substr($tgl_lahir, 0, 2) == 10) {
                    $bulan = "Oktober";
                } elseif (substr($tgl_lahir, 0, 2) == 11) {
                    $bulan = "November";
                } else {
                    $bulan = "Desember";
                }

                $tgl_lahir = substr($tgl_lahir, 2, 2) . " " . $bulan . " " . substr($tgl_lahir, 4, 4);
                $agama = $slc->agama;
                $jenis_kelamin = $slc->jenis_kelamin;
                $negara = $slc->negara;
                $status_perkawinan = $slc->status_perkawinan;
                $pendidikan = $slc->pendidikan;
                $status_rumah = $slc->status_rumah;
                $nama_ibu = $slc->nama_ibu;
                $email = $slc->email;
                $nama_perusahaan = $slc->nama_perusahaan;
                $alamat_perusahaan = $slc->alamat_perusahaan;
                $rt_perusahaan = $slc->rt_perusahaan;
                $rw_perusahaan = $slc->rw_perusahaan;
                $kelurahan_perusahaan = $slc->kelurahan_perusahaan;
                $kecamatan_perusahaan = $slc->kecamatan_perusahaan;
                $kabupaten_perusahaan = $slc->kabupaten_perusahaan;
                $propinsi_perusahaan = $slc->propinsi_perusahaan;
                $kode_pos_perusahaan = $slc->kode_pos_perusahaan;
                $telpon_perusahaan = $slc->artlpprs . " - " . $slc->telpon_perusahaan;

                $pekerjaan = $slc->pekerjaan;
                $bidang_usaha = $slc->bidang_usaha;
                $jabatan = $slc->jabatan;
                $lama_kerja = $slc->lama_kerja;
                $jumlah_karyawan = $slc->jumlah_karyawan;

                $omzet_karyawan = $slc->omzet_karyawan;
                $penghasilan = $slc->penghasilan;
                $dana_tambahan = $slc->dana_tambahan;
                $tujuan_rek = $slc->tujuan_rek;
                $sumber_dana = $slc->sumber_dana;
                $tujuan_dana = $slc->tujuan_dana;

                $trx_str_tunai = $slc->trx_str_tunai;
                $trx_pnrkn_tunai = $slc->trx_pnrkn_tunai;
                $trx_str_nontunai = $slc->trx_str_nontunai;
                $trx_pnrkn_nontunai = $slc->trx_pnrkn_nontunai;
                $setoran_tunai = $slc->setoran_tunai;
                $penarikan_tunai = $slc->penarikan_tunai;
                $setoran_nontunai = $slc->setoran_nontunai;
                $penarikan_nontunai = $slc->penarikan_nontunai;

                $hobby = $slc->hobby;
                $punya_anak = $slc->punya_anak;
                $punya_istri = $slc->punya_istri;

                $no_hp = $slc->no_hp;
            }

            $array = [
                "regid" => $reg_id,
                "idNumber" => $nomornika,
                "nama_lengkap" => $nama,
                "gelar" => $gelar,
                "alamat_ktp" => $alamat_ktp,
                "rtrw_ktp" => $rtrw_ktp,
                "kelurahan_ktp" => $kelurahan_ktp,
                "kecamatan_ktp" => $kecamatan_ktp,
                "kabupaten_ktp" => $kabupaten_ktp,
                "propinsi_ktp" => $propinsi_ktp,
                "kode_pos_ktp" => $kode_pos_ktp,
                "alamat" => $alamat,
                "nomor_rumah" => $nomor_rumah,
                "rtrw" => $rtrw,
                "kelurahan" => $kelurahan,
                "kecamatan" => $kecamatan,
                "kabupaten" => $kabupaten,
                "propinsi" => $propinsi,
                "kode_pos" => $kode_pos,
                "tempat_lahir" => $tempat_lahir,
                "tgl_lahir" => $tgl_lahir,
                "agama" => $agama,
                "jenis_kelamin" => $jenis_kelamin,
                "negara" => $negara,
                "status_perkawinan" => $status_perkawinan,
                "pendidikan" => $pendidikan,
                "status_rumah" => $status_rumah,
                "nama_ibu" => $nama_ibu,
                "email" => $email,
                "nama_perusahaan" => $nama_perusahaan,
                "alamat_perusahaan" => $alamat_perusahaan,
                "rt_perusahaan" => $rt_perusahaan,
                "rw_perusahaan" => $rw_perusahaan,
                "kelurahan_perusahaan" => $kelurahan_perusahaan,
                "kecamatan_perusahaan" => $kecamatan_perusahaan,
                "kabupaten_perusahaan" => $kabupaten_perusahaan,
                "propinsi_perusahaan" => $propinsi_perusahaan,
                "kode_pos_perusahaan" => $kode_pos_perusahaan,
                "telpon_perusahaan" => $telpon_perusahaan,
                "pekerjaan" => $pekerjaan,
                "bidang_usaha" => $bidang_usaha,
                "jabatan" => $jabatan,
                "lama_kerja" => $lama_kerja,
                "jumlah_karyawan" => $jumlah_karyawan,

                "omzet_karyawan" => $omzet_karyawan,
                "penghasilan" => $penghasilan,
                "dana_tambahan" => $dana_tambahan,
                "tujuan_rek" => $tujuan_rek,
                "sumber_dana" => $sumber_dana,
                "tujuan_dana" => $tujuan_dana,

                "trx_str_tunai" => $trx_str_tunai,
                "trx_pnrkn_tunai" => $trx_pnrkn_tunai,
                "trx_str_nontunai" => $trx_str_nontunai,
                "trx_pnrkn_nontunai" => $trx_pnrkn_nontunai,

                "setoran_tunai" => $setoran_tunai,
                "penarikan_tunai" => $penarikan_tunai,
                "setoran_nontunai" => $setoran_nontunai,
                "penarikan_nontunai" => $penarikan_nontunai,

                "hobby" => $hobby,
                "punya_anak" => $punya_anak,
                "punya_istri" => $punya_istri,

                "no_hp" => $no_hp,
            ];

            return view('viewdatanasabah', $array);
        }
    }

    public function frekuensitransaksi()
    {
        return view('frekuensitransaksi');
    }

    public function frekuensitransaksa(Request $request)
    {
        $nomornik = $request->input('noKtp');
        $btnkrmdata = $request->input('login');
        $SUMBERPENGHASILA = DB::select('CALL referensi(?)', ['SUMBERPENGHASILAN']);
        $SUMBERDAN = DB::select('CALL referensi(?)', ['SUMBERDANA']);
        $PENDAPATA = DB::select('CALL referensi(?)', ['PENDAPATAN']);
        $FREKUENSI = DB::select('CALL referensi(?)', ['FREKUENSI']);

        if ($btnkrmdata == "Kembali") {
            $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $nomornik]);


            foreach ($datax as $obj) {
                $reg_id = $obj->reg_id;
                $omzet_karyawan = $obj->omzet_karyawan;
                $penghasilan = $obj->penghasilan;
                $tujuan_rek = $obj->tujuan_rek;
                $sumber_dana = $obj->sumber_dana;
                $dana_tambahan = $obj->dana_tambahan;
                $tujuan_dana = $obj->tujuan_dana;
            }

            $array = [
                "idNumber" => $reg_id,
                "omzet_karyawan" => $omzet_karyawan,
                "penghasilan" => $penghasilan,
                "tujuan_rek" => $tujuan_rek,
                "sumber_dana" => $sumber_dana,
                "dana_tambahan" => $dana_tambahan,
                "tujuan_dana" => $tujuan_dana,
            ];

            return view('datakeuangan', $array, compact('SUMBERPENGHASILA', 'SUMBERDAN','PENDAPATA'));
        } else {
            $transaksisetorantunai = $request->input('transaksisetorantunai');
            $transaksipenukarantunai = $request->input('transaksipenukarantunai');
            $transaksisetorannontunai = $request->input('transaksisetorannontunai');
            $transaksipenarikannontunai = $request->input('transaksipenarikannontunai');

            $isidata = $nomornik . "|" . $transaksisetorantunai . "|" . $transaksipenukarantunai . "|" . $transaksisetorannontunai . "|" . $transaksipenarikannontunai;

            $resulta = DB::select('CALL sp_insert_nasabah(?,?)', ['5', $isidata]);

            $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $nomornik]);

            foreach ($datax as $obj) {
                $reg_id = $obj->reg_id;
                $setoran_tunai = $obj->setoran_tunai;
                $penarikan_tunai = $obj->penarikan_tunai;
                $setoran_nontunai = $obj->setoran_nontunai;
                $penarikan_nontunai = $obj->penarikan_nontunai;
            }

            if ($setoran_tunai) {
                $array = [
                    "idNumber" => $reg_id,
                    "setoran_tunai" => $setoran_tunai,
                    "penarikan_tunai" => $penarikan_tunai,
                    "setoran_nontunai" => $setoran_nontunai,
                    "penarikan_nontunai" => $penarikan_nontunai,
                ];
            } else {
                $array = [
                    "idNumber" => $nomornik,
                    "setoran_tunai" => '',
                    "penarikan_tunai" => '',
                    "setoran_nontunai" => '',
                    "penarikan_nontunai" => '',
                ];
            }

            return view('frekuensitransaksi', $array, compact('PENDAPATA', 'FREKUENSI'));
        }
    }

    public function estimasiperkiraan()
    {
        return view('estimasiperkiraan');
    }

    public function estimasiperkirain(Request $request)
    {
        $btnkrmdata = $request->input('login');
        $nomornik = $request->input('noKtp');
        $prop = DB::select('CALL sp_insert_nasabah(?,?)', ['13', '']);
        $PEKERJAA = DB::select('CALL referensi(?)', ['PEKERJAAN']);
        $BIDANGPEKERJAA = DB::select('CALL referensi(?)', ['BIDANGPEKERJAAN']);
        $JABATA = DB::select('CALL referensi(?)', ['JABATAN']);
        $PENDAPATA = DB::select('CALL referensi(?)', ['PENDAPATAN']);
        $KARYAWA = DB::select('CALL referensi(?)', ['KARYAWAN']);

        if ($btnkrmdata == "Kembali") {
            $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $nomornik]);

            foreach ($datax as $obj) {
                $reg_id = $obj->reg_id;
                $nama_perusahaan = $obj->nama_perusahaan;
                $rt_perusahaan = $obj->rt_perusahaan;
                $rw_perusahaan = $obj->rw_perusahaan;
                $kelurahan_perusahaan = $obj->kelurahan_perusahaan;
                $kecamatan_perusahaan = $obj->kecamatan_perusahaan;
                $kabupaten_perusahaan = $obj->kabupaten_perusahaan;
                $propinsi_perusahaan = $obj->propinsi_perusahaan;
                $kode_pos_perusahaan = $obj->kode_pos_perusahaan;
                $telpon_perusahaan = $obj->telpon_perusahaan;
                $pekerjaan = $obj->pekerjaan;
                $kd_usaha = $obj->kd_usaha;
                $bidang_usaha = $obj->bidang_usaha;
                $jabatan = $obj->jabatan;
                $alamat_perusahaan = $obj->alamat_perusahaan;
                $artlpprs = $obj->artlpprs;
                $lama_kerja = $obj->lama_kerja;
                $jumlah_karyawan = $obj->jumlah_karyawan;
                $kd_pekerjaan = $obj->kd_pekerjaan;
               
            }

            $array = [
                "idNumber" => $reg_id,
                "nama_perusahaan" => $nama_perusahaan,
                "rt_perusahaan" => $rt_perusahaan,
                "rw_perusahaan" => $rw_perusahaan,
                "kelurahan_perusahaan" => $kelurahan_perusahaan,
                "kecamatan_perusahaan" => $kecamatan_perusahaan,
                "kabupaten_perusahaan" => $kabupaten_perusahaan,
                "propinsi_perusahaan" => $propinsi_perusahaan,
                "kode_pos_perusahaan" => $kode_pos_perusahaan,
                "telpon_perusahaan" => $telpon_perusahaan,
                "pekerjaan" => $pekerjaan,
                "kd_usaha" => $kd_usaha,
                "bidang_usaha" => $bidang_usaha,
                "jabatan" => $jabatan,
                "alamat_perusahaan" => $alamat_perusahaan,
                "artlpprs" => $artlpprs,
                "lama_kerja" => $lama_kerja,
                "jumlah_karyawan" => $jumlah_karyawan,
                "kd_pekerjaan" => $kd_pekerjaan,
                "required" => '',
            ];

            return view('datapekerjaan', $array, compact('prop', 'PEKERJAA', 'BIDANGPEKERJAA', 'JABATA', 'KARYAWA'));
        } else {
            $pembukanrekening = $request->input('pembukanrekening');
            $sumberdana = $request->input('sumberdana');
            $pengguanaandana = $request->input('pengguanaandana');
            $penghasilantambahan = $request->input('penghasilantambahan');
            $penghasilan = $request->input('penghasilan');
            $omzet_karyawan = $request->input('omzet_karyawan');

            $isidata = $nomornik . "|" . $pembukanrekening . "|" . $sumberdana . "|" . $penghasilantambahan . "|" . $pengguanaandana . "|" . $penghasilan . "|" . $omzet_karyawan;

            $resulta = DB::select('CALL sp_insert_nasabah(?,?)', ['3', $isidata]);

            $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $nomornik]);

            foreach ($datax as $obj) {
                $reg_id = $obj->reg_id;
                $trx_str_tunai = $obj->trx_str_tunai;
                $trx_pnrkn_tunai = $obj->trx_pnrkn_tunai;
                $trx_str_nontunai = $obj->trx_str_nontunai;
                $trx_pnrkn_nontunai = $obj->trx_pnrkn_nontunai;
            }

            if ($trx_str_tunai) {
                $array = [
                    "idNumber" => $reg_id,
                    "trx_str_tunai" => $trx_str_tunai,
                    "trx_pnrkn_tunai" => $trx_pnrkn_tunai,
                    "trx_str_nontunai" => $trx_str_nontunai,
                    "trx_pnrkn_nontunai" => $trx_pnrkn_nontunai,
                    "required" => 'required',
                ];
            } else {

                $array = [
                    "idNumber" => $nomornik,
                    "trx_str_tunai" => '',
                    "trx_pnrkn_tunai" => '',
                    "trx_str_nontunai" => '',
                    "trx_pnrkn_nontunai" => '',
                    "required" => 'required',
                ];
            }

            return view('estimasiperkiraan', $array, compact('PENDAPATA'));
        }
    }
}
