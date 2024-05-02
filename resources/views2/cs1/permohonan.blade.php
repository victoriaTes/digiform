<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard CS</title>
    <link rel="icon" type="image/png" href="{!! asset('images/bvic-logo.ico') !!}">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Dropzone CSS -->
    <link rel="stylesheet" href="{!! asset('admindesigns/vendor/plugins/dropzone/css/dropzone.css') !!}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('admindesigns/assets/skin/default_skin/css/theme.css') !!}">

    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('admindesigns/vendor/plugins/datatables/media/css/dataTables.bootstrap.css') !!}">
    </link>

    <!-- Datatables Editor CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('admindesigns/vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css') !!}">
    </link>
    <link rel="stylesheet" type="text/css" href="{!! asset('admindesigns/vendor/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') !!}">
    </link>

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('admindesigns/assets/admin-tools/admin-forms/css/admin-forms.css') !!}">

    <style>
        #main::before {
            background-color: #F4F7FB;
        }

        .center {
            display: flex;
            justify-content: center;
        }

        #menu {
            min-width: 350px;
            min-height: 100px;
            color: #CE2222;
            background: white;
            border: 1px solid #CE2222;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            /* Mengatur arah tata letak menjadi kolom */
            align-items: center;
            /* Mengatur penempatan elemen ke tengah secara horizontal */
            justify-content: center;
            /* Mengatur penempatan elemen ke tengah secara vertikal */
            font-weight: bold;
        }

        #menu img {
            margin-bottom: -60px;
        }

        #logo {
            width: 150px;
            display: flex;
            align-items: center;
            margin-left: 30px;
        }

        #logo img {
            width: 150px;
        }

        body.sb-l-m .navbar-branding {
            max-width: 200px;
        }
    </style>

</head>

