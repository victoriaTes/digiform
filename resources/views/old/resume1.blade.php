<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bank Victoria International</title>
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
    </style>

    <style>
        * {
            margin: 0;
            padding: 0;
        }



        /*Background color*/
        #grad1 {
            background-color: : #9C27B0;
            background-image: linear-gradient(120deg, #FF4081, #81D4FA);
        }

        /*form styles*/
        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px;
        }

        #msform fieldset .form-card {
            background: white;
            border: 0 none;
            border-radius: 0px;
            box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
            padding: 20px 40px 30px 40px;
            box-sizing: border-box;
            width: 94%;
            margin: 0 3% 20px 3%;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;

            /*stacking fieldsets above each other*/
            position: relative;
        }

        /*Hide all except first fieldset*/
        #msform fieldset:not(:first-of-type) {
            display: none;
        }

        #msform fieldset .form-card {
            text-align: left;
            color: #9E9E9E;
        }

        #msform input,
        #msform textarea {
            padding: 0px 8px 4px 8px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            font-size: 16px;
            letter-spacing: 1px;
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: none;
            font-weight: bold;
            border-bottom: 2px solid skyblue;
            outline-width: 0;
        }

        /*Blue Buttons*/
        #msform .action-button {
            width: 100px;
            background: skyblue;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
        }

        /*Previous Buttons*/
        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px;
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
        }

        /*Dropdown List Exp Date*/
        select.list-dt {
            border: none;
            outline: 0;
            border-bottom: 1px solid #ccc;
            padding: 2px 5px 3px 5px;
            margin: 2px;
        }

        select.list-dt:focus {
            border-bottom: 2px solid skyblue;
        }

        /*The background card*/
        .card {
            z-index: 0;
            border: none;
            border-radius: 0.5rem;
            position: relative;
        }

        /*FieldSet headings*/
        .fs-title {
            font-size: 25px;
            color: #2C3E50;
            margin-bottom: 10px;
            font-weight: bold;
            text-align: left;
        }

        /*progressbar*/
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey;
        }

        #progressbar .active {
            color: #880808;
        }

        #progressbar li {
            list-style-type: none;
            font-size: 12px;
            width: 14%;
            float: left;
            position: relative;
        }

        /*Icons in the ProgressBar*/
        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f023";
        }

        #progressbar #building:before {
            font-family: FontAwesome;
            content: "\f1ad";
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007";
        }

        #progressbar #calculator:before {
            font-family: FontAwesome;
            content: "\f1ec";
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f09d";
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c";
        }

        /*ProgressBar before any progress*/
        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 18px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px;
        }

        /*ProgressBar connectors*/
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1;
        }

        /*Color number of the step and the connector before it*/
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #880808;
        }

        /*Imaged Radio Buttons*/
    </style>

</head>

