@extends('layouts.main')

@section('title', 'Dashboard ACS | List User')

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
        <div class="center mb20">
            <h1 style="color: #CE2222;">List Log User</h1>
        </div>

        <div class="col-md-12">
            <div class="panel panel-visible" id="spy2">
                <div class="panel-heading">
                    <div class="panel-title hidden-xs">
                        <span class="glyphicon glyphicon-tasks"></span>List Log User
                    </div>
                </div>

                <div class="panel-body pn">
                    <div class="table mx-auto">
                        <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Aktivitas</th>
                                    <th>Cabang</th>
                                    <th>Action</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($audits as $audit)
                                    <tr>
                                        <td>{{ $audit->user }}</td>
                                        <td>{{ $audit->aktivitas }}</td>
                                        <td>{{ $audit->cabang }}</td>
                                        <td>{{ $audit->action }}</td>
                                        <td>{{ $audit->tanggal }}</td>
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