<?php

namespace App\Http\Controllers\ACS;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class ControllerACS
{
    //ROLE 

    public function listrole()
    {

        $role = DB::select('CALL sp_user(?,?)', ['9', '']);

        return view('acs.role', ['roles' => $role]);
    }

    public function addrole()
    {
        return view('acs.addrole');
    }

    public function edit_role($id)
    {
        $roles = DB::select('call sp_user(?, ?)', ['13', $id]);
        $roles = $roles[0];
        return view('acs.editrole', compact('roles'));
    }

    public function newrole(Request $request)
    {

        $role = $request->input('role');
        $kode_role = $request->input('kode_role');
        $verifikasi = $request->input('verifikasi') ? '1' : '0';
        $approve = $request->input('approve') ? '1' : '0';
        $account = $request->input('account') ? '1' : '0';
        $flag_status = $request->input('flag_status');
        $role_user = $request->input('role_user') ? '1' : '0';
        $jabatan_user = $request->input('jabatan_user') ? '1' : '0';
        $audit_log = $request->input('audit_log') ? '1' : '0';

        $isidata = $role . "|" . $kode_role . "|" . $verifikasi . "|" . $approve . "|" . $account . "|" . $flag_status . "|" . $role_user . "|" . $jabatan_user . "|" . $audit_log;

        $userlogin = Auth::user()->username;
        $aktivitas = 'Sukses Tambah Data Role';
        $tanggal = date('Y-m-d H:i:s');
        $cabanglogin = Auth::user()->cabang;
        $action = 'Role User';

        $login = $userlogin . "|" . $aktivitas . "|" . $tanggal . "|" . $cabanglogin . "|" . $action;

        // Call the stored procedure to log the logout activity
        DB::select('CALL sp_log(?,?)', ['1', $login]);

        DB::select('call sp_user(?, ?)', ['10', $isidata]);

        // return redirect()->back()->with('success', 'Action completed successfully');

        // Redirect to '/listjabatan' instead of returning a view
        return redirect()->route('listrole')->with('success', 'Sukses menambah role!');
    }

    public function update_role(Request $request, $id)
    {
        // Mengambil data dari form
        $id = $request->input('id');
        $role = $request->input('role');
        $kode_role = $request->input('kode_role');
        $verifikasi = $request->input('verifikasi');
        $approve = $request->input('approve');
        $account = $request->input('account');
        $role_user = $request->input('role_user') ? '1' : '0';
        $jabatan_user = $request->input('jabatan_user') ? '1' : '0';
        $audit_log = $request->input('audit_log') ? '1' : '0';

        $isidata = $id . "|" . $role . "|" . $kode_role . "|" . $verifikasi . "|" . $approve . "|" . $account . "|" . $role_user . "|" . $jabatan_user . "|" . $audit_log;

        $userlogin = Auth::user()->username;
        $aktivitas = 'Sukses Edit Data Role';
        $tanggal = date('Y-m-d H:i:s');
        $cabanglogin = Auth::user()->cabang;
        $action = 'Role User';

        $login = $userlogin . "|" . $aktivitas . "|" . $tanggal . "|" . $cabanglogin . "|" . $action;

        // Call the stored procedure to log the logout activity
        DB::select('CALL sp_log(?,?)', ['1', $login]);

        DB::select('CALL sp_user(?,?)', ['15', $isidata]);

        // return redirect()->route('role.detail', ['id' => $id]);

        // Redirect to '/listjabatan' instead of returning a view
        return redirect()->route('listrole')->with('success', 'Sukses merubah role!');
    }

    public function deleterole(Request $request)
    {
        $id = $request->id;

        $userlogin = Auth::user()->username;
        $aktivitas = 'Sukses Delete Data Role';
        $tanggal = date('Y-m-d H:i:s');
        $cabanglogin = Auth::user()->cabang;
        $action = 'Role User';

        $login = $userlogin . "|" . $aktivitas . "|" . $tanggal . "|" . $cabanglogin . "|" . $action;

        // Call the stored procedure to log the logout activity
        DB::select('CALL sp_log(?,?)', ['1', $login]);

        DB::select('CALL sp_user(?,?)', ['17', $id]);
    }


