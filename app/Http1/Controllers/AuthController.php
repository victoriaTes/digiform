<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function logActivity($activityuser, $actionuser)
    {
        $userlogin = Auth::user()->username;
        $tanggal = date('Y-m-d H:i:s');
        $cabanguser = Auth::user()->cabang;

        $log = $userlogin . "|" . $activityuser . "|" . $tanggal . "|" . $cabanguser . "|" . $actionuser;

        DB::select('CALL sp_log(?,?)', ['1', $log]);
    }

    public function loginuser()
    {
        return view('authentication/login');
    }

    public function menu()
    {
        $role = Auth::user()->role;
        $roles = DB::select('CALL sp_user(?,?)', ['11', $role]); // call SP and get roles

        return view('layouts/menu', compact('roles'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $result = DB::select('CALL sp_user(?,?)', ['7', Auth::user()->id]);

            $this->logActivity('Sukses Login', 'Login');

            if (!empty($result)) {
                $flag_login = $result[0]->flag_login;

                if ($flag_login == '0') {
                    DB::statement('CALL sp_user(?,?)', ['5', Auth::user()->id]);
                    return redirect()->intended('/menu');
                } else {
                    return back()->with('error', 'User sedang login.');
                }
            } else {
                return back();
            }
        } else {

            $username = $request->input('username');

            $aktivitas = 'Gagal Login';
            $tanggal = date('Y-m-d H:i:s');
            $action = 'Login';

            $user = DB::select('CALL sp_user(?,?)', ['22', $username]);

            if (!empty($user)) {
                $cabang = $user[0]->cabang;
                $isidata = $username . "|" . $aktivitas . "|" . $tanggal . "|" . $cabang . "|" . $action;
                DB::select('CALL sp_log(?,?)', ['1', $isidata]);

                return back()->withErrors([
                    'password' => 'Password salah.',
                ]);
            } else {
                return back()->withErrors([
                    'username' => 'Username salah.',
                ]);
            }
        }
    }

    public function logout()
    {
        // Get the id of the currently authenticated user
        $userId = Auth::user()->id;

        $this->logActivity('Sukses Logout', 'Logout');

        // Call the stored procedure to update flag_login
        DB::statement('CALL sp_user(?,?)', ['6', $userId]);

        // Logout the user
        Auth::logout();

        return redirect('/login');
    }

    public function bantuan()
    {
        return view('authentication/bantuan');
    }

    public function disabled(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $result = DB::select('CALL sp_user(?,?)', ['7', Auth::user()->id]);

            $this->logActivity('Sukses buka user', 'User Gantung');

            if (!empty($result)) {
                $flag_login = $result[0]->flag_login;

                if ($flag_login == '1') {
                    DB::statement('CALL sp_user(?,?)', ['6', Auth::user()->id]);
                    return redirect()->route('login')->with('success', 'User sudah bisa login.');
                } else {
                    return back()->with('error', 'User sedang tidak login.');
                }
            } else {
                return back();
            }
        } else {

            $username = $request->input('username');

            $aktivitas = 'Gagal mengubah flag';
            $tanggal = date('Y-m-d H:i:s');
            $action = 'User Gantung';

            $user = DB::select('CALL sp_user(?,?)', ['22', $username]);

            if (!empty($user)) {
                $cabang = $user[0]->cabang;
                $isidata = $username . "|" . $aktivitas . "|" . $tanggal . "|" . $cabang . "|" . $action;
                DB::select('CALL sp_log(?,?)', ['1', $isidata]);

                return back()->withErrors([
                    'password' => 'Password salah.',
                ]);
            } else {
                return back()->withErrors([
                    'username' => 'Username salah.',
                ]);
            }
        }
    }

    public function resetpassword()
    {
        return view('authentication/reset');
    }

    public function reset(Request $request)
    {
        $userId = Auth::user()->id;
        $password = Hash::make($request->cpassword);

        $isidata = $userId . "|" . $password;

        DB::select('CALL sp_user(?,?)', ['24', $isidata]);

        return redirect()->back()->with('success', 'Berhasil ubah password.');
    }
}
