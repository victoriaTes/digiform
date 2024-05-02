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

        #login {
            background: #CE2222;
            border: 1px solid #CE2222;
            border-radius: 10px;
            color: white;
        }

        #login a {
            color: white;
            text-decoration: none;
        }

        @media (min-width: 768px) {
            .form-horizontal .control-label {
                text-align: left;
            }
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

            <!-- Begin: Content -->
            <section id="content" class="p40" style="font-size: 15px;">
                {{-- <div class="clearfix p15 ph15 text-center">
                    <div class="center mb30">
                        <h1 style="color: #CE2222;">Silahkan Menunggu Nasabah Untuk Edit Data</h1>
                    </div>
                    <button type="submit" class="button mx-auto p8 w100" id="login"><a href="{{ route('konfirmasi') }}" >
                        Selesai</a></button>
                </div> --}}
                <div class="row">
                    <div class="progress mt10 mbn">
                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete</span>
                        </div>
                    </div>
                    <div class="center mb30">
                        <h1 style="color: #CE2222;">Edit Data Nasabah</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <span class="panel-title">Edit Data Nasabah</span>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">

                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label mb20"><strong>Informasi
                                                Data Nasabah</strong></label>
                                    </div>

                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Nomor
                                            Identitas</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->nik }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Nama Lengkap (Sesuai
                                            KTP)</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->nama_lengkap }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Gelar</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->gelar }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Alamat Sesuai
                                            Bukti Identitas</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->alamat_ktp }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">RT/RW</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->rtrw_ktp }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Kelurahan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->kelurahan_ktp }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Kecamatan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->kecamatan_ktp }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Kabupaten</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->kabupaten_ktp }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Propinsi</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->propinsi_ktp }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Kode Pos</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->kode_pos_ktp }}">
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="disabledInput"
                                            class="col-lg-3 control-label mb20 mt20"><strong>Alamat Saat
                                                Ini</strong></label>
                                    </div>

                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Nomor Rumah /
                                            Apartemen</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->nomor_rumah }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">RT/RW</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->rtrw }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Kelurahan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->kelurahan }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Kecamatan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->kecamatan }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Kabupaten</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->kabupaten }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Propinsi</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->propinsi }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Kode Pos</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->kode_pos }}">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Tempat Lahir</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->tempat_lahir }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Tanggal
                                            Lahir</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->tgl_lahir }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Agama</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->agama }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Jenis
                                            Kelamin</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->jenis_kelamin }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Negara</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->negara }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Status
                                            Perkawinan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->status_perkawinan }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Pendidikan
                                            Terakhir</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->pendidikan }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Status Rumah</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->status_rumah }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Nama Ibu
                                            Kandung</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->nama_ibu }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Email</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->email }}">
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="disabledInput"
                                            class="col-lg-3 control-label mb20 mt20"><strong>Informasi Data Pekerjaan
                                                Nasabah</strong></label>
                                    </div>

                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Nama
                                            Perusahaan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->nama_perusahaan }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Alamat
                                            Perusahaan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->alamat_perusahaan }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">RT</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->rt_perusahaan }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">RW</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->rw_perusahaan }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Kelurahan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->kelurahan_perusahaan }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Kecamatan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->kecamatan_perusahaan }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Kabupaten</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->kabupaten_perusahaan }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Propinsi</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->propinsi_perusahaan }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Kode Pos</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->kode_pos_perusahaan }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">No. Telepon</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->telpon_perusahaan }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Pekerjaan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->pekerjaan }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Bidang Usaha</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->bidang_usaha }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Jabatan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->jabatan }}">
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="disabledInput"
                                            class="col-lg-3 control-label mb20 mt20"><strong>Informasi Data Keuangan
                                                Nasabah</strong></label>
                                    </div>

                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Tujuan Pembukaan
                                            Rekening</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->tujuan_rek }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Sumber Dana</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->sumber_dana }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Tujuan Penggunaan
                                            Dana</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="disabledInput" type="text"
                                                value="{{ $nasabah->tujuan_dana }}">
                                        </div>
                                    </div>
                                    <div class="clearfix p15 ph15 text-center">
                                        <a class="btn mx-auto p8 w100" id="login" href="{{ route('konfirmasi.detail', ['id_nasabah' => $nasabah->id_nasabah]) }}">
                                            Edit</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End: Content -->

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


</body>

</html>
