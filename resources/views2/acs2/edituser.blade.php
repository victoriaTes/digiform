@extends('layouts.main')

@section('title', 'Dashboard CS | Konfirmasil Detail')

@section('logo')
    <div class="navbar-branding" id="logo">
        <a href="{{ route('menu') }}">
            <img style="width: 150px;" src="{{ URL::to('/assets/images/logo/victoria.png') }}" alt="Logo">
        </a>
    </div>
@endsection

@section('container')
    <div class="row">
        <div class="col-md-12">
            <div>
                <a href="{{ route('listuser') }}" style="text-decoration: none">
                    <h3 style="color: #CE2222;"><i class="fa fa-arrow-left mr10"></i><strong>Kembali</strong></h3>
                </a>
            </div>
            <div class="center mb30">
                <h1 style="color: #CE2222;">Edit User</h1>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Edit User</span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"
                        action="{{ route('user.detail.post', ['id' => $user->id]) }}">
                        @csrf
                        <div class="panel-body bg-light p30">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group" style="display: none;">
                                        <label for="id" class="col-lg-3 control-label">id user</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="id" name="id" type="text"
                                                value="{{ $user->id }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="col-lg-3 control-label">Username</label>
                                        <div class="col-lg-8 mb20">
                                            <input class="form-control" id="username" name="username" type="text"
                                                value="{{ $user->username }}" required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-lg-3 control-label">Password</label>
                                        <div class="col-lg-8 mb20">
                                            <input class="form-control" id="password" name="password" type="password"
                                                value="{{ $user->password }}" required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="role" class="col-lg-3 control-label">Role</label>
                                        <div class="col-lg-8 mb20">
                                            <select class="form-control" id="role" name="role" required autofocus>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->kode_role }}"
                                                        {{ $user->role == $role->kode_role ? 'selected' : '' }}>
                                                        {{ $role->role }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cabang" class="col-lg-3 control-label">Cabang</label>
                                        <div class="col-lg-8 mb20">
                                            <select class="form-control" id="cabang" name="cabang" required autofocus>
                                                @foreach ($cabangs as $cabang)
                                                    <option value="{{ $cabang->kode_cabang }}"
                                                        {{ $user->cabang == $cabang->kode_cabang ? 'selected' : '' }}>
                                                        {{ $cabang->nama_cabang }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan" class="col-lg-3 control-label">Jabatan</label>
                                        <div class="col-lg-8 mb20">
                                            <select class="form-control" id="jabatan" name="jabatan" required autofocus>
                                                @foreach ($jabatans as $jabatan)
                                                    <option value="{{ $jabatan->kode_jabatan }}"
                                                        {{ $user->jabatan == $jabatan->kode_jabatan ? 'selected' : '' }}>
                                                        {{ $jabatan->jabatan }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="section" style="display: none;">
                                        <input type="text" name="flag_login" id="flag_login" class="gui-input"
                                            value="0" required autofocus>
                                    </div>
                                    <div class="section" style="display: none;">
                                        <input type="text" name="flag_status" id="flag_status" value="1"
                                            class="gui-input" required autofocus>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end .form-body section -->
                        <div class="clearfix p15 ph15 text-center">
                            <button type="submit" class="btn mx-auto p8 w100" id="login">Edit User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
