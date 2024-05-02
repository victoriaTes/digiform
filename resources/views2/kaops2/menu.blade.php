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
    <div class="row">
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
                <div class="panel-body pn">
                    <div class="table-responsive mx-auto">
                        <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    {{-- <th>Register ID</th> --}}
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
                                        {{-- <td>{{ $nasabah->reg_id }}</td> --}}
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

        });
    </script>
@endsection
