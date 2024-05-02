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
                                    <th>Register ID</th>
                                    <th>Nomor Identitas</th>
                                    <th>Nama Nasabah</th>
                                    <th>Alamat Nasabah</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Status</th>
                                    <th>Nomor CIF</th>
                                    <th>Nomor Rekening</th>
                                    <th>Print</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laporan as $laporan)
                                    <tr>
                                        <td>{{ $laporan->reg_id }}</td>
                                        <td>{{ $laporan->nik }}</td>
                                        <td>{{ $laporan->nama_lengkap }}</td>
                                        <td>{{ $laporan->alamat_ktp }}</td>
                                        <td>{{ $laporan->tempat_lahir }}</td>
                                        <td>{{ $laporan->tgl_lahir }}</td>
                                        <td>{{ $laporan->noCif }}</td>
                                        <td>{{ $laporan->noRek }}</td>
                                        <td
                                            class="{{ $laporan->flag_status == 'Approve' ? 'text-success' : ($laporan->flag_status == 'Reject' ? 'text-danger' : 'text-black') }}">
                                            {{ $laporan->flag_status }}
                                        </td>
                                        <td>
                                            <a href="{{ route('print.detail', ['reg_id' => $laporan->reg_id]) }}"
                                                style="color: #CE2222; text-decoration: none;">Print</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#datatable2').dataTable({
                "aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': [-1]
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
                "scrollX": true, // Enable horizontal scrolling
                "autoWidth": false // Disable auto width calculation
            });

            $('#datatable3').dataTable({
                "aoColumnDefs": [{
                    'bSortable': false,
                    'aTargets': [-1, -2]
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
@endsection
