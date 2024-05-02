@extends('layouts.main')

@section('title', 'Dashboard CS | Laporan')

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
            <a href="{{ route('menu') }}" style="text-decoration: none; color: #CE2222;">
                <i class="fa fa-arrow-left mr10"></i>
                <strong>Kembali</strong>
            </a>
        </h3>
    </div>
    <div class="row">
        <div class="center mb30">
            <h1 style="color: #CE2222;">List Laporan</h1>
        </div>

        <div class="col-md-12">
            <div class="panel panel-visible" id="spy2">
                <div class="panel-heading">
                    <div class="panel-title hidden-xs">
                        <span class="glyphicon glyphicon-tasks"></span>List Laporan
                    </div>
                </div>

                <div class="panel-body pn">
                    <div class="table table-responsive mx-auto">
                        <table class="table table-striped table-hover" id="datatable3" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th style="display: none">tgl kirim</th>
                                    <th>Register ID</th>
                                    <th>Nomor Identitas</th>
                                    <th>Nama Nasabah</th>
                                    <th>Alamat Nasabah</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Status</th>
                                    <th>Nomor CIF</th>
                                    <th>Nomor Rekening</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laporan as $laporan)
                                    <tr>
                                        <td style="display: none">{{ $laporan->tgl_kirim }}</td>
                                        <td>{{ $laporan->reg_id }}</td>
                                        <td>{{ $laporan->nik }}</td>
                                        <td>{{ $laporan->nama_lengkap }}</td>
                                        <td>{{ $laporan->alamat_ktp }}</td>
                                        <td>{{ $laporan->tempat_lahir }}</td>
                                        <td>{{ $laporan->tgl_lahir }}</td>
                                        {{-- REJECT --}}
                                        @if ($laporan->flag_status == 'Reject' || $laporan->flag_status == 'Belum Otorisasi')
                                            <td>
                                                -
                                            </td>
                                        @else
                                            <td>{{ $laporan->noCif }}</td>
                                        @endif
                                        {{-- APPROVE --}}
                                        @if ($laporan->flag_status == 'Approve')
                                            <td>{{ $laporan->noRek }}</td>
                                        @else
                                            <td>-</td>
                                        @endif
                                        {{-- STATUS --}}
                                        <td
                                            class="{{ $laporan->flag_status == 'Approve' ? 'text-success' : ($laporan->flag_status == 'Reject' ? 'text-danger' : 'text-black') }}">
                                            {{ $laporan->flag_status }}
                                        </td>
                                        {{-- ACTION --}}
                                        @if ($laporan->flag_status == 'Approve')
                                            <td>
                                                <a href="{{ route('print.detail', ['reg_id' => $laporan->reg_id]) }}"
                                                    style="color: #CE2222; text-decoration: none;">Print</a>
                                            </td>
                                        @elseif ($laporan->flag_status == 'Belum Otorisasi' && $laporan->flag_proses == '6')
                                            <td>
                                                <a href="#" data-toggle="modal" data-target="#rejectModal"
                                                    data-reject-reason="{{ $laporan->alasan_nlk }}"
                                                    style="color: #CE2222; text-decoration: none;">Alasan Penolakan</a>
                                            </td>
                                        @else
                                            <td>-</td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        {{-- MODAL --}}
        <div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="rejectModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="rejectModalLabel">Alasan Menolak Nasabah</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="rejectReason" class="col-form-label mb10">Alasan Menolak:</label>
                            <textarea class="form-control" id="rejectReason" name="rejectReason" readonly></textarea>
                        </div>
                    </div>
                    <div class="modal-footer center">
                        <button type="button" class="btn btn-secondary" id="login" data-dismiss="modal" style="width: 100px">CONFIRM</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#datatable3').dataTable({
                "order": [
                    [0, "desc"]
                ],

                "aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': [-1, -
                        2
                    ] // Make the last two columns (print and status) non-sortable
                }],
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": "",
                        "sNext": ""
                    }
                },
                "iDisplayLength": 5,
                "aLengthMenu": [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, "All"]
                ],
                "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
                "oTableTools": {
                    "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                },
                "responsive": false, // Enable responsive extension
                // "scrollX": true, // Enable horizontal scrolling
                "autoWidth": false // Disable auto width calculation
            });

        });
    </script>

    <script>
        $(document).ready(function() {
            $('#rejectModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var rejectReason = button.data('reject-reason');

                var modal = $(this);
                modal.find('.modal-body textarea').val(rejectReason);
            });
        });
    </script>
@endsection