    //USER ACCOUNT

    public function listuser()
    {

        $user = DB::select('CALL sp_user(?,?)', ['8', '']);

        return view('acs.user', ['users' => $user]);
    }

    public function showRegistrationForm()
    {
        return view('acs.adduser');
    }

    public function register(Request $request)
    {

        $username = $request->input('username');
        $hashedPassword = Hash::make($request->password);
        $role = $request->input('role');
        $cabang = $request->input('cabang');
        $jabatan = $request->input('jabatan');
        $flag_status = $request->input('flag_status');
        $flag_login = $request->input('flag_login');

        $isidata = $username . "|" . $hashedPassword . "|" . $role . "|" . $cabang . "|" . $jabatan . "|" . $flag_login . "|" . $flag_status;

        $userlogin = Auth::user()->username;
        $aktivitas = 'Sukses Tambah Data User';
        $tanggal = date('Y-m-d H:i:s');
        $cabanglogin = Auth::user()->cabang;
        $action = 'User Account';

        $login = $userlogin . "|" . $aktivitas . "|" . $tanggal . "|" . $cabanglogin . "|" . $action;

        // Call the stored procedure to log the logout activity
        DB::select('CALL sp_log(?,?)', ['1', $login]);

        DB::select('call sp_user(?, ?)', ['1', $isidata]);

        // return redirect()->back()->with('success', 'Action completed successfully');
        // Redirect to '/listjabatan' instead of returning a view
        return redirect()->route('listuser')->with('success', 'Sukses menambah user!');
    }

    public function register_option()
    {
        // Mengambil data role dari database
        $roles = DB::select('call sp_user(?, ?)', ['2', '']);

        // Mengambil data jabatan dari database
        $jabatans = DB::select('call sp_user(?, ?)', ['3', '']);

        // Mengambil data cabang dari database
        $cabangs = DB::select('call sp_user(?, ?)', ['4', '']);

        // Mengirim semua data ke view
        return view('acs.adduser', compact('roles', 'jabatans', 'cabangs'));
    }

    public function edit_user($id)
    {
        $user = DB::select('CALL sp_user(?,?)', ['12', $id]);

        $roles = DB::select('call sp_user(?, ?)', ['2', '']);

        $jabatans = DB::select('call sp_user(?, ?)', ['3', '']);

        $cabangs = DB::select('call sp_user(?, ?)', ['4', '']);

        $user = $user[0];

        return view('acs.edituser', compact('user', 'roles', 'jabatans', 'cabangs'));
    }

    public function update_user(Request $request, $id)
    {
        // Mengambil data dari form
        $id = $request->input('id');
        $username = $request->input('username');
        $hashedPassword = Hash::make($request->password);
        $role = $request->input('role');
        $cabang = $request->input('cabang');
        $jabatan = $request->input('jabatan');
        $flag_status = $request->input('flag_status');
        $flag_login = $request->input('flag_login');

        $isidata = $id . "|" . $username . "|" . $hashedPassword . "|" . $role . "|" . $cabang . "|" . $jabatan . "|" . $flag_login . "|" . $flag_status;

        $userlogin = Auth::user()->username;
        $aktivitas = 'Sukses Edit Data User';
        $tanggal = date('Y-m-d H:i:s');
        $cabanglogin = Auth::user()->cabang;
        $action = 'User Account';

        $login = $userlogin . "|" . $aktivitas . "|" . $tanggal . "|" . $cabanglogin . "|" . $action;

        // Call the stored procedure to log the logout activity
        DB::select('CALL sp_log(?,?)', ['1', $login]);

        DB::select('CALL sp_user(?,?)', ['14', $isidata]);

        // return redirect()->route('user.detail', ['id' => $id]);
        // Redirect to '/listjabatan' instead of returning a view
        return redirect()->route('listuser')->with('success', 'Sukses merubah data user!');
    }

