<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Form | Pembukaan Rekening Online</title>
	<link rel="icon" type="image/png" href="{!! asset('images/bvic-logo.ico') !!}">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Dropzone CSS -->
    <link rel="stylesheet" href="{!! asset('admindesigns/vendor/plugins/dropzone/css/dropzone.css') !!}">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('admindesigns/assets/skin/default_skin/css/theme.css') !!}">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('admindesigns/assets/admin-tools/admin-forms/css/admin-forms.css') !!}">
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  </head>
  <body class="form-uploaders-page" data-spy="scroll" data-target="#nav-spy" data-offset="300">
    <!-- Begin: Content -->
    <section id="content" class="table-layout animated fadeIn">
      <!-- begin: .tray-center -->
      <div class="tray tray-center pv40 ph30 va-t posr animated-delay animated-long" data-animate='["800","fadeIn"]'>
        <h2 class="lh30 mtn text-center">Selamat Datang Di Pembukaan Rekening Digital <b>Bank Victoria International</b></h2>
        <p class="lead mb40 text-center">3 Langkah Tepat Untuk Mendapatkan Solusi Finansial Terbaik</p>

        <!-- Form Wizard -->
        <div class="admin-form col-md-10 center-block">
            <form method="post" action="/" id="form-wizard">
                <div class="wizard steps-bg justified">

                    <!-- Wizard step 1 -->
                    <!-- <h4 class="wizard-section-title"><i class="fa fa-user pr5"></i> Verifikasi NIK</h4>
                    <section class="wizard-section">
                      <div class="section col-md-6 center-block">
                          <div class="smart-widget sm-right smr-80">
                              <label class="field prepend-icon">
                                  <input type="text" name="sub2" id="sub2" class="gui-input" placeholder="Mohon Masukkan Nomor NIK Anda">
                                  <label for="s" class="field-icon"><i class="fa fa-search"></i>
                                  </label>
                              </label>
                              <button type="submit" class="button">Cari</button>
                          </div>
                      </div>
                    </section> -->

                    <!-- Wizard step 2 -->
                    <h4 class="wizard-section-title"><i class="fa fa-dollar pr5"></i> Unggah KTP</h4>
                    <section class="wizard-section">

                        <div class="section">
                            <div class="col-xs-12 col-sm-8 pl30  center-block">
                                <div class="tray-bin pl10 mb10" style="min-height: 250px;">
                                    <h5 class="text-muted mt10 fw600 pl10"><i class="fa fa-exclamation-circle text-info fa-lg pr10"></i> Unggah KTP </h5>
                                    <form action="/file-upload" class="dropzone dropzone-sm" id="dropZone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="section" style="display:none;">
                            <div class="col-xs-12 col-sm-8 pl30  center-block">
                                <div class="tray-bin pl10 mb10" style="min-height: 250px;">
                                    <h5 class="text-muted mt10 fw600 pl10"><i class="fa fa-exclamation-circle text-info fa-lg pr10"></i> Unggah Foto Diri </h5>
                                    <form action="/file-upload" class="dropzone dropzone-sm" id="dropZone">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end section -->

                    </section>

