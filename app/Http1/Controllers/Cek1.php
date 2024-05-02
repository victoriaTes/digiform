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
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
//use RealRashid\SweetAlert\Facades\Alert;
//use Image;
//use Intervention\Image\Facades\Image as Image;
// use Intervention\Image\ImageManager;
// use Intervention\Image\Drivers\Gd\Driver;


class Cek extends Controller
{
    public function index()
    {

    }

    public function ceknik()
    {
        return view('ceknik');
    }

    public function ktpnikcek(Request $request)
    {
        $nomornik = $request->input('nik');

        $data = DB::select('CALL sp_insert_nasabah(?,?)', ['4', $nomornik]);

        if($data){
            foreach($data as $slc){
                $regid = $slc->reg_id;
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
                $trx_str_tunai = $slc->trx_str_tunai;
                $trx_pnrkn_tunai = $slc->trx_pnrkn_tunai;
                $trx_str_nontunai = $slc->trx_str_nontunai;
                $trx_pnrkn_nontunai = $slc->trx_pnrkn_nontunai;
                $setoran_tunai = $slc->setoran_tunai;
                $penarikan_tunai = $slc->penarikan_tunai;
                $setoran_nontunai = $slc->setoran_nontunai;
                $penarikan_nontunai = $slc->penarikan_nontunai;
                $flag_proses = $slc->flag_proses;
            }
    
            $array = [
                "regid" => $regid,
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
    
                "trx_str_tunai" => $trx_str_tunai, 
                "trx_pnrkn_tunai" => $trx_pnrkn_tunai, 
                "trx_str_nontunai" => $trx_str_nontunai, 
                "trx_pnrkn_nontunai" => $trx_pnrkn_nontunai, 
    
                "setoran_tunai" => $setoran_tunai, 
                "penarikan_tunai" => $penarikan_tunai, 
                "setoran_nontunai" => $setoran_nontunai, 
                "penarikan_nontunai" => $penarikan_nontunai, 
            ];

            if($regid && $flag_proses=="1"){
                return view('resume',$array);
            }elseif($regid && $flag_proses=="6" || $flag_proses=="0"){
                $data = DB::select('CALL sp_insert_nasabah(?,?)', ['8', $regid]);

                foreach($data as $gbr){
                    $namagambar = $gbr->nama_gambar;
                }

                $rey = [
                    "regidd" => $regid,
                    "namagambaran" => $namagambar,
                ];

                // $nasabah = DB::select('CALL sp_nasabah(?,?)', ['2', $regid]);
                // $nasabah = $nasabah[0];
                // return view('cekfoto', compact('nasabah'));

                
                // echo $namagambaran;
                // die();

                return view('cekfoto',$rey);

                //echo $namagambar;
            }else{
                echo "Sedang Diproses"; 
            }
        }else{
            $array = [
                "regid" => 'T',
            ];
            return view('termcondition',$array);
        }
    }

