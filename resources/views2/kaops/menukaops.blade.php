@extends('layouts.main')

@section('title', 'Dashboard Kaops')

@section('logo')
    <div class="navbar-branding" id="logo">
        <a href="{{ route('kaops') }}">
            <img style="width: 150px;" src="{{ URL::to('/assets/images/logo/victoria.png') }}" alt="Logo">
        </a>
    </div>
@endsection

@section('container')
    {{-- <div class="row">
        <div class="center mb30">
            <h1 style="color: #CE2222;">Proses Approval Nasabah</h1>
        </div>
        <div class="col-md-12">
            <div class="panel panel-visible" id="spy2">
                <div class="panel-heading">
                    <div class="panel-title hidden-xs">
                        <span class="glyphicon glyphicon-tasks"></span>Proses Approval Nasabah
                    </div>
                </div>
                @if (session('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="panel-body pn">
                    <div class="table-responsive mx-auto">
                        <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nomor Identitas</th>
                                    <th>Nama Nasabah</th>
                                    <th>Alamat Nasabah</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($nasabahs as $nasabah)
                                    <tr>
                                        <td>{{ $nasabah->nik }}</td>
                                        <td>{{ $nasabah->nama_lengkap }}</td>
                                        <td>{{ $nasabah->alamat_ktp }}</td>
                                        <td>{{ $nasabah->tempat_lahir }}</td>
                                        <td>{{ $nasabah->tgl_lahir }}</td>
                                        <td>{{ $nasabah->flag_status }}</td>
                                        <td>
                                            <a href="{{ route('approval.detail', ['id_nasabah' => $nasabah->id_nasabah]) }}"
                                                style="color: #CE2222; text-decoration: none;">Detail Nasabah</a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}


    <div class="row">
        <div class="col-md-12">
            <div class="center mb30">
                <h1 style="color: #CE2222;">Proses Approval Nasabah</h1>
            </div>
            <ul class="nav nav-pills mb20">
                <li class="active">
                    <a href="#tab18_1" data-toggle="tab">Proses</a>
                </li>
                <li>
                    <a href="#tab18_2" data-toggle="tab">Selesai</a>
                </li>
            </ul>

            <div class="tab-content br-n pn">
                <div id="tab18_1" class="tab-pane active">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-visible" id="spy2">
                                <div class="panel-heading">
                                    <div class="panel-title hidden-xs">
                                        <span class="glyphicon glyphicon-tasks"></span>Proses Approval Nasabah
                                    </div>
                                </div>
                                @if (session('success'))
                                    <div class="alert alert-success" id="success-alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="panel-body pn">
                                    <div class="table mx-auto">
                                        <table class="table table-striped table-hover" id="datatable2" cellspacing="0"
                                            width="100%">
                                            <thead>
                                                <tr>
                                                    {{-- <th style="display: none">tgl kirim</th> --}}
                                                    <th>Nomor Identitas</th>
                                                    <th>Nama Nasabah</th>
                                                    <th>Alamat Nasabah</th>
                                                    <th>Tempat Lahir</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($nasabahs as $nasabah)
                                                    @if ($nasabah->flag_status == 'Belum Otorisasi')
                                                        <tr>
                                                            {{-- <td style="display: none">{{ $nasabah->tgl_kirim }}</td> --}}
                                                            <td>{{ $nasabah->nik }}</td>
                                                            <td>{{ $nasabah->nama_lengkap }}</td>
                                                            <td>{{ $nasabah->alamat_ktp }}</td>
                                                            <td>{{ $nasabah->tempat_lahir }}</td>
                                                            <td>{{ $nasabah->tgl_lahir }}</td>
                                                            <td>{{ $nasabah->flag_status }}</td>
                                                            <td>
                                                                <a href="{{ route('approval.detail', ['reg_id' => $nasabah->reg_id]) }}"
                                                                    style="color: #CE2222; text-decoration: none;">Detail
                                                                    Nasabah</a>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="tab18_2" class="tab-pane">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-visible" id="spy2">
                                <div class="panel-heading">
                                    <div class="panel-title hidden-xs">
                                        <span class="glyphicon glyphicon-tasks"></span>Selesai Proses Nasabah
                                    </div>
                                </div>
                                <div class="panel-body pn">
                                    <div class="table table-responsive mx-auto">
                                        <table class="table table-striped table-hover" style="width: 1800px;"
                                            id="datatable3" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th style="display: none">tgl kirim</th>
                                                    <th>Nomor Identitas</th>
                                                    <th>Nama Nasabah</th>
                                                    <th>Alamat Nasabah</th>
                                                    <th>Tempat Lahir</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                    {{-- <th>Print</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($nasabahs as $nasabah)
                                                    @if ($nasabah->flag_status == 'Approve' || $nasabah->flag_status == 'Reject')
                                                        <tr>
                                                            <td style="display: none">{{ $nasabah->tgl_kirim }}</td>
                                                            <td>{{ $nasabah->nik }}</td>
                                                            <td>{{ $nasabah->nama_lengkap }}</td>
                                                            <td>{{ $nasabah->alamat_ktp }}</td>
                                                            <td>{{ $nasabah->tempat_lahir }}</td>
                                                            <td>{{ $nasabah->tgl_lahir }}</td>
                                                            <td
                                                                class="{{ $nasabah->flag_status == 'Approve' ? 'text-success' : 'text-danger' }}">
                                                                {{ $nasabah->flag_status }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ route('approval.detail', ['reg_id' => $nasabah->reg_id]) }}"
                                                                    style="color: #CE2222; text-decoration: none;">Detail
                                                                    Nasabah</a>
                                                            </td>
                                                            {{-- <td>
                                                                <a href="{{ route('print.detail', ['reg_id' => $nasabah->reg_id]) }}"
                                                                    style="color: #CE2222; text-decoration: none;">Print</a>
                                                            </td> --}}
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                "scrollX": true, // Enable horizontal scrolling
                "autoWidth": false // Disable auto width calculation
            });

            $('#datatable3').dataTable({
                "order": [
                    [0, "desc"]
                ],
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


            window.setTimeout(function() {
                $("#success-alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 1000);

        });
    </script>
@endsection