<body class="sb-l-c sb-l-m sb-r-c" data-target="#nav-spy" data-offset="200">
    <div id="main" class="animated fadeIn">

        <!-- Start: Header -->

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
                    <!-- <div class="progress mt10 mbn">
                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">45% Complete</span>
                        </div>
                    </div> -->
                    <div class="col-8 col-sm-9 col-md-7 col-lg-12 text-center p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">

                            <!-- progressbar -->
                            {{-- <ul id="progressbar">
                                <li class="active" id="payment"><strong>Unggah KTP</strong></li>
                                <li class="active" id="personal"><strong>Informasi Data Utama</strong></li>
                                <li class="active" id="building"><strong>Data Pekerjaan</strong></li>
                                <li class="active" id="calculator"><strong>Data Keuangan</strong></li>
                                <li class="active" id="calculator"><strong>Estimasi Perkiraan</strong></li>
                                <li class="active" id="calculator"><strong>Frekuensi Transaksi</strong></li>
                                <li class="active" id="confirm"><strong>Kirim Data</strong></li>
                            </ul> --}}

                            <h1 style="color: #CE2222;">RESUME DATA NASABAH</h1>

                        </div>
                    </div>
                    <div class="center mb30">
                        <h1 style="color: #CE2222;"></h1>
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <!-- <label for="alamat"style="color: black;"><h3><strong>Informasi Data Utama</strong></h3></label> -->
                            </div>
                            <div class="panel-body">
                                <div>

                                    <div class="mb-3">
                                        <label for="alamat"style="color: black;"><strong>
                                                <h3><u>Informasi Data Utama</u></h3>
                                            </strong></label>
                                    </div>

                                    <div class="section mb-3" style="display:none;">
                                        <label for="noKtp"style="color: black;"><strong>Nomor Identitas :
                                            </strong></label>
                                        <input type="text" id="noKtp" name="noKtp" class="form-control"
                                            placeholder="Nomor Identitas" value="<?php echo $regid; ?>" required />
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Nomor Identitas
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $idNumber; ?></strong>
                                        </div>
                                    </div>


                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="address1"style="color: black;"><strong>Nama Lengkap (Sesusai
                                                    KTP) :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $nama_lengkap; ?></strong>
                                        </div>

                                    </div>

                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="address1"style="color: black;"><strong>Gelar :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $gelar; ?></strong>
                                        </div>

                                    </div>
                                    <br />

                                    <div class="mb-3">
                                        <label for="alamat"style="color: black;"><strong>
                                                <h3><u>Alamat Sesuai KTP</u></h3>
                                            </strong></label>
                                    </div>

                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="address1"style="color: black;"><strong>Alamat sesuai bukti
                                                    identitas :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $alamat_ktp; ?></strong>
                                        </div>

                                    </div>

                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="address1"style="color: black;"><strong>RT/RW :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $rtrw_ktp; ?></strong>
                                        </div>

                                    </div>

                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="address1"style="color: black;"><strong>Kelurahan
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $kelurahan_ktp; ?></strong>
                                        </div>

                                    </div>

                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="address1"style="color: black;"><strong>Kecamatan
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $kecamatan_ktp; ?></strong>
                                        </div>

                                    </div>


                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Kabupaten
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $kabupaten_ktp; ?></strong>
                                        </div>

                                    </div>

                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Propinsi
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $propinsi_ktp; ?></strong>
                                        </div>

                                    </div>

                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Kode Pos
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $kode_pos_ktp; ?></strong>
                                        </div>

                                    </div>

                                    <br />

                                    <div class="mb-3">
                                        <label for="alamat"style="color: black;"><strong>
                                                <h3><u>Alamat Saat Ini</u></h3>
                                            </strong></label>
                                    </div>

                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="address1"style="color: black;"><strong>Alamat
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $alamat; ?></strong>
                                        </div>

                                    </div>

                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="address1"style="color: black;"><strong>No. Rumah/Apartemen
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $nomor_rumah; ?></strong>
                                        </div>

                                    </div>

                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="address1"style="color: black;"><strong>RT/RW :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $rtrw; ?></strong>
                                        </div>

                                    </div>

                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="address1"style="color: black;"><strong>Kelurahan
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $kelurahan; ?></strong>
                                        </div>

                                    </div>


                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="address1"style="color: black;"><strong>Kecamatan
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $kecamatan; ?></strong>
                                        </div>

                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Kabupaten
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $kabupaten; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Propinsi
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $propinsi; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Kode Pos
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $kode_pos; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Tempat Lahir
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $tempat_lahir; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Tanggal Lahir
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $tgl_lahir; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>No.HP :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $no_hp; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Agama :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $agama; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Jenis Kelamin
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $jenis_kelamin; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Negara
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $negara; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Status Perkawinan
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $status_perkawinan; ?></strong>
                                        </div>

                                    </div>

                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Hobi :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $hobby; ?></strong>
                                        </div>

                                    </div>

                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Punya Istri
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $punya_istri; ?></strong>
                                        </div>

                                    </div>

                                    <div class="p25 br-b">

                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Punya Anak
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $punya_anak; ?></strong>
                                        </div>

                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Pendidikan Terakhir
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $pendidikan; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Status Rumah
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $status_rumah; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Nama Ibu Kandung
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $nama_ibu; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Email
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $email; ?></strong>
                                        </div>
                                    </div>

                                    <br />

                                    <div class="mb-3">
                                        <label for="alamat"style="color: black;"><strong>
                                                <h3><u>Data Pekerjaan</u></h3>
                                            </strong></label>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Nama Perusahaan
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $nama_perusahaan; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Alamat Perusahaan
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $alamat_perusahaan; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>RT :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $rt_perusahaan; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>RW :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $rw_perusahaan; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Kelurahan
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $kelurahan_perusahaan; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Kecamatan
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $kecamatan_perusahaan; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Kabupaten
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $kabupaten_perusahaan; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Propinsi
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $propinsi_perusahaan; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Kode Pos
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $kode_pos_perusahaan; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>No.Telepon
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $telpon_perusahaan; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Pekerjaan
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $pekerjaan; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Bidang Usaha
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $bidang_usaha; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Jabatan
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $jabatan; ?></strong>
                                        </div>
                                    </div>
                                    {{-- <br/> --}}

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Lama Kerja (tahun)
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $lama_kerja; ?></strong>
                                        </div>
                                    </div>
                                    {{-- <br/> --}}

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Jumlah Karyawan
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $jumlah_karyawan; ?></strong>
                                        </div>
                                    </div>
                                    <br />

                                    <div class="mb-3">
                                        <label for="alamat"style="color: black;"><strong>
                                                <h3><u>Data Keuangan</u></h3>
                                            </strong></label>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Jika Karyawan
                                                    Penghasilan Utama (Kotor Per-Bulan dalam Rupiah) :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $dana_tambahan; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Penghasilan Tambahan
                                                    (Per-Bulan dalam Rupiah) : </strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $dana_tambahan; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Jika Wiraswasta, Omzet
                                                    (Per-Bulan dalam Rupiah): </strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $dana_tambahan; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Tujuan Pembukaan
                                                    Rekening :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $tujuan_rek; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Sumber Dana
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $sumber_dana; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Tujuan Penggunan Dana
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $tujuan_dana; ?></strong>
                                        </div>
                                    </div>
                                    <br />

                                    <div class="mb-3">
                                        <label for="alamat"style="color: black;"><strong>
                                                <h3><u>Estimasi Perkiraan</u></h3>
                                            </strong></label>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Transaksi Setoran
                                                    Tunai :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $trx_str_tunai; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Transaksi Penarikan
                                                    Tunai :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $trx_pnrkn_tunai; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Transaksi Setoran Non
                                                    Tunai :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $trx_str_nontunai; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Transaksi Penarikan Non
                                                    Tunai :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $trx_pnrkn_nontunai; ?></strong>
                                        </div>
                                    </div>
                                    <br />

                                    <div class="mb-3">
                                        <label for="alamat"style="color: black;"><strong>
                                                <h3><u>Frekuensi transaksi</u></h3>
                                            </strong></label>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos" style="color: black;"><strong>Setoran Tunai
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $setoran_tunai; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Penarikan Tunai
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $penarikan_tunai; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Setoran Non Tunai
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $setoran_nontunai; ?></strong>
                                        </div>
                                    </div>

                                    <div class="p25 br-b">
                                        <div class ="col-md-4" style="text-align: left;">
                                            <label for="kodepos"style="color: black;"><strong>Penarikan Non Tunai
                                                    :</strong></label>
                                        </div>
                                        <div class ="col-md-8" style="text-align: left;">
                                            <strong><?php echo $penarikan_nontunai; ?></strong>
                                        </div>
                                    </div>
                                </div>
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

    {{-- <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Demo JS     
            Demo.init();

            // Dropzone autoattaches to "dropzone" class.
            // Configure Dropzone options
            Dropzone.options.dropZone = {
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 0, // MB

                addRemoveLinks: true,
                dictDefaultMessage: '<i class="fa fa-cloud-upload"></i> \
                    <span class="main-text"><b>Drop Files</b> to upload</span> <br /> \
                    <span class="sub-text">(or click)</span> \
                    ',
                dictResponseError: 'Server not Configured'
            };

            // Form Wizard 
            var form = $("#form-wizard");
            form.validate({
                errorPlacement: function errorPlacement(error, element) {
                    element.before(error);
                },
                rules: {
                    confirm: {
                        equalTo: "#password"
                    }
                }
            });
            form.children(".wizard").steps({
                headerTag: ".wizard-section-title",
                bodyTag: ".wizard-section",
                onStepChanging: function(event, currentIndex, newIndex) {
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                },
                onFinishing: function(event, currentIndex) {
                    form.validate().settings.ignore = ":disabled";
                    return form.valid();
                },
                onFinished: function(event, currentIndex) {
                    alert("Submitted!");
                }
            });

            // Demo Wizard Functionality
            var formWizard = $('.wizard');
            var formSteps = formWizard.find('.steps');

            $('.wizard-options .holder-style').on('click', function(e) {
                e.preventDefault();

                var stepStyle = $(this).data('steps-style');

                var stepRight = $('.holder-style[data-steps-style="steps-right"');
                var stepLeft = $('.holder-style[data-steps-style="steps-left"');
                var stepJustified = $('.holder-style[data-steps-style="steps-justified"');

                if (stepStyle === "steps-left") {
                    stepRight.removeClass('holder-active');
                    stepJustified.removeClass('holder-active');
                    formWizard.removeClass('steps-right steps-justified');
                }
                if (stepStyle === "steps-right") {
                    stepLeft.removeClass('holder-active');
                    stepJustified.removeClass('holder-active');
                    formWizard.removeClass('steps-left steps-justified');
                }
                if (stepStyle === "steps-justified") {
                    stepLeft.removeClass('holder-active');
                    stepRight.removeClass('holder-active');
                    formWizard.removeClass('steps-left steps-right');
                }

                // Assign new style 
                if ($(this).hasClass('holder-active')) {
                    formWizard.removeClass(stepStyle);
                } else {
                    formWizard.addClass(stepStyle);
                }

                // Assign new active holder
                $(this).toggleClass('holder-active');
            });

            // Demo code 
            $('.example-preview').on('click', 'a.dz-remove', function() {
                $(this).parent('.example-preview').remove();
            });

            $("#datepicker1").datepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false
            });
        });
    </script> --}}
</body>

</html>
