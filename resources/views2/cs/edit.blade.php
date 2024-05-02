@extends('layouts.main')

@section('title', 'Dashboard CS | Edit Data Nasabah')

@section('logo')
    <div class="navbar-branding" id="logo">
        <a href="{{ route('menu') }}">
            <img style="width: 150px;" src="{{ URL::to('/assets/images/logo/victoria.png') }}" alt="Logo">
        </a>
    </div>
@endsection

@section('container')
    <div class="center">
        <h1 style="color: #CE2222;">Silahkan Menunggu Nasabah Untuk Merubah Data</h1>

    </div>
    <div class="center mt50">
        <a class="btn mx-auto p8 w100" id="login" href="{{ route('permohonan') }}">
            Kembali</a>
    </div>

@endsection
