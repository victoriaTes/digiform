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
                <a href="{{ route('listjabatan') }}" style="text-decoration: none">
                    <h3 style="color: #CE2222;"><i class="fa fa-arrow-left mr10"></i><strong>Kembali</strong></h3>
                </a>
            </div>
            <div class="center mb30">
                <h1 style="color: #CE2222;">Edit Jabatan</h1>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Edit Jabatan</span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"
                        action="{{ route('jabatan.detail.post', ['id' => $jabatans->id]) }}">
                        @csrf
                        <div class="panel-body bg-light p30">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group" style="display: none;">
                                        <label for="id" class="col-lg-3 control-label">id jabatan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="id" name="id" type="text"
                                                value="{{ $jabatans->id }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kode_jabatan" class="col-lg-3 control-label">Kode Jabatan</label>
                                        <div class="col-lg-8 mb20">
                                            <input class="form-control" id="kode_jabatan" name="kode_jabatan" type="text"
                                            value={{ $jabatans->kode_jabatan }} required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan" class="col-lg-3 control-label">Nama Jabatan</label>
                                        <div class="col-lg-8 mb20">
                                            <input class="form-control" id="jabatan" name="jabatan" type="text"
                                            value={{ $jabatans->jabatan }} required autofocus>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end .form-body section -->
                        <div class="clearfix p15 ph15 text-center">
                            <button type="submit" class="btn mx-auto p8 w130" id="login">Edit Jabatan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
