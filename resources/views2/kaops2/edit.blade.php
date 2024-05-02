@extends('layouts.main')

@section('title', 'Dashboard Kaops')

@section('user', 'Kaops ')

@section('logo')
    <div class="navbar-branding" id="logo">
        <a href="{{ route('kaops') }}">
            <img style="width: 150px;" src="{{ URL::to('/assets/images/logo/victoria.png') }}" alt="Logo">
        </a>
    </div>
@endsection

@section('container')
    <div class="center">
        <h1 style="color: #CE2222;">Silahkan Menunggu Nasabah Untuk Merubah Data</h1>

    </div>
    <div class="center mt50">
        <a class="btn mx-auto p8 w100" id="login" href="{{ route('kaops') }}">
            Kembali</a>
    </div>

@endsection
