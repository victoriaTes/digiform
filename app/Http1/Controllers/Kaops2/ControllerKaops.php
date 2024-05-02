<?php

namespace App\Http\Controllers\Kaops;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ControllerKaops
{

    public function kaops()
    {
        $nasabah = DB::select('CALL sp_kaops(?,?)', ['1', '']);

        return view('kaops.menu', ['nasabahs' => $nasabah]);
    }


    public function approval_menu($id_nasabah)
    {
        $nasabah = DB::select('CALL sp_nasabah(?,?)', ['2', $id_nasabah]);
        $nasabah = $nasabah[0];
        return view('kaops.approval', compact('nasabah'));
    }


    public function approval(Request $request, $id_nasabah)
    {
        $id_nasabah = $request->input('id_nasabah');
        $action = $request->input('action');

        if ($action === 'approve') {
            $value = $request->input('approve');
            $spType = '3';
        } elseif ($action === 'reject') {
            $value = $request->input('reject');
            $spType = '4';
        } else {
            // Handle other actions or invalid actions
            return redirect()->back()->with('error', 'Invalid action');
        }

        $isidata = $id_nasabah . "|" . $value;
        DB::select('CALL sp_kaops(?,?)', [$spType, $isidata]);

        // Redirect or respond accordingly
        return redirect()->back()->with('success', 'Action completed successfully');
        // return;
    }
}