<body class="sb-l-c sb-l-m sb-r-c" data-target="#nav-spy" data-offset="200">
    <div id="main" class="animated fadeIn">

        <!-- Start: Header -->
        <header class="navbar navbar-fixed-top bg-light">
            <div class="navbar-branding" id="logo">
                <a href="{{ route('menu') }}">
                    <img style="width: 150px;" src="{{ URL::to('/assets/images/logo/victoria.png') }}" alt="Logo">
                </a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img
                            src="{{ URL::to('/assets/images/logo/user.jpg') }}" alt="avatar" class="mw30 br64 mr15">
                        <span style="color: #CE2222">CS</span>
                        <span class="caret caret-tp"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                        <li class="br-t of-h">
                            <a href="{{ route('login') }}" class="fw600 p12 animated animated-short fadeInDown">
                                <span class="fa fa-power-off pr5"></span> Logout </a>
                            <!-- <a href="{{ route('login') }}" class="page-scroll btn btn-xl mt10 btn-wire">Logout</a> -->
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary">
            <div class="nano-content">

            </div>
        </aside>

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper" class="mt50">

            <section id="content" class="p40" style="font-size: 15px;">
                <div class="row">
                    <div class="progress mt10 mbn">
                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete</span>
                        </div>
                    </div>
                    <div class="center mb30">
                        <h1 style="color: #CE2222;">Proses Pembukaan Rekening</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="panel panel-visible" id="spy2">
                            <div class="panel-heading">
                                <div class="panel-title hidden-xs">
                                    <span class="glyphicon glyphicon-tasks"></span>Proses Pembukaan Rekening
                                </div>
                            </div>
                            <div class="panel-body pn">
                                <div class="table-responsive mx-auto">
                                    <table class="table table-striped table-hover" id="datatable2" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>Register ID</th>
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
                                                    <td>{{ $nasabah->reg_id }}</td>
                                                    <td>{{ $nasabah->nik }}</td>
                                                    <td>{{ $nasabah->nama_lengkap }}</td>
                                                    <td>{{ $nasabah->alamat_ktp }}</td>
                                                    <td>{{ $nasabah->tempat_lahir }}</td>
                                                    <td>{{ $nasabah->tgl_lahir }}</td>
                                                    <td>{{ $nasabah->status }}</td>
                                                    <td>
                                                        <a href="{{ route('konfirmasi.detail', ['id_nasabah' => $nasabah->id_nasabah]) }}"
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
            </section>

        </section>

    </div>

    <style>
        /*demo styles*/
        body {
            min-height: 500px;
        }

        /* Demo styles only */
        .admin-panels .panel .panel-body {
            min-height: 150px;
        }

        .tray-nav.affix {
            top: 60px;
            width: 320px;
        }

        .custom-nav-animation li {
            display: none;
        }

        .custom-nav-animation li.animated {
            display: block;
        }

        .tray-nav.tray-nav-border li a {
            padding: 9px 15px 9px 30px;
        }
    </style>
    <!-- BEGIN: PAGE SCRIPTS -->
    <!-- jQuery -->
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/jquery/jquery-1.11.1.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/jquery/jquery_ui/jquery-ui.min.js') !!}"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="{!! asset('admindesigns/assets/js/bootstrap/bootstrap.min.js') !!}"></script>

    <!-- Datatables -->
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/plugins/datatables/media/js/jquery.dataTables.js') !!}"></script>

    <!-- Datatables Tabletools addon -->
    {{-- <script type="text/javascript"
        src="vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script> --}}
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') !!}"></script>

    <!-- Datatables Editor addon - READ LICENSING NOT MIT  -->
    {{-- <script type="text/javascript" src="vendor/plugins/datatables/extensions/Editor/js/dataTables.editor.js">
    </script> --}}
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/plugins/datatables/extensions/Editor/js/dataTables.editor.js') !!}"></script>

    <!-- Datatables Bootstrap Modifications  -->

    <script type="text/javascript" src="{!! asset('admindesigns/vendor/plugins/datatables/media/js/dataTables.bootstrap.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/plugins/datatables/extensions/Editor/js/editor.bootstrap.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/plugins/datatables/extensions/Responsive/js/dataTables.responsive.js') !!}"></script>

    <!-- Page Plugins -->
    <script type="text/javascript" src="{!! asset('admindesigns/assets/admin-tools/admin-forms/js/advanced/steps/jquery.steps.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/assets/admin-tools/admin-forms/js/jquery.validate.min.js') !!}"></script>

    <!-- Dropzone JS -->
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/plugins/dropzone/dropzone.min.js') !!}"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="{!! asset('admindesigns/assets/js/utility/utility.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/assets/js/main.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/assets/js/demo.js') !!}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();
            // Init Theme Core    
            Demo.init();

            // Init custom page animation
            setTimeout(function() {
                $('.custom-nav-animation li').each(function(i, e) {
                    var This = $(this);
                    var timer = setTimeout(function() {
                        This.addClass('animated zoomIn');
                    }, 50 * i);
                });
            }, 500);

            // Init tray navigation smooth scroll
            $('.tray-nav a').smoothScroll({
                offset: -145
            });

            // Init Highlight.js Plugin
            $('pre code').each(function(i, block) {
                hljs.highlightBlock(block);
            });

            $('#copy-html').on('click', function() {
                SelectText('target-html');
            });
            $('#copy-js').on('click', function() {
                SelectText('target-js');
            });

            function SelectText(element) {
                var doc = document,
                    text = doc.getElementById(element),
                    range, selection;
                if (doc.body.createTextRange) {
                    range = document.body.createTextRange();
                    range.moveToElementText(text);
                    range.select();
                } else if (window.getSelection) {
                    selection = window.getSelection();
                    range = document.createRange();
                    range.selectNodeContents(text);
                    selection.removeAllRanges();
                    selection.addRange(range);
                }
            }

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
                "responsive": true, // Enable responsive extension
                "scrollX": true, // Enable horizontal scrolling
                "autoWidth": false // Disable auto width calculation
            });

        });
    </script>

</body>

</html>
