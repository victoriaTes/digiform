@extends('layouts.main')

@section('title', 'Dashboard CS | Kirim Data')

@section('logo')
    <div class="navbar-branding" id="logo">
        <a href="{{ route('menu') }}">
            <img style="width: 150px;" src="{{ URL::to('/assets/images/logo/victoria.png') }}" alt="Logo">
        </a>
    </div>
@endsection

@section('container')
<div>
    <h3 style="color: #CE2222;">
        <a href="{{ route('konfirmasi.detail', ['reg_id' => $nasabah->reg_id]) }}" style="text-decoration: none; color: #CE2222;">
            <i class="fa fa-arrow-left mr10"></i>
            <strong>Kembali</strong>
        </a>
    </h3>
</div>
    <div class="row">
        <div class="progress mt10 mbn">
            <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="100"
                aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                <span class="sr-only">100% Complete</span>
            </div>
        </div>
        <div class="center mb30">
            <h1 style="color: #CE2222;">Kirim Data Approval</h1>
        </div>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Kirim Approval</span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"
                        action="{{ route('kirim.detail.post', ['reg_id' => $nasabah->reg_id]) }}">
                        @csrf

                        @include('layouts.form')

                        {{-- <div class="form-group">
                            <label for="disabledInput" class="col-lg-3 control-label">Foto KTP</label>
                            <div class="col-lg-8">
                                <img src="{{ asset('storage/foto/' . $nasabah->ktp) }}" alt="avatar" id="disabledInput">
                            </div>
                        </div> --}}

                        @if ($nasabah->flag_proses == 7)
                            <div class="form-group">
                                <label for="disabledInput" class="col-lg-3 control-label">Foto Selfie</label>
                                <div class="col-lg-8">
                                    <img src="{{ asset('storage/selfie/' . $nasabah->selfie) }}" alt="avatar"
                                        id="disabledInput">
                                </div>
                            </div>
                        @endif

                        {{-- <div class="form-group">
                            <label for="disabledInput" class="col-lg-3 control-label">Foto Selfie</label>
                            <div class="col-lg-8">
                                <img src="{{ asset('storage/selfie/' . $nasabah->selfie) }}" alt="avatar"
                                    id="disabledInput">
                            </div>
                        </div> --}}

                        <div class="form-group mb-3">
                            <label for="disabledInput" class="col-lg-3 control-label"><strong>Jenis
                                    Tabungan</strong></label>
                        </div>

                        <div class="form-group">
                            <label for="tabungan" class="col-lg-3 control-label">Product</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="tabungan" name="tabungan" type="text"
                                    value="{{ $nasabah->produk }}" readonly>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="disabledInput" class="col-lg-3 control-label"><strong>Setoran
                                    Tunai</strong></label>
                        </div>

                        <div class="form-group">
                            <label for="transfer" class="col-lg-3 control-label">Sumber Dana Setoran</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="transfer" name="transfer" type="text"
                                    value="{{ $nasabah->transfer }}" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nilaisetor" class="col-lg-3 control-label">Nilai Setoran</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="nilaisetor" name="nilaisetor" type="text"
                                    value="{{ $nasabah->nilai_setoran }}" readonly>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="disabledInput" class="col-lg-3 control-label"><strong>Kode AO</strong></label>
                        </div>

                        <div class="form-group">
                            <label for="kode_ao" class="col-lg-3 control-label">Kode AO</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="kode_ao" name="kode_ao" type="text"
                                    value="{{ $nasabah->kode_ao }}" readonly>
                            </div>
                        </div>

                        <div class="form-group mt30 text-danger">
                            <label for="disabledInput" class="col-lg-3 control-label"><strong>Catatan
                                    Nasabah</strong></label>
                        </div>

                        <div class="form-group">
                            <label for="catatan" class="col-lg-3 control-label">Catatan (Optional)</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="catatan" name="catatan" type="text" placeholder="Catatan Nasabah">
                            </div>
                        </div>

                        <div class="form-group mt30">
                            <label for="aml" class="col-lg-3 control-label"></label>
                            <div class="col-lg-8">
                                <input id="aml" name="aml" value="1" class="form-check-input" type="checkbox"
                                    onchange="this.value = this.checked ? '1' : '0'" required>
                                <b>VERIFIKASI DATA AML</b>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dukcapil" class="col-lg-3 control-label"></label>
                            <div class="col-lg-8">
                                <input id="dukcapil" name="dukcapil" value="1" class="form-check-input"
                                    type="checkbox" onchange="this.value = this.checked ? '1' : '0'" required>
                                <b>VERIFIKASI DATA DUKCAPIL</b>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="edd" class="col-lg-3 control-label"></label>
                            <div class="col-lg-8">
                                <input id="edd" name="edd" value="1" class="form-check-input"
                                    type="checkbox" onchange="this.value = this.checked ? '1' : '0'" required>
                                <b>Enhanced Due Diligence</b>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bo" class="col-lg-3 control-label"></label>
                            <div class="col-lg-8">
                                <input id="bo" name="bo" value="1" class="form-check-input"
                                    type="checkbox" onchange="this.value = this.checked ? '1' : '0'" required>
                                <b>Beneficial Owner</b>
                            </div>
                        </div>

                        @if ($nasabah->flag_proses == 5)
                            <div class="form-group" style="display: none;">
                                <label for="flag_proses" class="col-lg-3 control-label">flag</label>
                                <div class="col-lg-8">
                                    <input class="form-control" id="flag_proses" name="flag_proses" type="text"
                                        value="8" readonly>
                                </div>
                            </div>
                        @elseif ($nasabah->flag_proses == 7)
                            <div class="form-group" style="display: none;">
                                <label for="flag_proses" class="col-lg-3 control-label">flag</label>
                                <div class="col-lg-8">
                                    <input class="form-control" id="flag_proses" name="flag_proses" type="text"
                                        value="9" readonly>
                                </div>
                            </div>
                        @endif
                        <div class="clearfix p15 ph15 text-center">
                            <a href="{{ route('konfirmasi.detail', ['reg_id' => $nasabah->reg_id]) }}" class="btn mx-auto p8 w100" id="login">Kembali</a>
                            <button type="submit" class="btn mx-auto p8 w100" id="login"
                                onclick="showAlert()">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