    public function konfirmasah(Request $request)
    {
        $regid = $request->input('regid');

        $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $regid]);


        foreach($datax as $obj){
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
            $tgl_lahir = substr($tgl_lahir,0,2)."/".substr($tgl_lahir,2,2)."/".substr($tgl_lahir,4,4);
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
        ];

        return view('editkonfirmasi',$array);
    }

    public function editkonfirmasi(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns'
        ]);

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
        $propdomi = $request->input('propdomi');
        $kodeposdomi = $request->input('kodeposdomi');
        $tempatLahir = $request->input('tempatLahir');
        $datepicker1 = $request->input('datepicker1');
        $datepicker1 = substr($datepicker1,0,2).substr($datepicker1,3,2).substr($datepicker1,6,4);
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
        
        $isidata =  $regid."|".$nomornik."|".$namaCust."|".$gelar."|".$address1."|".$address2."|".$address3."|".$address4."|".$address5
                    ."|".$propinsi."|".$kodepos."|".$normh."|".$dom2."|".$dom3."|".$dom4."|".$dom5
                    ."|".$propdomi."|".$kodeposdomi."|".$tempatLahir."|".$datepicker1."|".$agama."|".$sex."|".$negara."|".$statusperkawinan."|".$pendidikan
                    ."|".$statusrumah."|".$motherMaidenName."|".$email."|".$dom1."|".$nohp;  


        $resulta = DB::select('CALL sp_insert_nasabah(?,?)', ['7', $isidata]);


        $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $regid]);


        foreach($datax as $obj){
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
            $bidang_usaha = $obj->bidang_usaha;
            $jabatan = $obj->jabatan;
            $alamat_perusahaan = $obj->alamat_perusahaan;
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
            "bidang_usaha" => $bidang_usaha, 
            "jabatan" => $jabatan, 
            "alamat_perusahaan" => $alamat_perusahaan, 
            "required" => 'required', 
        ];

        return view('datapekerjaan',$array);
    }

    public function editpekerjaan(Request $request)
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

        $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $nomornik]);


        foreach($datax as $obj){
            $reg_id = $obj->reg_id;
            $tujuan_rek = $obj->tujuan_rek;
            $sumber_dana = $obj->sumber_dana;
            $dana_tambahan = $obj->dana_tambahan;
            $tujuan_dana = $obj->tujuan_dana;  
        }

        $array = [
            "regid" => $reg_id,
            "tujuan_rek" => $tujuan_rek, 
            "sumber_dana" => $sumber_dana, 
            "dana_tambahan" => $dana_tambahan, 
            "tujuan_dana" => $tujuan_dana,    
        ];

        return view('editdatakeuangan',$array);
    }

    public function editestimasiperkiraan(Request $request)
    {
        $nomornik = $request->input('noKtp');
        $pembukanrekening = $request->input('pembukanrekening');
        $sumberdana = $request->input('sumberdana');
        $pengguanaandana = $request->input('pengguanaandana');
        $penghasilantambahan = $request->input('penghasilantambahan');

        $isidata = $nomornik."|".$pembukanrekening."|".$sumberdana."|".$penghasilantambahan."|".$pengguanaandana;  

        $resulta = DB::select('CALL sp_insert_nasabah(?,?)', ['3', $isidata]);

        $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $nomornik]);


        foreach($datax as $obj){
            $reg_id = $obj->reg_id;
            $trx_str_tunai = $obj->trx_str_tunai;
            $trx_pnrkn_tunai = $obj->trx_pnrkn_tunai;
            $trx_str_nontunai = $obj->trx_str_nontunai;
            $trx_pnrkn_nontunai = $obj->trx_pnrkn_nontunai;  
        }

        $array = [
            "regid" => $reg_id,
            "trx_str_tunai" => $trx_str_tunai, 
            "trx_pnrkn_tunai" => $trx_pnrkn_tunai, 
            "trx_str_nontunai" => $trx_str_nontunai, 
            "trx_pnrkn_nontunai" => $trx_pnrkn_nontunai,    
        ];

        return view('editestimasiperkiraan',$array);
    }

    public function editfrekuensitransaksi(Request $request)
    {
        $nomornik = $request->input('noKtp');
        $transaksisetorantunai = $request->input('transaksisetorantunai');
        $transaksipenukarantunai = $request->input('transaksipenukarantunai');
        $transaksisetorannontunai = $request->input('transaksisetorannontunai');
        $transaksipenarikannontunai = $request->input('transaksipenarikannontunai');

        $isidata = $nomornik."|".$transaksisetorantunai."|".$transaksipenukarantunai."|".$transaksisetorannontunai."|".$transaksipenarikannontunai;  

        $resulta = DB::select('CALL sp_insert_nasabah(?,?)', ['5', $isidata]);

        $datax = DB::select('CALL sp_insert_nasabah(?,?)', ['9', $nomornik]);

        foreach($datax as $obj){
            $reg_id = $obj->reg_id;
            $setoran_tunai = $obj->setoran_tunai;
            $penarikan_tunai = $obj->penarikan_tunai;
            $setoran_nontunai = $obj->setoran_nontunai;
            $penarikan_nontunai = $obj->penarikan_nontunai;  
        }

        $array = [
            "regid" => $reg_id,
            "setoran_tunai" => $setoran_tunai, 
            "penarikan_tunai" => $penarikan_tunai, 
            "setoran_nontunai" => $setoran_nontunai, 
            "penarikan_nontunai" => $penarikan_nontunai,    
        ];

        return view('editfrekuensitransaksi',$array);
    }

    public function home(){
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
}