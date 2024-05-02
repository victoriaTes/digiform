<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard KAOPS</title>
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
            border: 1px solid #ffffff;
            border-radius: 10px;
            color: white;
        }

        #login a {
            color: white;
            text-decoration: none;
        }

        #otorisasi {
            background: #CE2222;
            border: 1px solid #CE2222;
            border-radius: 10px;
            color: white;
        }

        #otorisasi a {
            color: white;
            text-decoration: none;
        }

        @media (min-width: 768px) {
            .form-horizontal .control-label {
                text-align: left;
            }
        }

        img#disabledInput{
            width: 250px;
            height: 300px;
        }
    </style>

</head>

<body class="sb-l-c sb-l-m sb-r-c" data-target="#nav-spy" data-offset="200">
    <div id="main" class="animated fadeIn">

        <!-- Start: Header -->
        <header class="navbar navbar-fixed-top bg-light">
            <div class="navbar-branding" id="logo">
                <a href="{{ route('kaops') }}">
                    <img style="width: 150px;" src="{{ URL::to('/assets/images/logo/victoria.png') }}" alt="Logo">
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img
                            src="{{ URL::to('/assets/images/logo/user.jpg') }}" alt="avatar" class="mw30 br64 mr15">
                        <span style="color: #CE2222">Kepala Operational</span>
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
                                {{-- <form class="form-horizontal" role="form"> --}}
                                <form class="form-horizontal" role="form" method="POST"
                                    action="{{ route('approval.detail.post', ['id_nasabah' => $nasabah->id_nasabah]) }}">
                                    @csrf
                                    <div class="form-group" style="display: none;">
                                        <label for="id_nasabah" class="col-lg-3 control-label">id nasabah</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="id_nasabah" name="id_nasabah" type="hidden"
                                                value="{{ $nasabah->id_nasabah }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label mb20"><strong>Informasi
                                                Data Nasabah</strong></label>
                                    </div>

                                    <div class="form-group">
                                        <label for="noKtp" class="col-lg-3 control-label">Nomor Identitas</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="noKtp" name="noKtp" type="text"
                                                placeholder="{{ $nasabah->nik }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="namaCust" class="col-lg-3 control-label">Nama Lengkap (Sesuai
                                            KTP)</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="namaCust" name="namaCust"
                                                type="text" placeholder="{{ $nasabah->nama_lengkap }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="gelar" class="col-lg-3 control-label">Gelar</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="gelar" name="gelar" type="text"
                                                placeholder="{{ $nasabah->gelar }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address1" class="col-lg-3 control-label">Alamat Sesuai
                                            Bukti Identitas</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="address1" name="address1"
                                                type="text" placeholder="{{ $nasabah->alamat_ktp }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address2" class="col-lg-3 control-label">RT/RW</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="address2" name="address2"
                                                type="text" placeholder="{{ $nasabah->rtrw_ktp }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address3" class="col-lg-3 control-label">Kelurahan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="address3" name="address3"
                                                type="text" placeholder="{{ $nasabah->kelurahan_ktp }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address4" class="col-lg-3 control-label">Kecamatan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="address4" name="address4"
                                                type="text" placeholder="{{ $nasabah->kecamatan_ktp }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address5" class="col-lg-3 control-label">Kabupaten</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="address5" name="address5"
                                                type="text" placeholder="{{ $nasabah->kabupaten_ktp }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="propinsi" class="col-lg-3 control-label">Propinsi</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="propinsi" name="propinsi"
                                                type="text" placeholder="{{ $nasabah->propinsi_ktp }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kodepos" class="col-lg-3 control-label">Kode Pos</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="kodepos" name="kodepos" type="text"
                                                placeholder="{{ $nasabah->kode_pos_ktp }}" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="disabledInput"
                                            class="col-lg-3 control-label mb20 mt20"><strong>Alamat Saat
                                                Ini</strong></label>
                                    </div>

                                    <div class="form-group">
                                        <label for="dom1" class="col-lg-3 control-label">Alamat Saat Ini</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="dom1" name="dom1" type="text"
                                                placeholder="{{ $nasabah->alamat }}" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="normh" class="col-lg-3 control-label">Nomor Rumah /
                                            Apartemen</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="normh" name="normh" type="text"
                                                placeholder="{{ $nasabah->nomor_rumah }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dom2" class="col-lg-3 control-label">RT/RW</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="dom2" name="dom2" type="text"
                                                placeholder="{{ $nasabah->rtrw }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dom3" class="col-lg-3 control-label">Kelurahan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="dom3" name="dom3" type="text"
                                                placeholder="{{ $nasabah->kelurahan }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dom4" class="col-lg-3 control-label">Kecamatan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="dom4" name="dom4" type="text"
                                                placeholder="{{ $nasabah->kecamatan }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dom5" class="col-lg-3 control-label">Kabupaten</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="dom5" name="dom5" type="text"
                                                placeholder="{{ $nasabah->kabupaten }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="propdomi" class="col-lg-3 control-label">Propinsi</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="propdomi" name="propdomi"
                                                type="text" placeholder="{{ $nasabah->propinsi }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kodeposdomi" class="col-lg-3 control-label">Kode Pos</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="kodeposdomi" name="kodeposdomi"
                                                type="text" placeholder="{{ $nasabah->kode_pos }}" disabled>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="tempatLahir" class="col-lg-3 control-label">Tempat Lahir</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="tempatLahir" name="tempatLahir"
                                                type="text" placeholder="{{ $nasabah->tempat_lahir }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="datepicker1" class="col-lg-3 control-label">Tanggal
                                            Lahir</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="datepicker1" name="datepicker1"
                                                type="text" placeholder="{{ $nasabah->tgl_lahir }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="agama" class="col-lg-3 control-label">Agama</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="agama" name="agama" type="text"
                                                placeholder="{{ $nasabah->agama }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sex" class="col-lg-3 control-label">Jenis
                                            Kelamin</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="sex" name="sex" type="text"
                                                placeholder="{{ $nasabah->jenis_kelamin }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="negara" class="col-lg-3 control-label">Negara</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="negara" name="negara" type="text"
                                                placeholder="{{ $nasabah->negara }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="statusperkawinan" class="col-lg-3 control-label">Status
                                            Perkawinan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="statusperkawinan" name="statusperkawinan"
                                                type="text" placeholder="{{ $nasabah->status_perkawinan }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pendidikan" class="col-lg-3 control-label">Pendidikan
                                            Terakhir</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="pendidikan" name="pendidikan"
                                                type="text" placeholder="{{ $nasabah->pendidikan }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="statusrumah" class="col-lg-3 control-label">Status Rumah</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="statusrumah" name="statusrumah"
                                                type="text" placeholder="{{ $nasabah->status_rumah }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="motherMaidenName" class="col-lg-3 control-label">Nama Ibu
                                            Kandung</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="motherMaidenName" name="motherMaidenName"
                                                type="text" placeholder="{{ $nasabah->nama_ibu }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-lg-3 control-label">Email</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="email" name="email" type="text"
                                                placeholder="{{ $nasabah->email }}" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="disabledInput"
                                            class="col-lg-3 control-label mb20 mt20"><strong>Informasi Data Pekerjaan
                                                Nasabah</strong></label>
                                    </div>

                                    <div class="form-group">
                                        <label for="namaperusahaan" class="col-lg-3 control-label">Nama
                                            Perusahaan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="namaperusahaan" name="namaperusahaan"
                                                type="text" placeholder="{{ $nasabah->nama_perusahaan }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamatPerusahaan" class="col-lg-3 control-label">Alamat
                                            Perusahaan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="alamatPerusahaan" name="alamatPerusahaan"
                                                type="text" placeholder="{{ $nasabah->alamat_perusahaan }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rtperusahaan" class="col-lg-3 control-label">RT</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="rtperusahaan" name="rtperusahaan"
                                                type="text" placeholder="{{ $nasabah->rt_perusahaan }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rwperusahaan" class="col-lg-3 control-label">RW</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="rwperusahaan" name="rwperusahaan"
                                                type="text" placeholder="{{ $nasabah->rw_perusahaan }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kelurahanperusahaan"
                                            class="col-lg-3 control-label">Kelurahan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="kelurahanperusahaan"
                                                name="kelurahanperusahaan" type="text"
                                                placeholder="{{ $nasabah->kelurahan_perusahaan }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kecamatanperusahaan"
                                            class="col-lg-3 control-label">Kecamatan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="kecamatanperusahaan"
                                                name="kecamatanperusahaan" type="text"
                                                placeholder="{{ $nasabah->kecamatan_perusahaan }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kabupatenperusahaan"
                                            class="col-lg-3 control-label">Kabupaten</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="kabupatenperusahaan"
                                                name="kabupatenperusahaan" type="text"
                                                placeholder="{{ $nasabah->kabupaten_perusahaan }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="propinsiperusahaan"
                                            class="col-lg-3 control-label">Propinsi</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="propinsiperusahaan"
                                                name="propinsiperusahaan" type="text"
                                                placeholder="{{ $nasabah->propinsi_perusahaan }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="kodeposperusahaan" class="col-lg-3 control-label">Kode Pos</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="kodeposperusahaan"
                                                name="kodeposperusahaan" type="text"
                                                placeholder="{{ $nasabah->kode_pos_perusahaan }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="teleponperusahaan" class="col-lg-3 control-label">No.
                                            Telepon</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="teleponperusahaan"
                                                name="teleponperusahaan" type="tel"
                                                placeholder="{{ $nasabah->telpon_perusahaan }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jobPositionCode" class="col-lg-3 control-label">Pekerjaan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="jobPositionCode" name="jobPositionCode"
                                                type="text" placeholder="{{ $nasabah->pekerjaan }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bidangusaha" class="col-lg-3 control-label">Bidang Usaha</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="bidangusaha" name="bidangusaha"
                                                type="text" placeholder="{{ $nasabah->bidang_usaha }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan" class="col-lg-3 control-label">Jabatan</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="jabatan" name="jabatan" type="text"
                                                placeholder="{{ $nasabah->jabatan }}" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="disabledInput"
                                            class="col-lg-3 control-label mb20 mt20"><strong>Informasi Data Keuangan
                                                Nasabah</strong></label>
                                    </div>

                                    <div class="form-group">
                                        <label for="pembukanrekening" class="col-lg-3 control-label">Tujuan Pembukaan
                                            Rekening</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="pembukanrekening" name="pembukanrekening"
                                                type="text" placeholder="{{ $nasabah->tujuan_rek }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sumberdana" class="col-lg-3 control-label">Sumber Dana</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="sumberdana" name="sumberdana"
                                                type="text" placeholder="{{ $nasabah->sumber_dana }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pengguanaandana" class="col-lg-3 control-label">Tujuan Penggunaan
                                            Dana</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="pengguanaandana" name="pengguanaandana"
                                                type="text" placeholder="{{ $nasabah->tujuan_dana }}" disabled>
                                        </div>
                                    </div>

                                    {{-- <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Foto</label>
                                        <div class="col-lg-8">
                                            <img src="{{ URL::to('/assets/images/logo/user.jpg') }}" alt="avatar"
                                                id="disabledInput">
                                        </div>
                                    </div> --}}

                                    <div class="form-group">
                                        <label for="disabledInput" class="col-lg-3 control-label">Foto</label>
                                        <div class="col-lg-8">
                                            {{-- <img src="{{ URL::to('/assets/images/logo/user.jpg') }}" alt="avatar"
                                                id="disabledInput"> --}}
                                            {{-- <img src="{{ asset('selfie/selfie.png') }}" alt="image"> --}}
                                            <img src="{{ asset('storage/selfie/' . $nasabah->nama_gambar) }}" alt="avatar"
                                                id="disabledInput">
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="disabledInput" class="col-lg-3 control-label"><strong>Jenis
                                                Tabungan</strong></label>
                                    </div>

                                    <div class="form-group">
                                        <label for="tabungan" class="col-lg-3 control-label">Pilih
                                            Product</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="tabungan" name="tabungan"
                                                type="text" value="{{ $nasabah->jenis_tabungan }}" disabled>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="aml" class="col-lg-3 control-label"></label>
                                        <div class="col-lg-8">
                                            <input id="aml" name="aml" value="1"
                                                class="form-check-input" type="checkbox"
                                                onchange="updateCheckbox('aml')"
                                                {{ $nasabah->aml == '1' ? 'checked' : '' }} disabled>
                                            <b>VERIFIKSI DATA AML</b>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="dukcapil" class="col-lg-3 control-label"></label>
                                        <div class="col-lg-8">
                                            <input id="dukcapil" name="dukcapil" value="1"
                                                class="form-check-input" type="checkbox"
                                                onchange="updateCheckbox('dukcapil')"
                                                {{ $nasabah->dukcapil == '1' ? 'checked' : '' }} disabled>
                                            <b>VERIFIKSI DATA DUKCAPIL</b>
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
                                        <label for="reject" class="col-lg-3 control-label">reject</label>
                                        <div class="col-lg-8">
                                            <input class="form-control" id="reject" name="reject" type="hidden"
                                                value="99">
                                        </div>
                                    </div>

                                    @if ($nasabah->flag_status == '0')
                                        <div class="clearfix p15 ph15 text-center">
                                            <button type="submit" class="btn btn-success btn-lg mx-auto p8 w100 mr20"
                                                id="login" name="action" value="approve"> Approve
                                            </button>
                                            <button type="submit" class="btn btn-danger btn-lg mx-auto p8 w100 mr20"
                                                id="login" name="action" value="reject"> Reject
                                            </button>
                                        </div>
                                    @else
                                        <div class="clearfix p15 ph15 text-center">
                                            <button type="submit" class="btn btn-danger btn-lg mx-auto p8 w1500 mr20"
                                                id="otorisasi" disabled> Sudah Otorisasi
                                            </button>
                                        </div>
                                    @endif

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
    <script>
        function approve() {
            alert('Data Diterima !');
        }

        function reject() {
            alert('Data Ditolak !');
        }
    </script>
    <script>
        function updateCheckbox(checkboxId) {
            var checkbox = document.getElementById(checkboxId);
            checkbox.value = checkbox.checked ? '1' : '0';
        }
    </script>

</body>

</html>
