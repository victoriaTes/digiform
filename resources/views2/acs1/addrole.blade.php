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
                <h1 style="color: #CE2222;">New Role</h1>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">New Role</span>
                </div>
                <div class="panel-body">
                    <form id="contact" method="POST" action="{{ route('newrole') }}">
                        @csrf
                        <div class="panel-body bg-light p30">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="role" class="col-lg-3 control-label">New Role</label>
                                        <div class="col-lg-8 mb20">
                                            <input class="form-control" id="role" name="role" type="text"
                                                placeholder="Enter role" required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="role" class="col-lg-3 control-label">Kode Role</label>
                                        <div class="col-lg-8 mb20">
                                            <input class="form-control" id="kode_role" name="kode_role" type="text"
                                                placeholder="Enter Kode Role" required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="verifikasi" class="col-lg-3 control-label">Verifikasi Nasabah</label>
                                        <div class="col-lg-8 mb20">
                                            <input id="verifikasi" name="verifikasi" value="1" class="form-check-input"
                                                type="checkbox" onchange="this.value = this.checked ? '1' : '0'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="approve" class="col-lg-3 control-label">Approve Nasabah</label>
                                        <div class="col-lg-8 mb20">
                                            <input id="approve" name="approve" value="1" class="form-check-input"
                                                type="checkbox" onchange="this.value = this.checked ? '1' : '0'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="account" class="col-lg-3 control-label">User Account</label>
                                        <div class="col-lg-8 mb20">
                                            <input id="account" name="account" value="1" class="form-check-input"
                                                type="checkbox" onchange="this.value = this.checked ? '1' : '0'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="role_user" class="col-lg-3 control-label">Role User</label>
                                        <div class="col-lg-8 mb20">
                                            <input id="role_user" name="role_user" value="1" class="form-check-input"
                                                type="checkbox" onchange="this.value = this.checked ? '1' : '0'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan_user" class="col-lg-3 control-label">Jabatan User</label>
                                        <div class="col-lg-8 mb20">
                                            <input id="jabatan_user" name="jabatan_user" value="1"
                                                class="form-check-input" type="checkbox"
                                                onchange="this.value = this.checked ? '1' : '0'">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan_user" class="col-lg-3 control-label">Log User</label>
                                        <div class="col-lg-8 mb20">
                                            <input id="audit_log" name="audit_log" value="1" class="form-check-input"
                                                type="checkbox" onchange="this.value = this.checked ? '1' : '0'">
                                        </div>
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
                            <button type="submit" class="btn mx-auto p8 w100" id="login">Add Role</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
