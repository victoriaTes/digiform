<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class c_email extends Controller
{
    public function emaildigi(Request $request){
        Mail::to('yogichandrariono@gmail.com')
            ->send(new Digiformemail());

        return 'oke';
    }
}
