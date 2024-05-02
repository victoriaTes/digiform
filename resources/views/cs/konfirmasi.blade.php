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
    <div>
        <h3 style="color: #CE2222;">
            <a href="{{ route('permohonan') }}" style="text-decoration: none; color: #CE2222;">
                <i class="fa fa-arrow-left mr10"></i>
                <strong>Kembali</strong>
            </a>
        </h3>
    </div>
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
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Verifikasi Nasabah</span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"
                        action="{{ route('konfirmasi.detail.post', ['reg_id' => $nasabah->reg_id]) }}">
                        @csrf

                        @include('layouts.form')

                        <div class="form-group mb-3">
                            <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Jenis
                                    Tabungan</strong></label>
                        </div>

                        {{-- <div class="form-group">
                            <label for="tabungan" class="col-lg-3 control-label">Pilih
                                Product</label>
                            <div class="col-lg-8">
                                <select id="tabungan" name="tabungan" class="form-control" required>
                                    <option value="" selected disabled hidden>--- Pilih Product ---
                                    </option>
                                    @foreach ($produks as $produk)
                                        <option value="{{ $produk->kode }}">{{ $produk->produk }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <label for="tabungan" class="col-lg-3 control-label">Pilih Product</label>
                            <div class="col-lg-8">
                                <select id="tabungan" name="tabungan" class="form-control" required>
                                    <option value="" selected disabled hidden>--- Pilih Product ---</option>
                                    @if($nasabah ->jenis_tabungan)
                                        <option value="{{ $nasabah ->jenis_tabungan }}" selected hidden>{{ $nasabah ->produk }}</option>
                                    @endif
                                    @foreach($produks as $produk)
                                        <option value="{{ $produk->kode }}">{{ $produk->produk }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Setoran
                                    Tunai</strong></label>
                        </div>

                        {{-- <div class="form-group">
                            <label for="transfer" class="col-lg-3 control-label">Sumber Dana Setoran</label>
                            <div class="col-lg-8">
                                <select id="transfer" name="transfer" class="form-control" required>
                                    <option value="" selected disabled hidden>--- Pilih Setor Tunai ---
                                    </option>
                                    <option>Tunai</option>
                                    <option>Debet Rekening</option>
                                </select>
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <label for="transfer" class="col-lg-3 control-label">Sumber Dana Setoran</label>
                            <div class="col-lg-8">
                                <select id="transfer" name="transfer" class="form-control" required>
                                    <option value="" selected disabled hidden>--- Pilih Setor Tunai ---
                                    </option>
                                    @if($nasabah->transfer)
                                        <option value="{{ $nasabah ->transfer }}" selected hidden>{{ $nasabah ->transfer }}</option>
                                    @endif
                                    <option>Tunai</option>
                                    <option>Debet Rekening</option>
                                </select>
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <label for="nilaisetor" class="col-lg-3 control-label">Nilai Setoran</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="nilaisetor" name="nilaisetor" type="text" required>
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <label for="nilaisetor" class="col-lg-3 control-label">Nilai Setoran</label>
                            <div class="col-lg-8">
                                @if($nasabah->transfer)
                                    <input class="form-control" id="nilaisetor" name="nilaisetor" type="text" value="{{ $nasabah->nilai_setoran }}" onkeyup="formatRupiah(this)" required>
                                @else
                                    <input class="form-control" id="nilaisetor" name="nilaisetor" type="text" onkeyup="formatRupiah(this)" required>
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="disabledInput" class="col-lg-3 control-label mb20 mt20"><strong>Kode
                                    AO</strong></label>
                        </div>

                        {{-- <div class="form-group">
                            <label for="tabungan" class="col-lg-3 control-label">Kode AO</label>
                            <div class="col-lg-8">
                                <select id="kode_ao" name="kode_ao" class="form-control" required>
                                    <option value="" selected disabled hidden>--- Pilih Kode AO ---
                                    </option>
                                    <option>GX</option>
                                    <option>YT</option>
                                </select>
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <label for="tabungan" class="col-lg-3 control-label">Kode AO</label>
                            <div class="col-lg-8">
                                <select id="kode_ao" name="kode_ao" class="form-control" required>
                                    <option value="" selected disabled hidden>---Kode AO ---</option>
                                    @if($nasabah->kode_ao)
                                        <option value="{{ $nasabah ->kode_ao }}" selected hidden>{{ $nasabah ->kode_ao }}</option>
                                    @endif
                                    @foreach($kodeao as $ao)
                                        <option value="{{ $ao->aocode }}">{{ $ao->aocode }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="clearfix p15 ph15 text-center">
                            <a href="{{ route('permohonan') }}" class="btn mx-auto p8 w100" id="login">Kembali</a>
                            <button type="submit" class="btn mx-auto p8 w100" id="login" name="action" value="edit">
                                Edit
                            </button>
                            <button type="submit" class="btn mx-auto p8 w100" id="login" name="action"
                                value="proses">Proses</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script>
    function formatRupiah(input) {
        // Menghapus semua karakter selain angka
        let value = input.value.replace(/\D/g, '');
    
        // Memformat nilai dengan titik sebagai pemisah ribuan
        value = value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    
        // Menambahkan "Rp. " di depan nilai
        input.value = "Rp. " + value;
    }
    </script>
@endsection
