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
        return view('msgkirimdata');
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

        // $dd['test']=$data[0];
        // echo $dd['test'];
        // die();

        // foreach ($data[]->resultarray() as $value) {
        //     echo "Nilai field1: ".$value."<br>";
        // }

        // foreach($data as $slc){
        //     $nomornika = $slc['nik'];
        //     $nama = $slc['nama_lengkap'];
        // }

        //echo $nama;
        //die();

        // $array = [
        //     "idNumber" => $nomornik, 
        // ];

        return view('viewdatanasabah',['data' => $data[0]]);
    }

}
