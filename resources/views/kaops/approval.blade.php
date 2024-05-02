@extends('layouts.main')

@section('title', 'Dashboard Kaops | Approval Data')

@section('logo')
    <div class="navbar-branding" id="logo">
        <a href="{{ route('kaops') }}">
            <img style="width: 150px;" src="{{ URL::to('/assets/images/logo/victoria.png') }}" alt="Logo">
        </a>
    </div>
@endsection

@section('container')
    <div class="row">
        <div class="center mb30">
            <h1 style="color: #CE2222;">Approve Data Nasabah</h1>
        </div>
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">Approve Data Nasabah</span>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST"
                        action="{{ route('approval.detail.post', ['reg_id' => $nasabah->reg_id]) }}">
                        {{-- <form class="form-horizontal" role="form" method="POST"
                        action="{{ route('approval.detail.post', ['reg_id' => $nasabah->reg_id]) }}"> --}}
                        @csrf

                        @include('layouts.form')

                        {{-- 
                        <div class="form-group">
                            <label for="disabledInput" class="col-lg-3 control-label">Foto KTP</label>
                            <div class="col-lg-8">
                                <img src="{{ asset('storage/gambarktp/' . $nasabah->ktp) }}" alt="avatar" id="disabledInput">
                            </div>
                        </div> --}}

                        @if ($nasabah->flag_proses == 9)
                            <div class="form-group">
                                <label for="disabledInput" class="col-lg-3 control-label">Foto Selfie</label>
                                <div class="col-lg-8">
                                    <img src="{{ asset('storage/selfie/' . $nasabah->selfie) }}" alt="avatar"
                                        id="disabledInput">
                                </div>
                            </div>
                        @elseif ($nasabah->flag_proses == 8)
                        @endif

                        <div class="form-group mb-3">
                            <label for="disabledInput" class="col-lg-3 control-label"><strong>Jenis
                                    Tabungan</strong></label>
                        </div>

                        <div class="form-group" style="display: none">
                            <label for="tabungan" class="col-lg-3 control-label">Pilih
                                Product</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="tabungan" name="tabungan" type="text"
                                    value="{{ $nasabah->jenis_tabungan }}" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="produk" class="col-lg-3 control-label">Pilih
                                Product</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="produk" name="produk" type="text"
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

                        <div class="form-group text-danger">
                            <label for="catatan" class="col-lg-3 control-label">*Catatan (Optional)</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="catatan" name="catatan" type="text" style="color: red;"
                                    value="{{ $nasabah->catatan }}" readonly>
                            </div>
                        </div>

                        <div class="form-group mt30">
                            <label for="aml" class="col-lg-3 control-label"></label>
                            <div class="col-lg-8">
                                <input id="aml" name="aml" value="1" class="form-check-input"
                                    type="checkbox" onchange="updateCheckbox('aml')"
                                    {{ $nasabah->aml == '1' ? 'checked' : '' }} disabled>
                                <b>VERIFIKSI DATA AML</b>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dukcapil" class="col-lg-3 control-label"></label>
                            <div class="col-lg-8">
                                <input id="dukcapil" name="dukcapil" value="1" class="form-check-input"
                                    type="checkbox" onchange="updateCheckbox('dukcapil')"
                                    {{ $nasabah->dukcapil == '1' ? 'checked' : '' }} disabled>
                                <b>VERIFIKSI DATA DUKCAPIL</b>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="edd" class="col-lg-3 control-label"></label>
                            <div class="col-lg-8">
                                <input id="edd" name="edd" value="1" class="form-check-input"
                                    type="checkbox" onchange="updateCheckbox('edd')"
                                    {{ $nasabah->edd == '1' ? 'checked' : '' }} disabled>
                                <b>Enhanced Due Diligence</b>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bo" class="col-lg-3 control-label"></label>
                            <div class="col-lg-8">
                                <input id="bo" name="dukcapil" value="1" class="form-check-input"
                                    type="checkbox" onchange="updateCheckbox('bo')"
                                    {{ $nasabah->bo == '1' ? 'checked' : '' }} disabled>
                                <b>Beneficial Owner</b>
                            </div>
                        </div>

                        <div class="form-group" style="display: none;">
                            <label for="approve" class="col-lg-3 control-label">cabang</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="cabang" name="cabang" type="hidden"
                                    value="{{ $nasabah->cabang }}">
                            </div>
                        </div>

                        <div class="form-group" style="display: none;">
                            <label for="approve" class="col-lg-3 control-label">riskprofile</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="riskProfile" name="riskProfile" type="hidden"
                                    value="{{ $nasabah->riskProfile }}">
                            </div>
                        </div>

                        <div class="form-group" style="display: none;">
                            <label for="approve" class="col-lg-3 control-label">riskfactor</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="riskFactor" name="riskFactor" type="hidden"
                                    value="{{ $nasabah->riskFactor }}">
                            </div>
                        </div>

                        <div class="form-group" style="display: none;">
                            <label for="approve" class="col-lg-3 control-label">approve</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="approve" name="approve" type="hidden"
                                    value="1">
                            </div>
                        </div>

                        <div class="form-group" style="display: none;">
                            <label for="edit" class="col-lg-3 control-label">edit</label>
                            <div class="col-lg-8">
                                <input class="form-control" id="edit" name="edit" type="hidden"
                                    value="99">
                            </div>
                        </div>

                        @if ($nasabah->flag_status == '0')
                            <div class="clearfix p15 ph15 text-center mt50">
                                <button type="submit" class="btn btn-danger btn-lg mx-auto p8 w100 mr20" name="action"
                                    value="edit" onclick="confirmSubmit(event)"> Tolak
                                </button>
                                <button type="button" class="btn btn-info btn-lg mx-auto p8 w100 mr20"
                                    data-toggle="modal" data-target="#rejectModal">Edit</button>
                                <button type="submit" class="btn btn-success btn-lg mx-auto p8 w100 mr20" name="action"
                                    value="approve" onclick="confirmSubmit(event)"
                                    style="background-color: rgb(12, 193, 12); border-color: rgb(12, 193, 12);"> Approve
                                </button>
                            </div>
                        @else
                            <div class="clearfix p15 ph15 text-center">
                                <button type="submit" class="btn btn-danger btn-lg mx-auto p8 w1500 mr20" id="otorisasi"
                                    disabled> Sudah di Otorisasi
                                </button>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!-- Form Reject -->
    <form class="form-horizontal" role="form" method="POST"
        action="{{ route('reject.detail.post', $nasabah->id_nasabah) }}">
        @csrf
        <!-- Modal -->
        <div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="rejectModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="rejectModalLabel">Alasan Edit Nasabah</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="rejectReason" class="col-form-label mb10">Alasan Tertolak:</label>
                            <input class="form-control" id="rejectReason" name="rejectReason" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger" name="action" id="submitReject"
                            value="reject">Tolak</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('js')
    <script>
        function confirmSubmit(event) {
            if (!confirm("Apakah anda yakin?")) {
                event.preventDefault();
            }
        }
    </script>
@endsection

