@extends('layouts.main')

@section('title', 'Dashboard CS | Registrasi')

@section('user', 'CS')

@section('logo')
    <div class="navbar-branding" id="logo">
        <a href="{{ route('menu') }}">
            <img style="width: 150px;" src="{{ URL::to('/assets/images/logo/victoria.png') }}" alt="Logo">
        </a>
    </div>
@endsection

@section('container')
    <div class="row">
        <div class="progress mt10 mbn">
            <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="20"
                aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
            </div>
        </div>
        <div class="center mb30">
            <h1 style="color: #CE2222;">Input NIK & Registrasi ID</h1>
        </div>
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Input NIK & Registrasi ID</span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"
                        action="{{ route('registrasi.detail.post') }}">
                        @csrf
                        <div class="form-group">
                            <label for="regid" class="col-lg-3 control-label">Registrasi ID</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="regid" name="regid" type="text" required autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="noKtp" class="col-lg-3 control-label">Nomor
                                Identitas</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="noKtp" name="noKtp" type="text" required autofocus>
                            </div>
                        </div>
                        <div class="clearfix p15 ph15 text-center">
                            <button type="submit" class="btn mx-auto p8 w100" id="login">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
