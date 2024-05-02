<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;

class Tes extends Controller
{

    public function splog()
    {
        $results = DB::select('CALL sp_log(?,?)', ['2', '']);
        return response()->json($results);
    }
	
	public function logActivity(Request $request)
    {
        try {
            $validated = $request->validate([
                'userlogin' => 'required',
                'activityuser' => 'required',
                'actionuser' => 'required',
                'cabanguser' => 'required',
            ]);

            $userlogin = $request->input('userlogin');
            $activityuser = $request->input('activityuser');
            $actionuser = $request->input('actionuser');
            $tanggal = date('Y-m-d H:i:s');
            $cabanguser = $request->input('cabanguser');

            $log = $userlogin . "|" . $activityuser . "|" . $tanggal . "|" . $cabanguser . "|" . $actionuser;

            DB::select('CALL sp_log(?,?)', ['1', $log]);

            return response()->json(['success' => 'Data berhasil dimasukkan'], 200);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['error' => 'kesalahan input'], 400);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    
}
