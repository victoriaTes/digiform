<?php

namespace App\Http\Controllers\ACS;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;


class ControllerACS
{

    public function logActivity($activityuser, $actionuser)
    {
        $userlogin = Auth::user()->username;
        $tanggal = date('Y-m-d H:i:s');
        $cabanguser = Auth::user()->cabang;

        $log = $userlogin . "|" . $activityuser . "|" . $tanggal . "|" . $cabanguser . "|" . $actionuser;

        DB::select('CALL sp_log(?,?)', ['1', $log]);
    }

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

        $this->logActivity('Sukses Tambah Data Role', 'Role User');

        DB::select('call sp_user(?, ?)', ['10', $isidata]);

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

        $this->logActivity('Sukses Edit Data Role', 'Role User');

        DB::select('CALL sp_user(?,?)', ['15', $isidata]);

        return redirect()->route('listrole')->with('success', 'Sukses merubah role!');
    }

    public function deleterole(Request $request)
    {
        $id = $request->id;

        $this->logActivity('Sukses Delete Data Role', 'Role User');

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

        $this->logActivity('Sukses Tambah Data User', 'User Account');

        DB::select('call sp_user(?, ?)', ['1', $isidata]);

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


        $this->logActivity('Sukses Edit Data User', 'User Account');

        DB::select('CALL sp_user(?,?)', ['14', $isidata]);

        return redirect()->route('listuser')->with('success', 'Sukses merubah data user!');
    }

    public function deleteuser(Request $request)
    {
        $id = $request->id;

        $this->logActivity('Sukses Delete Data User', 'User Account');
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

        $this->logActivity('Sukses Delete Data Jabatan', 'Jabatan User');

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


        $this->logActivity('Sukses Tambah Data Jabatan', 'Jabatan User');

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

        $isidata = $id . "|" . $kode_jabatan . "|" . $jabatan .  "|" . $flag_status;

        $this->logActivity('Sukses Edit Data Jabatan', 'Jabatan User');

        DB::select('CALL sp_user(?,?)', ['21', $isidata]);

        // Redirect to '/listjabatan' instead of returning a view
        return redirect()->route('listjabatan')->with('success', 'Sukses merubah jabatan!');
    }

    public function listaudit()
    {

        $audit = DB::select('CALL sp_user(?,?)', ['23', '']);

        return view('acs.audit', ['audits' => $audit]);
    }

    

    // public function testlog(Request $request)
    // {
    //     $client = new Client();
    //     $apiUrl = 'http://172.21.20.88/api/log_activity';

    //     $response = $client->request('POST', $apiUrl, [
    //         'json' => [
    //             'userlogin' => $request->input('userlogin'),
    //             'activityuser' =>  $request->input('activityuser'),
    //             'actionuser' =>  $request->input('actionuser'),
    //             'cabanguser' => $request->input('cabanguser')
    //         ]
    //     ]);

    //     $statusCode = $response->getStatusCode();
    //     $body = $response->getBody()->getContents();

    //     if ($statusCode == 200) {
    //         $data = json_decode($body, true);
    //         return $data;
    //     } else {
    //         // handle error
    //         return [];
    //     }
    // }

    // public function testlog(Request $request, $id)
    // {
    //     // Mengambil data dari form
    //     $userlogin = $request->input('user');
    //     $activityuser = $request->input('jabatan');
    //     $actionuser = $request->input('kode_jabatan');
    //     $cabanguser = $request->input('flag_status');

    //     $isidata = $userlogin . "|" . $activityuser . "|" . $actionuser .  "|" . $cabanguser;

    //     $this->logActivity('Sukses Edit Data Jabatan', 'Jabatan User');

    //     DB::select('CALL sp_user(?,?)', ['21', $isidata]);

    //     // Redirect to '/listjabatan' instead of returning a view
    //     return redirect()->route('listjabatan')->with('success', 'Sukses merubah jabatan!');
    // }

    // public function showAuditLogs()
    // {
    //     $audits = $this->listaudit(); // asumsikan ini adalah fungsi yang mengambil data dari API

    //     if (!is_array($audits)) {
    //         $audits = [];
    //     }

    //     return view('acs.audit', ['audits' => $audits]);
    // }
}
