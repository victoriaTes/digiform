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
        <div class="progress mt10 mbn">
            <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="60"
                aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete</span>
            </div>
        </div>
        <div class="center mb30">
            <h1 style="color: #CE2222;">Verifikasi Nasabah</h1>
        </div>
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Verifikasi Nasabah</span>
                </div>
                <div class="panel-body">
                    {{-- <form class="form-horizontal" role="form"> --}}
                    <form class="form-horizontal" role="form" method="POST"
                        action="{{ route('konfirmasi.detail.post', ['reg_id' => $nasabah->reg_id]) }}">
                        @csrf

                        @include('layouts.form')

                        <div class="form-group mb-3">
                            <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Jenis
                                    Tabungan</strong></label>
                        </div>

                        @if ($nasabah->flag_proses == '4')
                            <div class="form-group">
                                <label for="tabungan" class="col-lg-3 control-label">Pilih
                                    Product</label>
                                <div class="col-lg-8">
                                    <select id="tabungan" name="tabungan" class="form-control" required>
                                        <option value="" selected disabled hidden>--- Pilih Product ---
                                        </option>
                                        <option>VIP SAFE</option>
                                        <option>Victoria Junior</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Setoran
                                        Tunai</strong></label>
                            </div>

                            <div class="form-group">
                                <label for="transfer" class="col-lg-3 control-label">Sumber Dana Setoran</label>
                                <div class="col-lg-8">
                                    <select id="transfer" name="transfer" class="form-control" required>
                                        <option value="" selected disabled hidden>--- Pilih Setor Tunai ---
                                        </option>
                                        <option>Tunai</option>
                                        <option>Debet Rekening</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nilaisetor" class="col-lg-3 control-label">Nilai Setoran</label>
                                <div class="col-lg-8">
                                    <input class="form-control" id="nilaisetor" name="nilaisetor" type="text" required>
                                </div>
                            </div>
                        @else
                            <div class="form-group">
                                <label for="tabungan" class="col-lg-3 control-label">Pilih
                                    Product</label>
                                <div class="col-lg-8">
                                    <select id="tabungan" name="tabungan" class="form-control" required>
                                        <option value="{{ $nasabah->jenis_tabungan }}" selected hidden>
                                            {{ $nasabah->jenis_tabungan }}
                                        </option>
                                        <option value="VIP SAFE">VIP SAFE</option>
                                        <option value="Victoria Junior">Victoria Junior</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Setoran
                                        Tunai</strong></label>
                            </div>

                            <div class="form-group">
                                <label for="transfer" class="col-lg-3 control-label">Sumber Dana Setoran</label>
                                <div class="col-lg-8">
                                    <select id="transfer" name="transfer" class="form-control" required >
                                        <option value="{{ $nasabah->transfer }}" selected hidden>
                                            {{ $nasabah->transfer }}
                                        </option>
                                        <option value="Tunai">Tunai</option>
                                        <option value="Debet Rekening">Debet Rekening</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="nilaisetor" class="col-lg-3 control-label">Nilai Setoran</label>
                                <div class="col-lg-8">
                                    <input class="form-control" id="nilaisetor" name="nilaisetor" type="text"
                                        value=" {{ $nasabah->nilai_setoran }}" required >
                                </div>
                            </div>
                        @endif

                        <div class="clearfix p15 ph15 text-center">
                            <button type="submit" class="btn mx-auto p8 w100" id="login" name="action"
                                value="proses">Proses</button>
                            <button type="submit" class="btn mx-auto p8 w100" id="login" name="action" value="edit">
                                Edit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
