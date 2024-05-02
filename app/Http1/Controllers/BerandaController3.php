<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;


class BerandaController extends Controller
{
    public function index()
    {
        $dateTime = Carbon::now();
        $dateTime->setTimezone('Asia/Jakarta');
        $formattedTime = $dateTime->format('H');

        if($formattedTime<"24"){
            $data["greeting"]="Selamat Malam";
        }

        if($formattedTime<"18"){
            $data["greeting"]="Selamat Sore";
        }

        if($formattedTime<"15"){
            $data["greeting"]="Selamat Siang";
        }
        
        if($formattedTime<"11"){
            $data["greeting"]="Selamat Pagi";
        }

        return view('landing',$data);
    }
	
	public function login()
    {
        return view('authentication/login');
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

        $request->validate([
            'file' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        $file = $request->file('file');

        $filename = $file->getClientOriginalName();
        
        $file->storeAs('foto', $filename, 'public');

        $nama_gambar = $filename;
        $jenis_gambar = $file->getClientOriginalExtension();
        $ukuran_gambar = $file->getSize();

        $isidata = "" . "|" . $nama_gambar . "|" . $jenis_gambar . "|" . $ukuran_gambar;

        DB::select('CALL sp_upload_gambar(?,?)', ['1', $isidata]);

        return view('konfirmasi');
    }

    // public function upload(Request $request, $id_nasabah)
    // {
    //     $reg_id = $request->input('reg_id');

    //     $request->validate([
    //         'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
    //     ]);

    //     $file = $request->file('image');

    //     $filename = $file->getClientOriginalName();
    //     $file->storeAs('selfie', $filename, 'public');

    //     $nama_gambar = $filename;
    //     $jenis_gambar = $file->getClientOriginalExtension();
    //     $ukuran_gambar = $file->getSize();

    //     $isidata = $reg_id . "|" . $nama_gambar . "|" . $jenis_gambar . "|" . $ukuran_gambar;

    //     DB::select('CALL sp_upload_gambar(?,?)', ['1', $isidata]);
        
    //     return redirect()->route('kirim.detail', ['id_nasabah' => $id_nasabah]);
    // }

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
        $request->validate([
            'email' => 'required|email:dns'
        ]);

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
        $propdomi = $request->input('propdomi');
        $kodeposdomi = $request->input('kodeposdomi');
        $tempatLahir = $request->input('tempatLahir');
        $datepicker1 = $request->input('datepicker1');
        $datepicker1 = substr($datepicker1,0,2).substr($datepicker1,3,2).substr($datepicker1,6,4);
        $agama = $request->input('agama');
        $sex = $request->input('sex');
        $negara = $request->input('negara');
        $statusperkawinan = $request->input('statusperkawinan');
        $pendidikan = $request->input('pendidikan');
        $statusrumah = $request->input('statusrumah');
        $motherMaidenName = $request->input('motherMaidenName');
        $email = $request->input('email');
        
        $isidata = $nomornik."|".$namaCust."|".$gelar."|".$address1."|".$address2."|".$address3."|".$address4."|".$address5
                    ."|".$propinsi."|".$kodepos."|".$normh."|".$dom2."|".$dom3."|".$dom4."|".$dom5
                    ."|".$propdomi."|".$kodeposdomi."|".$tempatLahir."|".$datepicker1."|".$agama."|".$sex."|".$negara."|".$statusperkawinan."|".$pendidikan
                    ."|".$statusrumah."|".$motherMaidenName."|".$email."|".$dom1;  


        $resulta = DB::select('CALL sp_insert_nasabah(?,?)', ['1', $isidata]);

        // $_SESSION["nik"] = $nomornik;
        // echo $_SESSION["nik"];
        // die();

        $array = [
            "idNumber" => $nomornik,   
        ];

        // dd('register berhasil');
        return view('datapekerjaan',$array);
    }

    public function datakeuangan(Request $request)
    {
        $nomornik = $request->input('noKtp');
        return view('datakeuangan');
    }

    public function datakeuangin(Request $request)
    {
        $nomornik = $request->input('noKtp');
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
        $jobPositionCode = $request->input('jobPositionCode');
        $bidangusaha = $request->input('bidangusaha');
        $jabatan = $request->input('jabatan');

        $isidata = $nomornik."|".$namaperusahaan."|".$alamatPerusahaan."|".$rtperusahaan."|".$rwperusahaan."|".$kelurahanperusahaan."|".$kecamatanperusahaan."|".$kabupatenperusahaan."|".$propinsiperusahaan
                    ."|".$kodeposperusahaan."|".$teleponperusahaan."|".$jobPositionCode."|".$bidangusaha."|".$jabatan;  


        // echo $isidata;
        // die();

        $resulta = DB::select('CALL sp_insert_nasabah(?,?)', ['2', $isidata]);

        $array = [
            "idNumber" => $nomornik,   
        ];

        return view('datakeuangan',$array);
    }

    public function unggahfoto()
    {
        return view('unggahfoto');
    }

    public function viewdatanasabah()
    {
        return view('viewdatanasabah');
    }

    public function msgkirimdata()
    {
        return view('mssgkirim');
    }

    public function viewdatanasabih(Request $request)
    {
        $nomornik = $request->input('noKtp');
        $pembukanrekening = $request->input('pembukanrekening');
        $sumberdana = $request->input('sumberdana');
        $pengguanaandana = $request->input('pengguanaandana');

        $isidata = $nomornik."|".$pembukanrekening."|".$sumberdana."|".$pengguanaandana;  

        $resulta = DB::select('CALL sp_insert_nasabah(?,?)', ['3', $isidata]);


        $data = DB::select('CALL sp_insert_nasabah(?,?)', ['4', $nomornik]);

        foreach($data as $slc){
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
            $tgl_lahir = substr($tgl_lahir,2,2)."-".substr($tgl_lahir,0,2)."-".substr($tgl_lahir,4,4);
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
            $telpon_perusahaan = $slc->telpon_perusahaan;
            $pekerjaan = $slc->pekerjaan;
            $bidang_usaha = $slc->bidang_usaha;
            $jabatan = $slc->jabatan;
            $tujuan_rek = $slc->tujuan_rek;
            $sumber_dana = $slc->sumber_dana;
            $tujuan_dana = $slc->tujuan_dana;
        }

        $array = [
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
            "tujuan_rek" => $tujuan_rek, 
            "sumber_dana" => $sumber_dana, 
            "tujuan_dana" => $tujuan_dana, 
        ];
        //echo $nama;

        //echo  $idNumber;
        //var_dump($nomornika);
        //die();

        // $dd['test']=$data[0];
        // echo $dd['test'];
        // die();

        // foreach ($data[]->resultarray() as $value) {
        //     echo "Nilai field1: ".$value."<br>";
        // }

       

        //echo $nama;
        //die();

        

        return view('viewdatanasabah',$array);
    }

}
