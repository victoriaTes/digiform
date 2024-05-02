<?php

namespace App\Http\Controllers\Kaops;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerKaops
{


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

        $userlogin = Auth::user()->username;
        $tanggal = date('Y-m-d H:i:s');
        $cabanglogin = Auth::user()->cabang;


        if ($action === 'approve') {
            $value = $request->input('approve');
            $spType = '3';
            $successMessage = 'Sukses approve data nasabah!';
            $aktivitas = 'Sukses Approve Data Nasabah';
            $actionuser = 'Approve Data Nasabah';
        } elseif ($action === 'reject') {
            $value = $request->input('reject');
            $spType = '4';
            $successMessage = 'Sukses menolak data nasabah!';
            $aktivitas = 'Sukses Reject Data Nasabah';
            $actionuser = 'Reject Data Nasabah';
        } elseif ($action === 'edit') {
            $value = $request->input('edit');
            $spType = '5';
            $isidata = $id_nasabah . "|" . $value;

            $userlogin = Auth::user()->username;
            $aktivitas = 'Sukses Ubah Status Edit Data Nasabah';
            $tanggal = date('Y-m-d H:i:s');
            $cabanglogin = Auth::user()->cabang;
            $actionuser = 'Edit Data Nasabah';
            $login = $userlogin . "|" . $aktivitas . "|" . $tanggal . "|" . $cabanglogin . "|" . $actionuser;

            // Call the stored procedure to log the logout activity
            DB::select('CALL sp_log(?,?)', ['1', $login]);
            DB::select('CALL sp_kaops(?,?)', [$spType, $isidata]);
            return view('kaops/edit');
        } else {
            // Handle other actions or invalid actions
            return redirect()->back()->with('error', 'Invalid action');
        }

        $login = $userlogin . "|" . $aktivitas . "|" . $tanggal . "|" . $cabanglogin . "|" . $actionuser;

        $isidata = $id_nasabah . "|" . $value;

        DB::select('CALL sp_kaops(?,?)', [$spType, $isidata]);

        DB::select('CALL sp_log(?,?)', ['1', $login]);

        return redirect()->route('kaops')->with('success', $successMessage);
    }
}
