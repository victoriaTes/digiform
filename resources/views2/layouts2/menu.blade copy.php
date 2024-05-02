@extends('layouts.main')

@section('title', 'Dashboard CS')

@section('logo')
    <div class="navbar-branding" id="logo">
        <a href="{{ route('menu') }}">
            <img style="width: 150px;" src="{{ URL::to('/assets/images/logo/victoria.png') }}" alt="Logo">
        </a>
    </div>
@endsection

@section('container')
    <div class="admin-form theme-info center">
        <div class="panel-body bg-light p50" style="border-radius: 10px;">
            <div class="center bg-light mb30">
                <h1 style="color: #CE2222;">DASHBOARD</h1>
            </div>
            <div class="row">
                @if (Auth::user()->role == 'R001')
                    <div class="col-md-12">
                        <div class="clearfix p10 ph15 text-center bg-light">
                            <a href="{{ route('listuser') }}" class="button" id="menu">
                                <img src="{{ URL::to('/assets/images/logo/ocr.png') }}" alt="avatar"> <br>
                                List User Account</a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="clearfix p10 ph15 text-center bg-light">
                            <a href="{{ route('listrole') }}" class="button" id="menu">
                                <img src="{{ URL::to('/assets/images/logo/ocr.png') }}" alt="avatar"> <br>
                                Role User Account</a>
                        </div>
                    </div>
                @elseif (Auth::user()->role == 'R002')
                    <div class="col-md-12">
                        <div class="clearfix p10 ph15 text-center bg-light">
                            <a href="{{ route('registrasi.detail') }}" class="button" id="menu">
                                <img src="{{ URL::to('/assets/images/logo/rekening.png') }}" alt="avatar"> <br>
                                Verifikasi Pembukaan Rekening</a>
                        </div>
                    </div>
                @elseif (Auth::user()->role == 'R003')
                    <div class="col-md-12">
                        <div class="clearfix p10 ph15 text-center bg-light">
                            <a href="{{ route('kaops') }}" class="button" id="menu">
                                <img src="{{ URL::to('/assets/images/logo/ibmb.png') }}" alt="avatar"> <br>
                                Approve Permohonan Nasabah</a>
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
@endsection