<!-- -------------------------------------------------------------------------Input Data---------------------------------------------------------------------------->

                    <!-- Wizard step 3 -->
                    <h4 class="wizard-section-title"><i class="fa fa-shopping-cart pr5"></i> Input Data</h4>
                    <section class="wizard-section">

                        <div class="form-group mb-3">
                            <label for="alamat"style="color: black;"><h3><strong>Informasi Data Utama</strong></h3></label>
                        </div>

                        <div class="form-group mb-3">
                            <label for="noKtp"style="color: black;"><strong>Nomor Identitas : </strong></label>
                            <input type="text" id="noKtp" name="noKtp" class="form-control" placeholder="Nomor Identitas" value="" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="sex" style="color: black;"><strong>Nama Lengkap (Sesuai KTP) :</strong></label>
                            <input type="text" id="namaCust" name="namaCust" class="form-control " value="" placeholder="Nama Lengkap (Sesuai KTP)"/>
                        </div>

                        <div class="form-group mb-3">
                            <label for="sex" style="color: black;"><strong>Gelar :</strong></label>
                            <select id="sex" name="sex" class="form-control required" required>
                                <option value="DOCTOR" selected>DOKTOR</option>
                                <option value="SARJANA">SARJANA</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="alamat"style="color: black;"><h3><strong>Alamat Sesuai KTP</strong></h3></label>
                        </div>

                        <div class="form-group mb-3">
                            <label for="address1"style="color: black;"><strong>Alamat sesuai bukti identitas :</strong></label>
                            <input type="text" id="address1" name="address1" class="form-control " placeholder="Nama Jalan" value=""  />
                        </div>

                        <div class="form-group mb-3">
                            <label for="address1"style="color: black;"><strong>RT/RW :</strong></label>
                            <input type="text" id="address2" name="address2" class="form-control " placeholder="RT/RW" value=""  />
                        </div>

                        <div class="form-group mb-3">
                            <label for="address1"style="color: black;"><strong>Kelurahan :</strong></label>
                            <input type="text" id="address3" name="address3" class="form-control " placeholder="Kelurahan" value=""  />
                        </div>

                        <div class="form-group mb-3">
                            <label for="address1"style="color: black;"><strong>Kecamatan :</strong></label>
                            <input type="text" id="address4" name="address4" class="form-control " placeholder="Kecamatan" value=""  />
                        </div>

                        <div class="form-group mb-3">
                            <label for="address1"style="color: black;"><strong>Kabupaten :</strong></label>
                            <input type="text" id="address5" name="address5" class="form-control " placeholder="Kabupaten" value=""  />
                        </div>

                        <div class="form-group mb-3">
                            <label for="address1"style="color: black;"><strong>Propinsi :</strong></label>
                            <input type="text" id="propinsi" name="propinsi" class="form-control " placeholder="Provinsi" value=""  />
                        </div>

                        <div class="form-group mb-3">
                            <label for="kodepos"style="color: black;"><strong>Kode Pos :</strong></label>
                            <input type="text" id="kodepos" name="kodepos" class="form-control " placeholder="Kode Pos"   />
                        </div>

                        <div class="form-group mb-3">
                            <label for="alamat"style="color: black;"><input type="checkbox" id="domis" name="domis" onclick="myFunction()" style="width: 20px;height: 20px;"/>&nbsp;&nbsp;<strong><u>Centang Jika Domisili Alamat Sesuai Dengan KTP</u></strong></label>
                        </div>

                        <div class="form-group mb-3">
                            <label for="dom1"style="color: black;"><strong>Alamat Saat Ini :</strong></label>
                            <input type="text" id="dom1" name="dom1" class="form-control " placeholder="Alamat Saat Ini" value=""  />
                        </div>

                        <div class="form-group mb-3">
                            <label for="normh"style="color: black;"><strong>Nomor Rumah/Apartemen : </strong></label>
                            <input type="text" id="normh" name="normh" class="form-control" placeholder="Nomor Rumah/Apartemen" value="" />
                        </div>

                        <div class="form-group mb-3">
                            <label for="dom2"style="color: black;"><strong>RT/RW : </strong></label>
                            <input type="text" id="dom2" name="dom2" class="form-control " placeholder="RT/RW" value=""  />
                        </div>

                        <div class="form-group mb-3">
                            <label for="dom3"style="color: black;"><strong>Kelurahan :</strong></label>
                            <input type="text" id="dom3" name="dom3" class="form-control " placeholder="Kelurahan" value=""  />
                        </div>

                        <div class="form-group mb-3">
                            <label for="dom4"style="color: black;"><strong>Kecamatan :</strong></label>
                            <input type="text" id="dom4" name="dom4" class="form-control " placeholder="Kecamatan" value=""  />
                        </div>

                        <div class="form-group mb-3">
                            <label for="dom5"style="color: black;"><strong>Kabupaten :</strong></label>
                            <input type="text" id="dom5" name="dom5" class="form-control " placeholder="Kabupaten" value=""  />
                        </div>

                        <div class="form-group mb-3">
                            <label for="propdomi"style="color: black;"><strong>Propinsi :</strong></label>
                            <input type="text" id="propdomi" name="propdomi" class="form-control " placeholder="Propinsi" value=""  />
                        </div>

                        <div class="form-group mb-3">
                            <label for="kodeposdomi"style="color: black;"><strong>Kode Pos :</strong></label>
                            <input type="text" id="kodeposdomi" name="kodeposdomi" class="form-control " placeholder="Kode Pos" value=""  />
                        </div>


                        <div class="form-group mb-3">
                            <div class="form-group">
                                <label for="tempatLahir"style="color: black;"><strong>Tempat Lahir</strong></label>
                            <div class="col">
                                <input type="text" id="tempatLahir" name="tempatLahir" class="form-control" placeholder="Tempat Lahir" value="" />
                            </div>
                        </div>
                   
                         <!-- <br> -->
                         <div class="form-group mb-3">
                            <div class="form-group">
                                <label for="tanggalLahir"style="color: black;"><strong>Tanggal Lahir (MM/DD/YYYY)</strong></label>
                                <label for="datepicker1" class="field prepend-icon">
                                    <input type="text" id="datepicker1" name="datepicker1" class="gui-input" placeholder="Datepicker Popup">
                                    <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                    </label>
                                </label>
                            <!-- <div class="col">
                                
                                <input type="text" id="tanggalLahir" name="tanggalLahir" class="form-control" value="" />
                                <script type="text/javascript">
                                    // $('input[name="tanggalLahir"]').daterangepicker(
                                    //     {
                                    //         singleDatePicker: true,
                                    //         showDropdowns: true,
                                            
                                    //     }
                                    // );
                                </script>
                            </div> -->
                        </div>

                        <div class="form-group mb-3">
                            <label for="agama" style="color: black;"><strong>Agama</strong></label>
                            <select id="agama" name="agama" class="form-control required" required>
                                <option value="LAKI-LAKI" selected>ISLAM</option>
                                <option value="Perempuan">BUDHA</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="sex" style="color: black;"><strong>Jenis Kelamin :</strong></label>
                            <select id="sex" name="sex" class="form-control required" required>
                                <option value="LAKI-LAKI" selected>LAKI-LAKI</option>
                                <option value="Perempuan">PEREMPUAN</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="negara"style="color: black;"><strong>Negara : </strong></label>
                            <input type="text" id="negara" name="negara" class="form-control" placeholder="" value="INDONESIA" readonly />
                        </div>


                        <div class="form-group mb-3">
                            <label for="statusperkawinan" style="color: black;"><strong>Status Perkawinan :</strong></label>
                            <select id="statusperkawinan" name="statusperkawinan" class="form-control " >
                                <option value="LAKI-LAKI" selected>Menikah</option>
                                <option value="Perempuan">Belum Kawin</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="pendidikan" style="color: black;"><strong>Pendidikan Terakhir :</strong></label>
                            <select id="pendidikan" name="pendidikan" class="form-control required" >
                                <option value="LAKI-LAKI" selected>S1</option>
                                <option value="Perempuan">D3</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="statusrumah" style="color: black;"><strong>Status Rumah : </strong></label>
                            <select id="statusrumah" name="statusrumah" class="form-control required" >
                                <option value="LAKI-LAKI" selected>Milik Sendiri</option>
                                <option value="Perempuan">Milik Keluarga</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="motherMaidenName"style="color: black;"><strong>Nama Ibu Kandung :</strong></label>
                            <input type="text" id="motherMaidenName" name="motherMaidenName" class="form-control" value="" placeholder="Nama Ibu Kandung"  />
                        </div>

                        <div class="section">
                            <label for="emial"style="color: black;"><strong>Email :</strong></label>
                            <label for="email" class="field prepend-icon">
                                <input type="email" name="email" id="email" class="gui-input" placeholder="Email">
                                <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                </label>
                            </label>
                        </div>

                        <div class="form-group mb-3">
                            <label for="alamat"style="color: black;"><h3><strong>Data Pekerjaan</strong></h3></label>
                        </div>

                        <div class="form-group mb-3">
                            <label for="namaperusahaan"style="color: black;"><strong>Nama Perusahaan :</strong></label>
                            <input type="text" id="namaperusahaan" name="namaperusahaan" class="form-control" value="" placeholder="Nama Perusahaan"  />
                        </div>
                        <!-- end section -->

                        <div class="form-group mb-3">
                            <label for="alamatPerusahaan"style="color: black;"><strong>Alamat Perusahaan</strong></label>    
                            <input type="text" id="alamatPerusahaan" name="alamatPerusahaan" class="form-control" value="" placeholder="Alamat Perusahaan" />                   
                        </div>

                        <div class="form-group mb-3">
                            <label for="rtperusahaan"style="color: black;"><strong>RT :</strong></label>    
                            <input type="text" id="rtperusahaan" name="rtperusahaan" class="form-control" value="" placeholder="RT" />                   
                        </div>

                        <div class="form-group mb-3">
                            <label for="rwperusahaan"style="color: black;"><strong>RW :</strong></label>    
                            <input type="text" id="rwperusahaan" name="rwperusahaan" class="form-control" value="" placeholder="RW" />                   
                        </div>

                        <div class="form-group mb-3">
                            <label for="kelurahanperusahaan"style="color: black;"><strong>Kelurahan :</strong></label>    
                            <select id="kelurahanperusahaan" name="kelurahanperusahaan" class="form-control required" >
                                <option value="LAKI-LAKI" selected>SETIABUDI</option>
                                <option value="Perempuan">TANJUNG DUREN</option>
                            </select>                  
                        </div>

                        <div class="form-group mb-3">
                            <label for="kecamatanperusahaan"style="color: black;"><strong>KECAMATAN :</strong></label>    
                            <select id="kecamatanperusahaan" name="kecamatanperusahaan" class="form-control required" >
                                <option value="LAKI-LAKI" selected>SETIABUDI</option>
                                <option value="Perempuan">KEBON JERUK</option>
                            </select>                  
                        </div>

                        <div class="form-group mb-3">
                            <label for="kabupatenperusahaan"style="color: black;"><strong>KABUPATEN :</strong></label>    
                            <select id="kabupatenperusahaan" name="kabupatenperusahaan" class="form-control required" >
                                <option value="LAKI-LAKI" selected>JAKARTA BARAT</option>
                                <option value="Perempuan">JAKARTA SELATAN</option>
                            </select>                  
                        </div>

                        <div class="form-group mb-3">
                            <label for="propinsiperusahaan"style="color: black;"><strong>Propinsi :</strong></label>    
                            <select id="propinsiperusahaan" name="propinsiperusahaan" class="form-control required" >
                                <option value="LAKI-LAKI" selected>DKI JAKARTA</option>
                                <option value="Perempuan">JAWA BARAT</option>
                            </select>                  
                        </div>

                        <div class="form-group mb-3">
                            <label for="kodeposperusahaan"style="color: black;"><strong>Kode Pos :</strong></label>    
                            <input type="text" id="kodeposperusahaan" name="kodeposperusahaan" class="form-control" value="" placeholder="Kode Pos" />                   
                        </div>

                        <div class="section">
                            <label for="teleponperusahaan"style="color: black;"><strong>No.Telepon :</strong></label>
                            <label for="teleponperusahaan" class="field prepend-icon">
                                <input type="tel" name="teleponperusahaan" id="teleponperusahaan" class="gui-input" placeholder="Telepon">
                                <label for="mobile" class="field-icon"><i class="fa fa-phone-square"></i>
                                </label>
                            </label>
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="jobPositionCode"style="color: black;"><strong>Pekerjaan :</strong></label>
                            <select id="jobPositionCode" name="jobPositionCode" class="form-control form-control-lg required">
                            <!-- <option value="<//?php echo $kdoccupation; ?>"><//?php echo $occupation; ?></option> -->
                            <!-- <//?php foreach ($reffPEKERJAAN as $rowx) { ?> -->
                                <option value="1">Wiraswasta</option>
                                <option value="2">Pegawai Swasta</option>
                            <!-- <.?php } ?> -->
                        
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="bidangusaha"style="color: black;"><strong>Bidang Usaha :</strong></label>
                            <select id="bidangusaha" name="bidangusaha" class="form-control form-control-lg required">
                            <!-- <option value="<//?php echo $kdoccupation; ?>"><//?php echo $occupation; ?></option> -->
                            <!-- <//?php foreach ($reffPEKERJAAN as $rowx) { ?> -->
                                <option value="1">Finance</option>
                                <option value="2">Komunikasi</option>
                            <!-- <.?php } ?> -->
                        
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="jabatan"style="color: black;"><strong>Jabatan :</strong></label>
                            <select id="jabatan" name="jabatan" class="form-control form-control-lg required">
                            <!-- <option value="<//?php echo $kdoccupation; ?>"><//?php echo $occupation; ?></option> -->
                            <!-- <//?php foreach ($reffPEKERJAAN as $rowx) { ?> -->
                                <option value="1">Manager</option>
                                <option value="2">CEO</option>
                            <!-- <.?php } ?> -->
                        
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="alamat"style="color: black;"><h3><strong>Data Keuangan</strong></h3></label>
                        </div>

                        <div class="form-group mb-3">
                            <label for="pembukanrekening"style="color: black;"><strong>Tujuan Pembukaan Rekening : </strong></label>
                            <select id="pembukanrekening" name="pembukanrekening" class="form-control form-control-lg required">
                            <!-- <option value="<//?php echo $kdoccupation; ?>"><//?php echo $occupation; ?></option> -->
                            <!-- <//?php foreach ($reffPEKERJAAN as $rowx) { ?> -->
                                <option value="1">Manager</option>
                                <option value="2">CEO</option>
                            <!-- <.?php } ?> -->
                        
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="sumberdana"style="color: black;"><strong>Sumber Dana :</strong></label>
                            <select id="sumberdana" name="sumberdana" class="form-control form-control-lg required">
                            <!-- <option value="<//?php echo $kdoccupation; ?>"><//?php echo $occupation; ?></option> -->
                            <!-- <//?php foreach ($reffPEKERJAAN as $rowx) { ?> -->
                                <option value="1">GAJI</option>
                                <option value="2">ORANG TUA</option>
                            <!-- <.?php } ?> -->
                        
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="pengguanaandana"style="color: black;"><strong>Tujuan Penggunan Dana :</strong></label>
                            <select id="pengguanaandana" name="pengguanaandana" class="form-control form-control-lg required">
                            <!-- <option value="<//?php echo $kdoccupation; ?>"><//?php echo $occupation; ?></option> -->
                            <!-- <//?php foreach ($reffPEKERJAAN as $rowx) { ?> -->
                                <option value="1">Manager</option>
                                <option value="2">CEO</option>
                            <!-- <.?php } ?> -->
                        
                            </select>
                        </div>
                    </section>

