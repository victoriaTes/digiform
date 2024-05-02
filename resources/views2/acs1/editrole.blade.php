@extends('layouts.main')

@section('title', 'Dashboard ACS | Add Role')

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
                <a href="{{ route('listrole') }}" style="text-decoration: none">
                    <h3 style="color: #CE2222;"><i class="fa fa-arrow-left mr10"></i><strong>Kembali</strong></h3>
                </a>
            </div>
            <div class="center mb30">
                <h1 style="color: #CE2222;">Edit Role</h1>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Edit Role</span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"
                        action="{{ route('role.detail.post', ['id' => $roles->id]) }}">
                        @csrf
                        <div class="panel-body bg-light p30">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group" style="display: none;">
                                        <label for="id" class="col-lg-3 control-label">id role</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="id" name="id" type="text"
                                                value="{{ $roles->id }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="role" class="col-lg-3 control-label">New Role</label>
                                        <div class="col-lg-8 mb20">
                                            <input class="form-control" id="role" name="role" type="text"
                                                value={{ $roles->role }} required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="role" class="col-lg-3 control-label">Kode Role</label>
                                        <div class="col-lg-8 mb20">
                                            <input class="form-control" id="kode_role" name="kode_role" type="text"
                                                value={{ $roles->kode_role }} required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="verifikasi" class="col-lg-3 control-label">Verifikasi Nasabah</label>
                                        <div class="col-lg-8 mb20">
                                            <input type="hidden" name="verifikasi" value="0">
                                            <input id="verifikasi" name="verifikasi" value="1" class="form-check-input"
                                                type="checkbox" {{ $roles->verif_nasabah == '1' ? 'checked' : '' }}>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="approve" class="col-lg-3 control-label">Approve Nasabah</label>
                                        <div class="col-lg-8 mb20">
                                            <input type="hidden" name="approve" value="0">
                                            <input id="approve" name="approve" value="1" class="form-check-input"
                                                type="checkbox" {{ $roles->approve_nasabah == '1' ? 'checked' : '' }}>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="account" class="col-lg-3 control-label">User Account</label>
                                        <div class="col-lg-8 mb20">
                                            <input type="hidden" name="account" value="0">
                                            <input id="account" name="account" value="1" class="form-check-input"
                                                type="checkbox" {{ $roles->user_account == '1' ? 'checked' : '' }}>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="role_user" class="col-lg-3 control-label">Role User</label>
                                        <div class="col-lg-8 mb20">
                                            <input type="hidden" name="role_user" value="0">
                                            <input id="role_user" name="role_user" value="1" class="form-check-input"
                                                type="checkbox" {{ $roles->role_user == '1' ? 'checked' : '' }}>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan_user" class="col-lg-3 control-label">Jabatan User</label>
                                        <div class="col-lg-8 mb20">
                                            <input type="hidden" name="jabatan_user" value="0">
                                            <input id="jabatan_user" name="jabatan_user" value="1"
                                                class="form-check-input" type="checkbox"
                                                {{ $roles->jabatan_user == '1' ? 'checked' : '' }}>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="audit_log" class="col-lg-3 control-label">Log User</label>
                                        <div class="col-lg-8 mb20">
                                            <input type="hidden" name="audit_log" value="0">
                                            <input id="audit_log" name="audit_log" value="1"
                                                class="form-check-input" type="checkbox"
                                                {{ $roles->audit_log == '1' ? 'checked' : '' }}>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end .form-body section -->
                        <div class="clearfix p15 ph15 text-center">
                            <button type="submit" class="btn mx-auto p8 w100" id="login">Edit Role</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
