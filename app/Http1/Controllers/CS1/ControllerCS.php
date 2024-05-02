<?php

namespace App\Http\Controllers\CS;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class ControllerCS
{
    public function menu()
    {
        return view('cs/menu');
    }

    public function permohonan()
    {
        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['1', '']);

        return view('cs.permohonan', ['nasabahs' => $nasabah]);
    }


    public function konfirmasi($id_nasabah)
    {
        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['2', $id_nasabah]);

        return view('cs.konfirmasi', ['nasabah' => $nasabah[0]]);
    }

    public function tabungan(Request $request, $id_nasabah)
    {
        // Mengambil data dari form
        $id_nasabah = $request->input('id_nasabah');
        $tabungan = $request->input('tabungan');

        $isidata = $id_nasabah . "|" . $tabungan;

        DB::select('CALL sp_edit_nasabah_cs(?,?)', ['2', $isidata]);

        return redirect()->route('selfie.detail', ['id_nasabah' => $id_nasabah]);
    }

    public function edit($id_nasabah)
    {
        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['2', $id_nasabah]);

        return view('cs.edit', ['nasabah' => $nasabah[0]]);
    }

    public function update_nasabah(Request $request, $id_nasabah)
    {
        // Mengambil data dari form
        $id_nasabah = $request->input('id_nasabah');
        $noKtp = $request->input('noKtp');
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
        // $datepicker1 = substr($datepicker1,0,2).substr($datepicker1,3,2).substr($datepicker1,6,4);
        $agama = $request->input('agama');
        $sex = $request->input('sex');
        $negara = $request->input('negara');
        $statusperkawinan = $request->input('statusperkawinan');
        $pendidikan = $request->input('pendidikan');
        $statusrumah = $request->input('statusrumah');
        $motherMaidenName = $request->input('motherMaidenName');
        $email = $request->input('email');
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
        $pembukanrekening = $request->input('pembukanrekening');
        $sumberdana = $request->input('sumberdana');
        $pengguanaandana = $request->input('pengguanaandana');

        $isidata = $id_nasabah . "|" . $noKtp . "|" . $namaCust . "|" . $gelar . "|" . $address1 . "|" . $address2 . "|" . $address3 . "|" . $address4 . "|" . $address5
            . "|" . $propinsi . "|" . $kodepos . "|" . $dom1 . "|" . $normh . "|" . $dom2 . "|" . $dom3 . "|" . $dom4 . "|" . $dom5
            . "|" . $propdomi . "|" . $kodeposdomi . "|" . $tempatLahir . "|" . $datepicker1 . "|" . $agama . "|" . $sex . "|" . $negara . "|" . $statusperkawinan . "|" . $pendidikan
            . "|" . $statusrumah . "|" . $motherMaidenName . "|" . $email . "|" . $namaperusahaan . "|" . $alamatPerusahaan . "|" . $rtperusahaan . "|" . $rwperusahaan . "|" . $kelurahanperusahaan
            . "|" . $kecamatanperusahaan . "|" . $kabupatenperusahaan . "|" . $propinsiperusahaan . "|" . $kodeposperusahaan . "|" . $teleponperusahaan . "|" . $jobPositionCode . "|" . $bidangusaha
            . "|" . $jabatan . "|" . $pembukanrekening . "|" . $sumberdana . "|" . $pengguanaandana;

        DB::select('CALL sp_edit_nasabah_cs(?,?)', ['1', $isidata]);

        // return $this->konfirmasi($id_nasabah);
        return redirect()->route('konfirmasi.detail', ['id_nasabah' => $id_nasabah]);
    }

    public function selfie($id_nasabah)
    {
        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['2', $id_nasabah]);

        return view('cs.selfie', ['nasabah' => $nasabah[0]]);
    }

    public function kirim($id_nasabah)
    {
        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['2', $id_nasabah]);

        return view('cs.kirim', ['nasabah' => $nasabah[0]]);
    }

    public function cek_data(Request $request, $id_nasabah)
    {
        $id_nasabah = $request->input('id_nasabah');
        $aml = $request->input('aml');
        $dukcapil = $request->input('dukcapil');

        $isidata = $id_nasabah . "|" . $aml . "|" . $dukcapil;

        DB::select('CALL sp_edit_nasabah_cs(?,?)', ['3', $isidata]);

        // return $this->menu();
        return redirect()->route('menu');
    }


    public function registrasi()
    {
        return view('cs/registrasi');
    }
}
