<?php

namespace App\Http\Controllers\CS;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ControllerCS extends Controller
{
    public function logActivity($activity, $action)
    {
        $username = Auth::user()->username;
        $tanggal = date('Y-m-d H:i:s');
        $cabang = Auth::user()->cabang;

        $log = $username . "|" . $activity . "|" . $tanggal . "|" . $cabang . "|" . $action;

        DB::select('CALL sp_log(?,?)', ['1', $log]);
    }

    public function registrasi()
    {
        return view('cs/registrasi');
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

        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['1', $isidata]);

        return view('cs.permohonan', ['nasabahs' => $nasabah]);
    }

    public function konfirmasi($reg_id)
    {
        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['2', $reg_id]);

        $nasabah = $nasabah[0];

        return view('cs.konfirmasi', compact('nasabah'));
    }


    // public function tabungan(Request $request, $reg_id)
    // {
    //     // Mengambil data dari form
    //     $id_nasabah = $request->input('id_nasabah');
    //     $tabungan = $request->input('tabungan');
    //     $transfer = $request->input('transfer');
    //     $nilaisetor = $request->input('nilaisetor');

    //     $isidata = $id_nasabah . "|" . $tabungan . "|" . $transfer . "|" . $nilaisetor;

    //     DB::select('CALL sp_edit_nasabah_cs(?,?)', ['2', $isidata]);

    //     return redirect()->route('lokasi.detail', ['reg_id' => $reg_id]);
    // }

    public function tabungan(Request $request, $reg_id)
    {
        // Mengambil data dari form
        $id_nasabah = $request->input('id_nasabah');
        $tabungan = $request->input('tabungan');
        $transfer = $request->input('transfer');
        $nilaisetor = $request->input('nilaisetor');
        $action = $request->input('action'); // Menambahkan ini

        $isidata = $id_nasabah . "|" . $tabungan . "|" . $transfer . "|" . $nilaisetor;

        // Menambahkan kondisi if
        if ($action == 'proses') {
            DB::select('CALL sp_edit_nasabah_cs(?,?)', ['2', $isidata]);
            $this->logActivity('Proses Data Nasabah', 'Verifikasi Data Nasabah');
            return redirect()->route('lokasi.detail', ['reg_id' => $reg_id]);
        } else {
            DB::select('CALL sp_edit_nasabah_cs(?,?)', ['5', $isidata]);
            $this->logActivity('Menunggu Edit Data Nasabah', 'Edit Data Nasabah');
            return view('cs.edit');
        }
    }


    public function lokasi($reg_id)
    {
        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['2', $reg_id]);
        $nasabah = $nasabah[0];
        return view('cs.lokasi', compact('nasabah'));
    }

    public function editview()
    {
        return view('cs.edit');
    }

    public function selfie(Request $request, $reg_id)
    {

        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['2', $reg_id])[0];
        return view('cs.selfie', compact('nasabah'));
    }

    public function upload(Request $request, $id_nasabah)
    {
        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['2', $id_nasabah]);
        $reg_id = $nasabah[0]->reg_id;

        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);

        $file = $request->file('image');

        $filename = $file->getClientOriginalName();
        $file->storeAs('selfie', $filename, 'public');

        $nama_gambar = $filename;
        $jenis_gambar = $file->getClientOriginalExtension();
        $ukuran_gambar = $file->getSize();

        $isidata = $reg_id . "|" . $nama_gambar . "|" . $jenis_gambar . "|" . $ukuran_gambar;

        $this->logActivity('Upload Selfie Nasabah', 'Selfie Nasabah');

        DB::select('CALL sp_upload_gambar(?,?)', ['2', $isidata]);
        DB::select('CALL sp_upload_gambar(?,?)', ['3', $reg_id]);

        return redirect()->route('kirim.detail', ['reg_id' => $reg_id]);
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
        $aml = $request->input('aml');
        $dukcapil = $request->input('dukcapil');
        $edd = $request->input('edd');
        $bo = $request->input('bo');
        $cabang = Auth::user()->cabang;
        $flag_proses = $request->input('flag_proses');

        $isidata = $id_nasabah . "|" . $aml . "|" . $dukcapil . "|" . $edd . "|" . $bo . "|" . $cabang . "|" . $flag_proses;

        DB::select('CALL sp_edit_nasabah_cs(?,?)', ['3', $isidata]);

        $this->logActivity('Kirim Data Nasabah', 'Kirim Approval');

        return redirect()->route('menu')->with('success', 'Sukses mengirim data!');
        // return redirect()->route('listuser')->with('success', 'Sukses merubah data user!');
    }
}
