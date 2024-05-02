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


class BerandaController1 extends Controller
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

    public function login()
    {
        return view('authentication/login');
    }

    public function menu()
    {
        return view('cs/menu');
    }
    public function nonocr()
    {
        return view('cs/nonocr');
    }

    public function permohonan()
    {
        return view('cs/permohonan');
    }

    public function konfirmasi()
    {
        return view('cs/konfirmasi');
    }

    public function kirim()
    {
        return view('cs/kirim');
    }

    public function edit()
    {
        return view('cs/edit');
    }

    public function selfie()
    {
        return view('cs/selfie');
    }

    public function registrasi()
    {
        return view('cs/registrasi');
    }

    public function kaops()
    {
        return view('kaops/menu');
    }

    public function approval()
    {
        return view('kaops/approval');
    }

}
