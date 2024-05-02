@extends('layouts.main')

@section('title', 'Dashboard ACS | List Role')

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
            <h1 style="color: #CE2222;">List Role</h1>
        </div>
        <div class="clearfix p15 ph15 mb20">
            <a href="{{ route('addrole') }}" class="btn mx-auto p8 w100" id="login"><i class="fa fa-plus mr10"></i>Add
                Role</a>
        </div>
        <div class="col-md-12">
            <div class="panel panel-visible" id="spy2">
                <div class="panel-heading">
                    <div class="panel-title hidden-xs">
                        <span class="glyphicon glyphicon-tasks"></span>List Role
                    </div>
                </div>
                @if (session('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="panel-body pn">
                    <div class="table mx-auto">
                        <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Nama Role</th>
                                    <th>Kode Role</th>
                                    <th>Verfikasi Nasabah</th>
                                    <th>Approve Nasabah</th>
                                    <th>User Account</th>
                                    <th>User Role</th>
                                    <th>User Jabatan</th>
                                    <th>Log User</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->role }}</td>
                                        <td>{{ $role->kode_role }}</td>
                                        <td>
                                            @if ($role->verif_nasabah == 1)
                                                <input type="checkbox" class="non-editable" checked>
                                            @else
                                                <input type="checkbox" class="non-editable">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($role->approve_nasabah == 1)
                                                <input type="checkbox" class="non-editable" checked>
                                            @else
                                                <input type="checkbox" class="non-editable">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($role->user_account == 1)
                                                <input type="checkbox" class="non-editable" checked>
                                            @else
                                                <input type="checkbox" class="non-editable">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($role->role_user == 1)
                                                <input type="checkbox" class="non-editable" checked>
                                            @else
                                                <input type="checkbox" class="non-editable">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($role->jabatan_user == 1)
                                                <input type="checkbox" class="non-editable" checked>
                                            @else
                                                <input type="checkbox" class="non-editable">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($role->audit_log == 1)
                                                <input type="checkbox" class="non-editable" checked>
                                            @else
                                                <input type="checkbox" class="non-editable">
                                            @endif
                                        </td>
                                        <td><a href="{{ route('role.detail', ['id' => $role->id]) }}"
                                                style="color: #CE2222; text-decoration: none; margin-right:70px;">Edit</a>
                                            | <a class="delete-user" data-id="{{ $role->id }}"
                                                style="color: #CE2222; text-decoration: none; cursor: pointer;">Delete</a>
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

            $('.non-editable').on('click', function(e) {
                e.preventDefault();
            });

            $('body').on('click', '.delete-user', function(e) {
                e.preventDefault();
                var userId = $(this).data('id');

                var userConfirmation = confirm('Apakah anda yakin untuk mengahapus data ini?');

                if (userConfirmation) {
                    $.ajax({
                        url: '{{ route('deleterole', ['id' => $role->id]) }}',
                        type: 'POST',
                        data: {
                            id: userId,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function() {
                            location.reload();
                        }
                    });
                }
            });

            window.setTimeout(function() {
                $("#success-alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 1000);

        });
    </script>
@endsection