<!-- --------------------------------------Kirim Data-------------------------------------------------------------------------------------------------------------->

                    <!-- Wizard step 4 -->
                    <h4 class="wizard-section-title"><i class="fa fa-shopping-cart pr5"></i> Kirim Data</h4>
                    <section class="wizard-section">

                        <div class="p25 br-b">
                            <strong><b><h2 class="fw200 mb10 mt10 text-center">REVIEW DATA NASABAH</h2></b></strong>
                        </div>


                        <div class="mb-3">
                            <label for="alamat"style="color: black;"><strong><h3><u>Informasi Data Utama</u></h3></strong></label>
                        </div>

                        <div class="p25 br-b">
                            
                                <div class ="col-md-4" style="text-align: left;">
                                    <label for="address1"style="color: black;"><strong>Nama Lengkap (Sesusai KTP) :</strong></label>
                                </div>
                                <div class ="col-md-8" style="text-align: left;">
                                    <strong>DENNIS TRIYANDA PUTRA</strong>
                                </div>
                            
                        </div>

                        <div class="p25 br-b">
                            
                                <div class ="col-md-4" style="text-align: left;">
                                    <label for="address1"style="color: black;"><strong>Gelar :</strong></label>
                                </div>
                                <div class ="col-md-8" style="text-align: left;">
                                    <strong>DOCTOR</strong>
                                </div>
                            
                        </div>

                        <div class="p25 br-b">
                           
                                <div class ="col-md-4" style="text-align: left;">
                                    <label for="address1"style="color: black;"><strong>Alamat sesuai bukti identitas :</strong></label>
                                </div>
                                <div class ="col-md-8" style="text-align: left;">
                                    <strong>Jl. Sadewa No.47 Kav Blok E</strong>
                                </div>
                            
                        </div>

                        <div class="p25 br-b">
                            
                                <div class ="col-md-4" style="text-align: left;">
                                    <label for="address1"style="color: black;"><strong>RT/RW :</strong></label>
                                </div>
                                <div class ="col-md-8" style="text-align: left;">
                                    <strong>015/005</strong>
                                </div>
                           
                        </div>

                        <div class="p25 br-b">
                            
                                <div class ="col-md-4" style="text-align: left;">
                                    <label for="address1"style="color: black;"><strong>Kelurahan :</strong></label>
                                </div>
                                <div class ="col-md-8" style="text-align: left;">
                                    <strong>CIWADUK</strong>
                                </div>
                            
                        </div>

                        <div class="p25 br-b">
                            
                                <div class ="col-md-4" style="text-align: left;">
                                    <label for="address1"style="color: black;"><strong>Kecamatan :</strong></label>
                                </div>
                                <div class ="col-md-8" style="text-align: left;">
                                    <strong>CILEGON</strong>
                                </div>
                            
                        </div>


                        <div class="p25 br-b">
                            
                                <div class ="col-md-4" style="text-align: left;">
                                    <label for="kodepos"style="color: black;"><strong>Kabupaten :</strong></label>
                                </div>
                                <div class ="col-md-8" style="text-align: left;">
                                    <strong>CILEGON</strong>
                                </div>
                            
                        </div>

                        <div class="p25 br-b">
                            
                                <div class ="col-md-4" style="text-align: left;">
                                    <label for="kodepos"style="color: black;"><strong>Propinsi :</strong></label>
                                </div>
                                <div class ="col-md-8" style="text-align: left;">
                                    <strong>BANTEN</strong>
                                </div>
                            
                        </div>

                        <div class="p25 br-b">
                            
                                <div class ="col-md-4" style="text-align: left;">
                                    <label for="kodepos"style="color: black;"><strong>Kode Pos :</strong></label>
                                </div>
                                <div class ="col-md-8" style="text-align: left;">
                                    <strong>112233</strong>
                                </div>
                            
                        </div>

                        <div class="p25 br-b">
                            
                                <div class ="col-md-4" style="text-align: left;">
                                    <label for="address1"style="color: black;"><strong>Alamat Saat Ini :</strong></label>
                                </div>
                                <div class ="col-md-8" style="text-align: left;">
                                    <strong>Jl. Sadewa No.47 Kav Blok E</strong>
                                </div>
                            
                        </div>

                        <div class="p25 br-b">
                           
                                <div class ="col-md-4" style="text-align: left;">
                                    <label for="address1"style="color: black;"><strong>RT/RW :</strong></label>
                                </div>
                                <div class ="col-md-8" style="text-align: left;">
                                    <strong>015/005</strong>
                                </div>
                            
                        </div>

                        <div class="p25 br-b">
                            
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="address1"style="color: black;"><strong>Kelurahan :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>CIWADUK</strong>
                            </div>
                            
                        </div>


                        <div class="p25 br-b">
                            
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="address1"style="color: black;"><strong>Kecamatan :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>CILEGON</strong>
                            </div>
                            
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Kabupaten :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>CILEGON</strong>
                             </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Propinsi :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>BANTEN</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Kode Pos :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>112233</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Tempat Lahir :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>BANTEN</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Tanggal Lahir :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>05-01-1992</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Agama :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>ISLAM</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Jenis Kelamin :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>LAKI-LAKI</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Negara :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>INDONESIA</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Nomor Identitas :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>3221029203930293</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                        
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Status Perkawinan :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>MENIKAH</strong>
                            </div>
                            
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Pendidikan Terakhir :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>S1</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos" style="color: black;"><strong>Status Rumah :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>MILIK SENDIRI</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos" style="color: black;"><strong>Nama Ibu Kandung :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>SURYANI</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos" style="color: black;"><strong>Email :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>dennis@gmail.com</strong>
                            </div>
                        </div>

                        <br/>

                        <div class="mb-3">
                            <label for="alamat"style="color: black;"><strong><h3><u>Data Pekerjaan</u></h3></strong></label>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos" style="color: black;"><strong>Nama Perusahaan :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>PT Banten FC</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos" style="color: black;"><strong>Alamat Perusahaan :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>BANTEN</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>RT :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>013</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos" style="color: black;"><strong>RW :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>007</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Kelurahan :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>CIWADUK</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Kecamatan :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>CILEGON</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Kabupaten :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>CILEGON</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Propinsi :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>BANTEN</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos" style="color: black;"><strong>Kode Pos :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>123456</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos" style="color: black;"><strong>No.Telepon :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>021001012</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos" style="color: black;"><strong>Pekerjaan :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>MEMANCING</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos" style="color: black;"><strong>Bidang Usaha :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>KOMUNIKASI</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos" style="color: black;"><strong>Jabatan :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>MANAGER</strong>
                            </div>
                        </div>
                        <br/>

                        <div class="mb-3">
                            <label for="alamat"style="color: black;"><strong><h3><u>Data Keuangan</u></h3></strong></label>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos" style="color: black;"><strong>Tujuan Pembukaan Rekening :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>PERLU</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Sumber Dana :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>GAJI</strong>
                            </div>
                        </div>

                        <div class="p25 br-b">
                            <div class ="col-md-4" style="text-align: left;">
                                <label for="kodepos"style="color: black;"><strong>Tujuan Penggunan Dana :</strong></label>
                            </div>
                            <div class ="col-md-8" style="text-align: left;">
                                <strong>SHOPING</strong>
                            </div>
                        </div>
                       
                        

                        <!-- <div class="section">
                            <label for="email" class="field prepend-icon">
                                <input type="email" name="email" id="email" class="gui-input" placeholder="Email address" disabled>
                                <label for="email" class="field-icon"><i class="fa fa-envelope"></i>
                                </label>
                            </label>
                        </div> -->
                        <!-- end section -->

                        <!-- <div class="section">
                            <label for="mobile" class="field prepend-icon">
                                <input type="tel" name="mobile" id="mobile" class="gui-input" placeholder="Telephone / moble number" disabled>
                                <label for="mobile" class="field-icon"><i class="fa fa-phone-square"></i>
                                </label>
                            </label>
                        </div> -->
                        <!-- end section -->

                    </section>                    
                </div>
                <!-- End: Wizard -->

            </form>
            <!-- End Account2 Form -->

        </div>
        <!-- end: .admin-form -->
      </div>

    </section>

    <style>    
        /*page demo styles*/
        .wizard .steps .fa,
        .wizard .steps .glyphicon,
        .wizard .steps .glyphicon {
            display: none;
        }
    </style>

    <style>
        /*dropzone demo css*/
        .dz-demo .dz-message {
            opacity: 0 !important;
        }
        .dropzone .dz-preview.example-preview .dz-success-mark,
        .dropzone-previews .dz-preview.example-preview .dz-success-mark {
            opacity: 1;
        }
        .dropzone .dz-preview.example-preview .dz-error-mark,
        .dropzone-previews .dz-preview.example-preview .dz-error-mark {
            opacity: 0;
        }
    </style>

    <!-- BEGIN: PAGE SCRIPTS -->
    <!-- jQuery -->
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/jquery/jquery-1.11.1.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/jquery/jquery_ui/jquery-ui.min.js') !!}"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="{!! asset('admindesigns/assets/js/bootstrap/bootstrap.min.js') !!}"></script>

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

    
    <!-- END: PAGE SCRIPTS -->    
  </body>
</html>
