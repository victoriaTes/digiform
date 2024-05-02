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

        #btnlogin {
            background: #0875be;
            border: 1px solid #0875be;
            border-radius: 10px;
            color: white;
        }
        #btnlogin a {
            color: white;
            text-decoration: none;
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

#msform input, #msform textarea {
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

#msform input:focus, #msform textarea:focus {
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

#msform .action-button:hover, #msform .action-button:focus {
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

#msform .action-button-previous:hover, #msform .action-button-previous:focus {
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
#progressbar li.active:before, #progressbar li.active:after {
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
                    <!-- <div class="container-fluid" id="grad1"> -->
    <!-- <div class="row justify-content-center mt-0"> -->
                    <div class="col-8 col-sm-9 col-md-7 col-lg-12 text-center p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            
                        <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="payment"><strong>Unggah KTP</strong></li>
                                <li class="active" style="color: #CE2222;" id="personal"><strong>Informasi Data Utama</strong></li>
                                <li id="building"><strong>Data Pekerjaan</strong></li>
                                <li id="calculator"><strong>Data Keuangan</strong></li>
                                <li id="calculator"><strong>Estimasi Perkiraan</strong></li>
                                <li id="calculator"><strong>Frekuensi Transaksi</strong></li>
                                <li id="confirm"><strong>Kirim Data</strong></li>
                            </ul>

                            <h1 style="color: #CE2222;">Informasi Data Utama</h1>
                        </div>
                    </div>
                    <div class="center mb30">
                        <!-- <h1 style="color: #CE2222;">Informasi Data Utama</h1> -->
                    </div>
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <!-- <label for="alamat"style="color: black;"><h3><strong>Informasi Data Utama</strong></h3></label> -->
                                
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" method="post" action="{{ route('datapekerjain') }}" role="form">
                                    @csrf
                                    <div class="section mb-3" style='display:none;'>
                                        <label for="regid"style="color: black;"><strong>Reg ID : </strong></label>
                                        <input type="text" id="regid" name="regid" class="form-control" placeholder="Nomor Identitas" value="<?php echo $reg_id; ?>" required />
                                        <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" placeholder="Nomor Identitas" value="<?php echo $pekerjaan; ?>" required />
                                    </div>
                                    <br/>

                                    <div class="section mb-3">
                                        <label for="noKtp"style="color: black;"><strong>Nomor Identitas : </strong></label>
                                        <input type="text" id="noKtp" name="noKtp" class="form-control" placeholder="Nomor Identitas" minlength="16" maxlength="16" value="<?php echo $idNumber; ?>" required />
                                    </div>
                                    <br/>
                                    @csrf
                                    <div class="section mb-3">
                                        <label for="sex" style="color: black;"><strong>Nama Lengkap (Sesuai KTP) :</strong></label>
                                        <input type="text" id="namaCust" name="namaCust" class="form-control " value="<?php echo $nama_lengkap; ?>" placeholder="Nama Lengkap (Sesuai KTP)" required/>
                                    </div>
                                    <br/>

                                    <div class="section mb-3">
                                        <label for="gelar" style="color: black;"><strong>Gelar :</strong></label>
                                        <select id="gelar" name="gelar" class="form-control required" required>
                                            <option value="" selected disabled hidden>--- Pilih Gelar ---
                                            </option>
                                            @if($gelar)
                                            <option value="<?php echo $gelar; ?>" hidden selected><?php echo $gelar; ?></option>
                                            @endif
                                            <option value="DOKTOR" >DOKTOR</option>
                                            <option value="SARJANA">SARJANA</option>
                                            <option value="DOKTOR" >MAGISTER</option>
                                            <option value="SARJANA">NON GELAR</option>
                                        </select>
                                    </div>
                                    <br/>

                                    <div class="section mb-3">
                                        <label for="alamat"style="color: black;"><h3><u><strong>Alamat Sesuai KTP</strong></u></h3></label>
                                    </div>
                                    
                                    <div class="section mb-3">
                                        <label for="address1"style="color: black;"><strong>Alamat sesuai bukti identitas :</strong></label>
                                        <input type="text" id="address1" name="address1" class="form-control " placeholder="Nama Jalan" value="<?php echo $alamat_ktp; ?>" required />
                                    </div>
                                    <br/>

                                    <div class="section mb-3">
                                        <label for="address2"style="color: black;"><strong>RT/RW :</strong></label>
                                        <input type="text" id="address2" name="address2" class="form-control " placeholder="RT/RW" value="<?php echo $rtrw_ktp; ?>" required />
                                    </div>
                                    <br/>

                                    <div class="section mb-3">
                                        <label for="address3"style="color: black;"><strong>Kelurahan :</strong></label>
                                        <input type="text" id="address3" name="address3" class="form-control " placeholder="Kelurahan" value="<?php echo $kelurahan_ktp; ?>" required />
                                    </div>
                                    <br/>

                                    <div class="section mb-3">
                                        <label for="address1"style="color: black;"><strong>Kecamatan :</strong></label>
                                        <input type="text" id="address4" name="address4" class="form-control " placeholder="Kecamatan" value="<?php echo $kecamatan_ktp; ?>" required />
                                    </div>
                                    <br/>

                                    <div class="section mb-3">
                                        <label for="address5"style="color: black;"><strong>Kabupaten :</strong></label>
                                        <input type="text" id="address5" name="address5" class="form-control " placeholder="Kabupaten" value="<?php echo $kabupaten_ktp; ?>" required />
                                    </div>
                                    <br/>

                                    <div class="section mb-3">
                                        <label for="propinsi"style="color: black;"><strong>Propinsi :</strong></label>
                                        
                                        <input type="text" id="propinsi" name="propinsi" class="form-control " placeholder="Provinsi" value="{{ $propinsi_ktp }}"  required />
                                        <!-- <select id="propinsi" name="propinsi" class="form-control required" required>
                                            <option value="{{ $propinsi_ktp }}" selected>{{ $propinsi_ktp }}</option>
                                            @foreach($prop as $dt)
                                                <option value="{{$dt->nama_prop}}" >{{$dt->nama_prop}}</option>
                                            @endforeach
                                        </select> -->
                                    </div>
                                    <br/>
                                   
                                    <div class="section mb-3">
                                        <label for="kodepos"style="color: black;"><strong>Kode Pos :</strong></label>
                                        <input type="text" id="kodepos" name="kodepos" class="form-control " placeholder="Kode Pos" value="<?php echo $kodepos; ?>" maxlength="5" required  />
                                    </div>
                                    <br/>

                                    <div class="section mb-3">
                                        <label for="alamat"style="color: black;"><input type="checkbox" id="domis" name="domis" onclick="myFunction()" style="width: 20px;height: 20px;"/>&nbsp;&nbsp;<strong><u>Centang Jika Domisili Alamat Sesuai Dengan KTP</u></strong></label>
                                    </div>

                                    <div class="section mb-3">
                                        <label for="dom1"style="color: black;"><strong>Alamat Saat Ini :</strong></label>
                                        <input type="text" id="dom1" name="dom1" class="form-control " placeholder="Alamat Saat Ini" value="<?php echo $dom1; ?>" required />
                                    </div>
                                    <br/>

                                    <div class="section section">
                                        <label for="normh"style="color: black;"><strong>Nomor Rumah/Apartemen : </strong></label>
                                        <input type="text" id="normh" name="normh" class="form-control" placeholder="Nomor Rumah/Apartemen" value="<?php echo $normh; ?>" required />
                                    </div>
                                    <br/>

                                    <div class="section">
                                        <label for="dom2"style="color: black;"><strong>RT/RW : </strong></label>
                                        <input type="text" id="dom2" name="dom2" class="form-control " placeholder="RT/RW" value="<?php echo $dom2; ?>" required />
                                    </div>
                                    <br/>

                                    <div class="section">
                                        <label for="dom3"style="color: black;"><strong>Kelurahan :</strong></label>
                                        <input type="text" id="dom3" name="dom3" class="form-control " placeholder="Kelurahan"  value="<?php echo $dom3; ?>" required />
                                    </div>
                                    <br/>   

                                    <div class="section mb-3">
                                        <label for="dom4"style="color: black;"><strong>Kecamatan :</strong></label>
                                        <input type="text" id="dom4" name="dom4" class="form-control " placeholder="Kecamatan"  value="<?php echo $dom4; ?>" required />
                                    </div>
                                    <br/>

                                    <div class="section">
                                        <label for="dom5"style="color: black;"><strong>Kabupaten :</strong></label>
                                        <input type="text" id="dom5" name="dom5" class="form-control " placeholder="Kabupaten"  value="<?php echo $dom5; ?>" required />
                                    </div>
                                    <br/>

                                    <div class="section">
                                        <label for="propdomi"style="color: black;"><strong>Propinsi :</strong></label>
                                        <input type="text" id="propdomi" name="propdomi" class="form-control " placeholder="Propinsi" value="{{ $propdomi }}"  />
                                        <!-- <select id="propdomis" name="propdomis" class="form-control required" required >
                                            <option value="{{ $propdomi }}" selected>{{ $propdomi }}</option>
                                            @foreach($prop as $dt)
                                                <option value="{{$dt->kode}}" >{{$dt->nama_prop}}</option>
                                            @endforeach
                                        </select> -->
                                    </div>
                                    <br/>                             

                                    <div class="section">
                                        <label for="kodeposdomi"style="color: black;"><strong>Kode Pos :</strong></label>
                                        <input type="text" id="kodeposdomi" name="kodeposdomi" class="form-control " placeholder="Kode Pos" value="<?php echo $kodeposdomi; ?>" required />
                                    </div>
                                    <br/>

                                    <div class="section">
                                        
                                        <label for="tempatLahir"style="color: black;"><strong>Tempat Lahir</strong></label>
                                    
                                        <input type="text" id="tempatLahir" name="tempatLahir" class="form-control" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" required />
                                        
                                    </div>
                                    <br/>

                                    <div class="section">                                      
                                        <label for="datepicker1"style="color: black;"><strong>Tanggal Lahir (MM/DD/YYYY)</strong></label>
                                        <input type="text" id="datepicker1" name="datepicker1" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $tgl_lahir; ?>" required>                                          
                                    </div>
                                    <br/>

                                    <div class="section">                                     
                                        <label for="nohp"style="color: black;"><strong>No.HP</strong></label>
                                        <input type="text" id="nohp" name="nohp" class="form-control" placeholder="No.HP" value="<?php echo $nohp; ?>" maxlength="15" required>          
                                    </div>
                                    <br/>

                                    <div class="section">
                                        <label for="agama" style="color: black;"><strong>Agama</strong></label>
                                        <select id="agama" name="agama" class="form-control required" required>
                                            <option value="<?php echo $agama; ?>" hidden selected><?php echo $agama; ?></option>
                                            @foreach($agam as $ag)
                                                <option value="{{$ag->keterangan}}" >{{$ag->keterangan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br/>

                                    <div class="section">
                                        <label for="sex" style="color: black;"><strong>Jenis Kelamin :</strong></label>
                                        <select id="sex" name="sex" class="form-control required" required>
                                            <option value="<?php echo $jenis_kelamin; ?>" hidden selected><?php echo $jenis_kelamin; ?></option>
                                            <option value="LAKI-LAKI">LAKI-LAKI</option>
                                            <option value="Perempuan">PEREMPUAN</option>
                                        </select>
                                    </div>
                                    <br/>

                                    <div class="section">
                                        <label for="negara"style="color: black;"><strong>Negara : </strong></label>
                                        <input type="text" id="negara" name="negara" class="form-control" placeholder="" value="INDONESIA" readonly />
                                    </div>
                                    <br/>


                                    <div class="section">
                                        <label for="statusperkawinan" style="color: black;"><strong>Status Perkawinan :</strong></label>
                                        <select id="statusperkawinan" name="statusperkawinan" class="form-control " required>
                                            <option value="<?php echo $status_perkawinan; ?>" hidden selected><?php echo $status_perkawinan; ?></option>
                                            @foreach($STATUSNIKA as $STATUSNIK)
                                                <option value="{{$STATUSNIK->keterangan}}" >{{$STATUSNIK->keterangan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br/>

                                    <!-- <div class="section">
                                        <label for="negara"style="color: black;"><strong>Punya Istri : </strong></label>
                                        <input type="number" id="istri" name="istri" class="form-control" placeholder="" value="{{ $punya_istri }}" required />
                                    </div>
                                    <br/>

                                    <div class="section">
                                        <label for="negara"style="color: black;"><strong>Punya Anak : </strong></label>
                                        <input type="number" id="anak" name="anak" class="form-control" placeholder="" value="{{ $punya_anak }}" required />
                                    </div>
                                    <br/> -->

                                    <div class="section">
                                        <label for="hobby"style="color: black;"><strong>Hobby : </strong></label>
                                        <input type="text" id="hobby" name="hobby" class="form-control" placeholder="" value="{{ $hobby }}" maxlength="30" required />

                                    </div>
                                    <br/>
                                    <div class="section">
                                        <label for="pendidikan" style="color: black;"><strong>Pendidikan Terakhir :</strong></label>
                                        <select id="pendidikan" name="pendidikan" class="form-control required" required>
                                            <option value="" selected disabled hidden>--- Pilih Pendidikan Terakhir ---
                                            </option>
                                            @if ($pendidikan)
                                            <option value="<?php echo $pendidikan; ?>" hidden selected><?php echo $pendidikan; ?></option>
                                            @endif
                                            <option value="SD" >SD</option>
                                            <option value="SLTP">SLTP</option>
                                            <option value="SLTA">SLTA</option>
                                            <option value="DIPLOMA">DIPLOMA</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                    </div>
                                    <br/>

                                    <div class="section">
                                        <label for="statusrumah" style="color: black;"><strong>Status Rumah/Tempat Tinggal : </strong></label>
                                        <select id="statusrumah" name="statusrumah" class="form-control required" required>
                                            <option value="" selected disabled hidden>--- Pilih Status Rumah/Tempat Tinggal ---
                                            </option>
                                            @if ($kd_rumah)
                                             <option value="<?php echo $kd_rumah; ?>" hidden selected><?php echo $statusrumah; ?></option>        
                                            @endif
                                            @foreach($RUMA as $RUMAH)
                                                <option value="{{$RUMAH->kode}}" >{{$RUMAH->keterangan}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br/>

                                    <div class="section">
                                        <label for="motherMaidenName"style="color: black;"><strong>Nama Ibu Kandung :</strong></label>
                                        <input type="text" id="motherMaidenName" name="motherMaidenName" class="form-control" value="<?php echo $motherMaidenName; ?>" placeholder="Nama Ibu Kandung" required />
                                    </div>
                                    <br/>
                                    <div class="section">
                                        <label for="email"style="color: black;"><strong>Email :</strong></label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>" required>
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="clearfix p15 ph15 text-center">
                                        <!-- <a href="{{ route('datapekerjaan') }}" class="btn mx-auto p8 w100 mr20" id="login"  >
                                            Kembali</a> -->
                                        <button class="btn btn-danger btn-lg mr10 " type="submit" name="login" value="Lanjut" id="login">Lanjut</button>
                                        <button class="btn btn-primary btn-lg ml10" style="display:none;" type="submit" name="login" value="Kembali" id="btnlogin">Kembali</button>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <!-- <button class="btn mx-auto p8 w100" type="submit" id="login">Lanjut</button> -->
                                        <!-- <a type="submit"class="btn mx-auto p8 w100" id="login"  >Next</a> -->
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

    <script type="text/javascript">
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
    </script>

    <script>
        function myFunction() {
          var checkBox = document.getElementById("domis");
          //var text = document.getElementById("domi1");
          //var domi2 = document.getElementById("domi2");
          //var domi3 = document.getElementById("domi3");
          //var domi4 = document.getElementById("domi4");
          //var domi5 = document.getElementById("domi5");
		  
		  var add1 = document.getElementById("address1");
          var add2 = document.getElementById("address2");
          var add3 = document.getElementById("address3");
          var add4 = document.getElementById("address4");
          var add5 = document.getElementById("address5");
		  var propins = document.getElementById("propinsi");

          var kodepos = document.getElementById("kodepos");
		  

          var dom1 = document.getElementById("dom1");
          var dom2 = document.getElementById("dom2");
          var dom3 = document.getElementById("dom3");
          var dom4 = document.getElementById("dom4");
          var dom5 = document.getElementById("dom5");
          var propdomi = document.getElementById("propdomi");
        //   var propdomis = document.getElementById("propdomis");
        //   var kodeposdomi = document.getElementById("kodeposdomi");
        //   var kabdomis = document.getElementById("kabupatenperusahaan");
        //   var kecdomis = document.getElementById("kecamatanperusahaan");
        //   var keldomis = document.getElementById("kelurahanperusahaan");
          

          if (checkBox.checked == true){
            
			
			dom1.value = add1.value;
            dom2.value = add2.value;
            dom3.value = add3.value;
            dom4.value = add4.value;
            dom5.value = add5.value;
            propdomi.value = propins.value;
            
            kodeposdomi.value = kodepos.value;

            dom1.readOnly = true;
            dom2.readOnly = true;
            dom3.readOnly = true;
            dom4.readOnly = true;
            dom5.readOnly = true;
            propdomi.readOnly = true;
            kodeposdomi.readOnly = true;

            dom1.required = false;
            dom2.required = false;
            dom3.required = false;
            dom4.required = false;
            dom5.required = false;
            propdomi.required = false;
            kodeposdomi.required = false;

            // propdomis.style.display = "none";
            // propdomi.style.display = "block";

            // kabdomis.style.display = "none";
            // dom5.style.display = "block";

            // kecdomis.style.display = "none";
            // dom4.style.display = "block";

            // keldomis.style.display = "none";
            // dom3.style.display = "block";

            // propdomis.required = false;
            // kabdomis.required = false;
            // kecdomis.required = false;
            // keldomis.required = false;
            
          } else {

            // propdomi.style.display = "none";
            // propdomis.style.display = "block";

            // dom5.style.display = "none";
            // kabdomis.style.display = "block";

            // dom4.style.display = "none";
            // kecdomis.style.display = "block";

            // dom3.style.display = "none";
            // keldomis.style.display = "block";

            // propdomis.required = true;
            // kabdomis.required = true;
            // kecdomis.required = true;
            // keldomis.required = true;
            
            // dom1.value = "";
            // dom2.value = "";
            // dom3.value = "";
            // dom4.value = "";
            // dom5.value = "";
            // propdomi.value = "";
            // kodeposdomi.value = "";

            dom1.value = "<?php echo $dom1; ?>";
            dom2.value = "<?php echo $dom2; ?>";
            dom3.value = "<?php echo $dom3; ?>";
            dom4.value = "<?php echo $dom4; ?>";
            dom5.value = "<?php echo $dom5; ?>";
            propdomi.value = "<?php echo $propdomi; ?>";
            kodeposdomi.value = "<?php echo $kodeposdomi; ?>";

            dom1.readOnly = false;
            dom2.readOnly = false;
            dom3.readOnly = false;
            dom4.readOnly = false;
            dom5.readOnly = false;
            propdomi.readOnly = false;
            kodeposdomi.readOnly = false;
            
            dom1.required = true;
            dom2.required = true;
            dom3.required = true;
            dom4.required = true;
            dom5.required = true;
            propdomi.required = true;
            kodeposdomi.required = true;

            
          }
        }
      </script>

    
</body>

</html>
