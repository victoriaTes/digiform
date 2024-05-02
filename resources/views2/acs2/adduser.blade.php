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
                <h1 style="color: #CE2222;">Register User</h1>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Register User</span>
                </div>
                <div class="panel-body">
                    <form id="contact" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="panel-body bg-light p30">
                            <div class="row">
                                <div class="col">
                                    <div class="form-grou">
                                        <label for="username" class="col-lg-3 control-label">Username</label>
                                        <div class="col-lg-8 mb20">
                                            <input class="form-control" id="username" name="username" type="text"
                                                placeholder="Enter username" required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-lg-3 control-label">Password</label>
                                        <div class="col-lg-8 mb20">
                                            <input class="form-control" id="password" name="password" type="password"
                                                placeholder="Enter password" required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="role" class="col-lg-3 control-label">Role</label>
                                        <div class="col-lg-8 mb20">
                                            <select class="form-control" id="role" name="role" required autofocus>
                                                <option value="" selected hidden>Enter Role</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->kode_role }}">{{ $role->role }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cabang" class="col-lg-3 control-label">Cabang</label>
                                        <div class="col-lg-8 mb20">
                                            <select class="form-control" id="cabang" name="cabang" required autofocus>
                                                <option value="" selected hidden>Enter Cabang</option>
                                                @foreach ($cabangs as $cabang)
                                                    <option value="{{ $cabang->kode_cabang }}">
                                                        {{ $cabang->nama_cabang }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan" class="col-lg-3 control-label">Jabatan</label>
                                        <div class="col-lg-8 mb20">
                                            <select class="form-control" id="jabatan" name="jabatan" required autofocus>
                                                <option value="" selected hidden>Enter Jabatan</option>
                                                @foreach ($jabatans as $jabatan)
                                                    <option value="{{ $jabatan->kode_jabatan }}">{{ $jabatan->jabatan }}</option>
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
                            <button type="submit" class="btn mx-auto p8 w100" id="login">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
