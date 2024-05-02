<?php

namespace App\Http\Controllers\Kaops;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ControllerKaops
{
    // public function kaops()
    // {
    //     return view('kaops/menu');
    // }

    public function kaops()
    {
        $nasabah = DB::select('CALL sp_kaops(?,?)', ['1', '']);

        return view('kaops.menu', ['nasabahs' => $nasabah]);
    }

    // public function approval()
    // {
    //     return view('kaops/approval');
    // }

    public function approval($id_nasabah)
    {
        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['2', $id_nasabah]);

        return view('kaops.approval', ['nasabah' => $nasabah[0]]);
    }

    // public function otorisasi(Request $request, $id_nasabah)
    // {

    //     // $id_nasabah = $request->input('id_nasabah');
    //     // $flag_status = $request->input('flag_status');

    //     // $isidata = $id_nasabah . "|" . $flag_status;

    //     // DB::select('CALL sp_edit_nasabah_cs(?,?)', ['3', $isidata]);

    //     $nasabah = DB::select('CALL sp_kaops(?,?)', ['1', '']);

    //     return redirect()->route('kaops.menu', ['nasabahs' => $nasabah]);
    // }

    

}