    public function deleteuser(Request $request)
    {
        $id = $request->id;

        $userlogin = Auth::user()->username;
        $aktivitas = 'Sukses Delete Data User';
        $tanggal = date('Y-m-d H:i:s');
        $cabanglogin = Auth::user()->cabang;
        $action = 'User Account';

        $login = $userlogin . "|" . $aktivitas . "|" . $tanggal . "|" . $cabanglogin . "|" . $action;

        // Call the stored procedure to log the logout activity
        DB::select('CALL sp_log(?,?)', ['1', $login]);
        DB::select('CALL sp_user(?,?)', ['16', $id]);
    }

    //JABATAN


    public function listjabatan()
    {

        $jabatan = DB::select('CALL sp_user(?,?)', ['3', '']);

        return view('acs.jabatan', ['jabatans' => $jabatan]);
    }

    public function deletejabatan(Request $request)
    {
        $id = $request->id;

        $userlogin = Auth::user()->username;
        $aktivitas = 'Sukses Delete Data User';
        $tanggal = date('Y-m-d H:i:s');
        $cabanglogin = Auth::user()->cabang;
        $action = 'Jabatan User';

        $login = $userlogin . "|" . $aktivitas . "|" . $tanggal . "|" . $cabanglogin . "|" . $action;

        // Call the stored procedure to log the logout activity
        DB::select('CALL sp_log(?,?)', ['1', $login]);

        DB::select('CALL sp_user(?,?)', ['18', $id]);
    }

    public function addjabatan()
    {
        return view('acs.addjabatan');
    }

    public function newjabatan(Request $request)
    {
        $jabatan = $request->input('jabatan');
        $kode_jabatan = $request->input('kode_jabatan');
        $flag_status = $request->input('flag_status');

        $isidata = $kode_jabatan . "|" . $jabatan .  "|" . $flag_status;

        $userlogin = Auth::user()->username;
        $aktivitas = 'Sukses Tambah Data Jabatan';
        $tanggal = date('Y-m-d H:i:s');
        $cabanglogin = Auth::user()->cabang;
        $action = 'Jabatan User';

        $login = $userlogin . "|" . $aktivitas . "|" . $tanggal . "|" . $cabanglogin . "|" . $action;

        // Call the stored procedure to log the logout activity
        DB::select('CALL sp_log(?,?)', ['1', $login]);

        DB::select('call sp_user(?, ?)', ['19', $isidata]);

        // Redirect to '/listjabatan' instead of returning a view
        return redirect()->route('listjabatan')->with('success', 'Sukses menambahkan jabatan baru!');
    }

    public function edit_jabatan($id)
    {
        $jabatans = DB::select('call sp_user(?, ?)', ['20', $id]);
        $jabatans = $jabatans[0];
        return view('acs.editjabatan', compact('jabatans'));
    }

    public function update_jabatan(Request $request, $id)
    {
        // Mengambil data dari form
        $id = $request->input('id');
        $jabatan = $request->input('jabatan');
        $kode_jabatan = $request->input('kode_jabatan');
        $flag_status = $request->input('flag_status');

        $userlogin = Auth::user()->username;
        $aktivitas = 'Sukses Edit Data User';
        $tanggal = date('Y-m-d H:i:s');
        $cabanglogin = Auth::user()->cabang;
        $action = 'Jabatan User';

        $login = $userlogin . "|" . $aktivitas . "|" . $tanggal . "|" . $cabanglogin . "|" . $action;

        // Call the stored procedure to log the logout activity
        DB::select('CALL sp_log(?,?)', ['1', $login]);

        $isidata = $id . "|" . $kode_jabatan . "|" . $jabatan .  "|" . $flag_status;

        DB::select('CALL sp_user(?,?)', ['21', $isidata]);

        // Redirect to '/listjabatan' instead of returning a view
        return redirect()->route('listjabatan')->with('success', 'Sukses merubah jabatan!');
    }

    public function listaudit()
    {

        $audit = DB::select('CALL sp_user(?,?)', ['23', '']);

        return view('acs.audit', ['audits' => $audit]);
    }
}
