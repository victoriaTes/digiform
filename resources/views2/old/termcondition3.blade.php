<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>E-Form | Pembukaan Rekening Online</title>
        <link rel="icon" type="image/png" href="{!! asset('images/bvic-logo.ico') !!}">

        <!-- Font CSS (Via CDN) -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

        <!-- Theme CSS -->
        <link rel="stylesheet" type="text/css" href="{!! asset('admindesigns/assets/skin/default_skin/css/theme.css') !!}">

        <style>
            .vertical-scrollable>.row {
                position: absolute;
                top: 120px;
                bottom: 120px;
                justify: 180px;
                width: 80%;
                overflow-y: scroll;
            }
            .col-sm-8 {
                color: white;
                font-size: 24px;
                padding-bottom: 20px;
                padding-top: 18px;
            }
            .col-sm-8:nth-child(2n+1) {
                background: green;
            }
            .col-sm-8:nth-child(2n+2) {
                background: black;
            }
        </style>

        <style>
            .my-custom-scrollbar {
            position: relative;
            height: 850px;
            overflow-y: scroll;
            width: 80%;
            }
            .table-wrapper-scroll-y {
            display: block;
            }

            
        </style>
    </head>

    <body class="faq-page">

        <!-- Start: Main -->
        <div id="main">

        
            <!-- Start: Content-Wrapper -->
            <section id="content_wrapper">

                <!-- Begin: Content -->
                <section id="content" class="animated fadeIn">

                    <div class="row mt10">
                        <div class="col-md-10">
                            <div class="panel br-t bw5 br-danger mn">
                                <div class="panel-heading hidden">
                                    <span class="panel-icon"><i class="fa fa-pencil"></i>
                                    </span>
                                    <span class="panel-title"> Title</span>
                                </div>

                                <div class="panel-body pn">
                                    <div class="p25 br-b">
                                        <h2 class="fw200 mb10 mt10 text-center">SYARAT-SYARAT DAN KETENTUAN UMUM</h2>
                                    </div>
                                    <div>
                                        <center>
                                            <div class="table-wrapper-scroll-y my-custom-scrollbar">
                                                <!-- <div class="row text-center"> -->
                                                <form class="form-horizontal" method="post" action="{{ route('unggahfoto') }}" role="form">
                                                    @csrf
                                                    <table>
                                                        <!-- <tr>
                                                            <td width="5%"></td>
                                                            <td colspan="3" width="90%" style="text-align: justify;">
                                                                Syarat dan Ketentuan ini mengatur penggunaan dan akses Nasabah terhadap Victoria Mobile dan Victoria IB Retail. Dengan mengakses atau menggunakan Victoria Mobile dan Victoria IB Retail, Nasabah setuju dan mengikatkan diri untuk mematuhi “Syarat dan Ketentuan Victoria Mobile dan Victoria IB Retail” (selanjutnya disebut “Syarat dan Ketentuan”) serta “Kebijakan Privasi Victoria Mobile dan Victoria IB Retail” yang tertera pada halaman yang berbeda. Syarat dan Ketentuan ini juga berlaku setiap kali Nasabah mengakses, bertransaksi serta menggunakan seluruh fitur dalam Victoria Mobile dan Victoria IB Retail.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr> -->
                                                        
                                                        <tr>
                                                            <td width="5%">
                                                                <b>I. </b>
                                                            </td>
                                                            <td colspan="5" width="88%" >
                                                                <b>DATA NASABAH/CUSTOMER IDENTIFICATION (CIF)</b>
                                                            </td>
                                                            
                                                            <td width="2%">
                                                                
                                                            </td>
                                                            
                                                            <td width="5%"></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">1. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Untuk keperluan aplikasi pembukaan rekening di Bank, Nasabah wajib memberikan data dan dokumen yang dipersyaratkan oleh Bank.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">2. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank berhak meminta informasi dan dokumen pendukung seda mengadminiskasikan data profile Nasabah   sesuai   dengan   kebutuhan dan peraturan perundang-undangan yang berlaku.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">3. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Nasabah menjamin bahwa semua dokumen dan keterangan yang diberikan kepada Bank adalah benar, lengkap, asli sah dan sesuai dengan peraturan perundang-undangan yang berlaku.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">4. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Data{Nasabah  (antara lain alamat, nomer telepon  rumah/kantor/ponsel) yang  dipergunakan  Bank adalah alamat dan nomer telepon yang tercatat terakhir di Bank.                                              
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">5. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Nasabah wajib memberitahukan dan menyampaikan perubahan data kepada Bank apabila terdapat perubahan data dan perubahan tersebut hanya berlaku jika pemberitahuan tersebut telah diterima dan/atau disetujui oleh Bank.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><br/></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="3%">
                                                                <b>II. </b>
                                                            </td>
                                                            <td colspan="5" width="88%" >
                                                                <b>KETENTUAN UMUM PRODUK DAN FASILIITAS</b>
                                                            </td>
                                                            <td width="2%">
                                                                
                                                            </td>
                                                            
                                                            <td width="2%">
                                                                
                                                            </td>
                                                            
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="2%"></td>
                                                            <td width="3%">
                                                                <b>A. </b>
                                                            </td>
                                                            <td colspan="2" width="88%" style="text-align: justify;">
                                                                <b>Umum</b>
                                                            </td>
                                                            <td width="2%">
                                                                
                                                            </td>
                                                            
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">1. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Pemegang Rekening bersedia memberikan atau informasi/dokumen tambahan kepada Bank bila Bank membutuhkan sesuai dengan ketentuan perundang-undangan yang berlaku.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">2. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Pemegang Rekening rnenyatakan bahwa dana yang disetorkan/dipergunakan/diransaksikan di PT. Bank Vicloria lnternational Tbk, tidak berasal dari/untuk tujuan tindak pidana pencucian uang (money laundering diransaksikan di PT. Bank Vicloria lnternational Tbk, tidak berasal dari/untuk tujuan tindak pidana pencucian uang (money laundering) sebagaimana dimaksud dalam UU. 8 tahun 2010 tentang Pencegahan dan Pemberantasan Tindak Pidana Pencucian        Uang berikut perubahan-perubahannya. Apabila ada indikasi pencucian uang tersebut, maka Bank berhak menolak memproses transaksi dan menindaklanjuti serta memblokir dana tersebut tanpa atau atas permintaan pejabat/instansi yang berwenang.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">3. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Penerimaan dana dianggap efektif jika telah dibukukan Bank dalam rekening tersebut.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">4. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Penarikan dari rekening valuta asing dikenakan komisi yang berlaku di Bank, dan jika tidak tersedia mala uang sesuai rekening maka dapat dibayarkan dengan mata uang lainnya.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">5. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Penyetoran atau penarikan dana dengan menggunakan mata uang berbeda dari rekening akan dikonversikan dengan menggunakan kurs/beli yang sedang berlaku di Bank pada hari konversi.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">6. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank berhak untuk menolak mengkreditkan atau membukukan  pada  rekening atas kiriman uang yang dimaksudkan bagi Pemegang Rekening  jika  ada  ketidak-jelasan atau kekeliruan dari data yang diterima Bank
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">7. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank berhak menolak melaksanakan transaksi yang diminta jika pertimbangan Bank tanda tangan yang tercantum berbeda dengan contoh/specimen yang ada di Bank, tulisan atau keterangan pada Cek atau Bilyet Giro tidak jelas atau tidak lengkap atau karena rekening diblokir atau dijaminkan atau dalam sengketa, pencairan deposito tanpa Bilyet Deposito asli, dana belum tersedla di rekening,
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">8. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank berhak menentukan berdasarkan perundangan yang berlaku untuk menerima atau menolak melaksanakan permintaan transaksi yang dilakukan berdasarkan perlanjian pemberian kuasa dari Nasabah atau Pemegang Rekening.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">9. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Perintah untuk menjalankan transaksi yang telah diterima Bank, sepanjang menurut pertimbangan Bank ditandatangani sesuai dengan contoh/specimen pada Bank dan telah memenuhi ketentuan yang berlaku, akan dijalankan oleh Bank tanpa melakukan konfirmasi lebih dulu kepada Pemegang Rekening.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">10. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Pemegang Rekening terikat pada perintah transaksi yang telah dibuat  sehubungan dengan rekeningnya dan tidak dapat meminta kepada Bank untuk membatalkan perintah yang telah dijalankan oleh Bank, baik sebagian atau seluruhnya. Dalam hal pengiriman uang, Bank hanya dapat membatalkannya sepanjang telah diperoleh persetujuan dari penerima dana.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">11. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Dalam hal Pemegang Rekening meninggal dunia atau berada di bawah pengampunan atau pailit atau likuidasi atau merger maka hak  kewajibannya  beralih kepada para ahli waris atau walinya atau penerus haknya. Untuk itu kepada Bank harus ditunjukkan keterangan waris atau ketetapan wali dan atau dokumen lain terkait, sesuai dengan hukum yang berlaku.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">12. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank akan membebani pajak penghasilan atas bunga yang diterima rekening, serta pajak atau biaya lain yang ditetapkan pihak yang berwenang sesuai dengan ketentuan yang berlaku.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">13. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bila terjadi perbedaan perhitungan saldo antara Bank dengan Pemegang Rekening, maka para pihak setuju bahwa perhitungan Bank yang dinyatakan benar dan sah.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">14. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Pemegang   Rekening   bersedia menerima risiko atas simpanannya sebagai simpanan yang tidak layak dibayar apabila menerima tingkat bunga melebihi tingkat bunga yang ditetapkan LPS.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">15. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank berhak  dan  telah  diberi wewenang untuk itu oleh Pemegang Rekening, untuk melakukan koreksi, mendebet atau melakukan hal lain yang dianggap perlu, atau rekening atau saldo rekening, jika tejadi kekeliruan transaksi atau perhitungan, atau kesalahan operasional atau hal lain yang memerlukan koreksi dengan pemberitahuan kepada Nasabah atau Pemegang Rekening.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">16. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Pemegang Rekening bertanggung jawab sepenuhnya atas segala sesuatu menyangkut rekening tersebut, serta nomor kode rahasia unluk melakukan transaksi melalui ATM, agar tidak dipergunakan oleh pihak lain manapun. Penggunaan oleh pihak yang tidak berhak dan segala akibat dan kerugian yang timbul tetap merupakan tanggung jawab dan resiko Pemegang Rekening sendiri.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">17. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Pemegang Rekening harus segera pada kesempatan pertama memberitahukan kepada Bank disertai Laporan Kehilangan dari Kepolisian setempat yang asli, jika Buku Cek/Bilyet Giro, Biyet Deposito, Buku Tabungan atau Kartu ATIM hilang/dicuri.  Atas pertimbangan Bank, Bank dapat menerbitkan penggantinya dengan mengenakan biaya.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">18. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank dibebaskan dari tanggung jawab aias keteledoran atau kecerobohan dan/atau penggunaan secara melawan hak, pemalsuan, penyalahgunaan segala akibat yang timbul karena kehilangan atas Buku Tabungan,  Buku Cek/Bilyet Giro, Bilyet Deposito, Kartu ATM, PIN ATM dan bukti kepemilikan lainnya yang berhubungan dengan jenis rekening yang dimiliki oleh Pemegang Rekening.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">19. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank diberi persetujuan dan kuasa dari Pemegang Rekening untuk nnemberi keterangan, informasi atau data Pemegang Rekening, memblokir, menyerahkan atau mendebet, atas permintaan  instansi  yang berwenang atau pihak lain guna memenuhi ketentuan hokum yang berlaku dengan pemberitahuan kepada Nasabah atau Pemegang Rekening.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">20. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Pemegang Rekening menyetujui lindakan Bank untuk memberikan informasi kepada Pemegang Rekening mengenai penawaran  atau  penyediaan jasa dari pihak lain, baik secara lisan  maupun  tertulis  atau media elektronik.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">21. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank  berhak  dan  diberi  kuasa oleh Pemegang Rekening untuk memblokir keluar atas saldo rekening jika ada pihak yang menyatakan memiliki atau ikut memiliki atas saldo tersebut atau sedang terjadi sengketa atau	rekening atau saldo rekening atau antara para Pemegang Rekening atau antara pihak yang mengaku sebagai ahli waris Pemegang Rekening atau antara pengurus pemilik Badan Usaha, hal mana semata-mata atas pertirnbangan Bank sendiri dengan pemberitahuan kepada Nasabah atau Pemegang Rekening.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">22. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank berhak untuk melakukan perjumpaan hutang atau offset antara saldo rekening dengan kewajiban Pemegang Rekening kepada Bank. Untuk itu Pemegang Rekening memberi kuasa kepada Bank untuk mendebet saldo rekening dengan pemberitahuan kepada Nasabah atau Pemegang Rekening.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">23. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Penutupan rekening dapat dilakukan Bank sewaktu-waktu, jika  terdapat keterangan atau dokumen yang diduga palsu atau Pemegang Rekening melanggar ketentuan rekening ini atau peraturan yang berlaku atau rekening tidak aktif atau masuk dalam Daflar Hitam Bank lndonesia atas pertimbangan Bank sendiri dengan pemberitahuan kepada Nasabah atau Pemegang Rekening.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">24. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Terkait dengan penutupan rekening butir 22 dan 23 Bank akan mengembalikan sisa saldo rekening setelah dipotong dengan kewajiban Pemegang Rekening, dengan meminta Pemegang Rekening untuk mengambil sendiri di Kantor Bank.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">25. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Segala korespondensi kepada Pemegang Rekening akan ditujukan kepada alamat yang tercatat di Bank. Perubahan alamat tidak berlaku jika pemberitahuannya secara tertulis berikut bukti pendukungnya belum diterima Bank, dan segala akibatnya tidak menjadi tanggung jawab Bank.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">26. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Pengakhiran syara-syarat dan ketentuan umum ini mengesampingkan pasal 1266 & 1267 KHUPerdata yaitu sepanjang menyangkut diperlukannya putusan pengadilan untuk mengakhiri syarat-syarat dan ketentuan umum ini.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">27. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Apabila di kemudian hari diketahui bahwa dokumen yang dberikan kepada Bank adalah palsu atau tidak benar antara lain dan tidak terbatas pada KTP, NPWP, Akta Pendirian Perusahaan, Domisili, SIUP, TDP serta tidak sesuai dengan ketentuan Penerapan Program Anti Pencucian Uang dan Pencegahan Pendanaan Terorisme (APU FPT) serta rekeningnya diduga digunakan untuk transaksi penipuan dan/atau menampung hasil kejahatan maka Bank diberi kuasa untuk memblokir/menutup rekening.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">28. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Dalam hal ditetapkan Kebijakan Bank untuk merubah status kantor atau menutup atau memindahkan Kantor Bank dimana rekening tercatat, maka Bank akan memindahkan pencatatan rekening tersebut pada kantor yang ditunjuk Bank dengar pemberitahuan kepada Nasabah atau Pemegang Rekening.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">29. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Dalam hal terjadi penggabungan alau merger pada Bank, maka Pemegang Rekening tunduk pada peraturan-peraturan yang ditetapkan Bank atas hasil rekening yang bersangkutan dengan pemberitahuan kepada Nasabah atau Pemegang Rekening.
                                                                <br/>
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td><br/></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="2%"></td>
                                                            <td width="3%">
                                                                <b>B. </b>
                                                            </td>
                                                            <td colspan="2" width="88%" style="text-align: justify;">
                                                                <b>Tabungan</b>
                                                            </td>
                                                            <td width="2%">
                                                                
                                                            </td>
                                                            
                                                            <td width="5%"></td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">1. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Sebagai bukti menabung, Bank menerbitkan Buku Tabungan dan Kartu ATM dan bukti tersebut harus dipegang/disimpan Nasabah.
                                                                <br/>
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">2. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Untuk pembukaan tabungan, Nasabah harus melakukan setoran sebesar minimum norminal yang dipersyaratkan sesuai jenis tabungannya.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">3. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Batas minimum dan tata cara setoran berikutnya ke Rekening Tabungan ditetapkan sesuai jenis tabungannya. Dalam hal penyetoran ditetapkan dengan cara pemindahbukuan secara otomatis setiap bulan dari rekening Nasabah lainnya (rekening afiliasi) maka Nasabah dengan ini memberi kuasa kepada Bank untuk melakukan pendebetan secara langsung rekening Nasabah  setiap  bulan  pada  tanggal dan jumlah yang telah ditentukan.</td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">4. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Nasabah wajib memelihara saldo minimal yang dipersyaratkan oleh Bank sesuai dengan jenis tabungannya. Apabila saldo Tabungan di bawah saldo minimum maka Nasabah akan dikenakan denda sesuai ketentuan yang berlaku.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">5. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                <p>Catatan transaksi rekening menggunakan Buku Tabungan yang mutasinya dapat selalu dilakukan update (dicetak) oleh Nasabah atau Pemegang Rekening.</p>
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">6. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank berhak mengubah status Rekening dari Rekening berstatus Aktif menjadi Rekening berstatus Tidak Aktif (Dormant) apabila pada Rekening tidak ada aktivitas transaksi perbankan yang dilakukan oleh Nasabah selama 6 (enam) bulan berturut-turut.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td><br/></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="2%"></td>
                                                            <td width="3%">
                                                                <b>C. </b>
                                                            </td>
                                                            <td colspan="2" width="88%" style="text-align: justify;">
                                                                <b>Giro</b>
                                                            </td>
                                                            <td width="2%">
                                                                
                                                            </td>
                                                            
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">1. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Untuk pembukaan Giro, Nasabah harus melakukan setoran sebesar minimum nominal Giro yang dipersyaratkan dan menandatangani syarat dan ketentuan serta perjanjian tersendiri.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">2. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank akan menerbitkan laporan berkala berupa Rekening Koran (RK) mengenai mutasi transaksi rekening Nasabah.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">3. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Nasabah wajib memelihara saldo minimal yang dipersyaratkan oleh Bank. Apabila saldo Giro dibawah saldo minimum maka Nasabah atau Pemegang Rekening akan dikenakan denda.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">4. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Nasabah bersedia mematuhi ketentuan-ketentuan yang mengatur mengenai penandatanganan Cek/Bilyet Giro, pelunasan bea materai serta ketentuan lain yang mengatur mengenai Cek/Bilyet Giro.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">5. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Nasabah dengan ini menyatakan bersedia hak penggunaan Cek/Bilyet Gironya dibekukan dan/atau rekeningnya ditutup dan/atau namanya dimasukan dalam Daftar Hitam Nasional (DHN), apabila Nasabah melakukan pelanggaran terhadap ketentuan Bank Indonesia tentang penarikan Cek/Bilyet Giro Kosong.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">6. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Nasabah membebaskan Bank dari segala tuntutan atas setiap konsekuensi Hukum yang timbul akibat penarikan Cek/Bilyet Giro Kosong sesuai ketentuan yang berlaku.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">7. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Penutupan rekening atas permintaan Nasabah dengan mengisi dan menandatangani formulir penutupan rekening, menyelesaikan kewajiban Nasabah atau Pemilik Rekening terhadap Bank, mengembalikan seluruh sisa Cek/Bilyet Giro dan memastikan bahwa tidak terdapat Cek/Bilyet Giro yang masih beredar dengan mengisi dan menandatangani Surat Pernyataan Penutupan Rekening Giro.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">8. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank dapat membuka salah satu atau lebih dari satu relening alas permintaan orang-orang atau badan hukum. Bank juga mempunyai hak dengan tidak memberi alasan untuk menolak pembukaan rekening.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">9. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Penutupan rekening atas permintaan Nasabah dengan mengisi dan menandatangani formulir penutupan rekening, menyelesaikan kewajiban Nasabah atau Pemilik Rekening terhadap Bank, mengembalikan seluruh sisa Cek/Bilyet Giro dan memastikan bahwa tidak terdapat Cek/Bilyet Giro yang masih beredar dengan mengisi dan menandatangani Surat Pernyataan Penutupan Rekening Giro.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="2%" valign="top">10. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Perubahan nama, kedudukan, alamat atau perubahan-perubahan lain yang 1erjadi pada Pemilik Rekening hanus diberitahukan pada Bank secara tertulis. Dalam hal-hal demikian Bank tidak akan menanggung kerugian apapun juga akibat kelalaian Pemilik Rekening untuk memberitahukan kejadian-kejadian itu.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">11. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank berhak untuk menetapkan dan merubah tingkat bunga, cara menghitung bunga dan biaya-biaya lainnya sehubungan dengan rekening ini. Bank setiap bulan akan menginimkan salinan rekerning tetapi berhak untuk tidak menginimkannya jjka Bank menganggap perlu.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">12. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bila diketahui terdapat keterangan alau identitas palsu darn Pemiik Rekening maka Bank berhak dan diberi kuas.a untuk melakukan tindakan yang dianggap perlu.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">13. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Rekening Gabungan 
                                                            </td>
                                                            <td width="3%" ></td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <!-- <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" ></td>
                                                            <td width="1%" valign="top">
                                                                13.1 
                                                            </td>
                                                            <td style="text-align: left;">
                                                                Rekening Gabungan dengan bentuk “or” maka :
                                                            </td>
                                                             -->
                                                        <!-- </tr> -->

                                                        <tr>
                                                            <td><br/></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="2%"></td>
                                                            <td width="3%">
                                                                <b>D. </b>
                                                            </td>
                                                            <td colspan="2" width="88%" style="text-align: justify;">
                                                                <b>Deposito</b>
                                                            </td>
                                                            <td width="2%">
                                                                
                                                            </td>
                                                            
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">1. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Untuk pembukaan Deposito, Nasabah harus melakukan setoran sebesar minimum nominal Deposito yang dpersyaratkan.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">2. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bukti kepemilikan rekening Deposito adalah Bilyet Deposito atau bentuk lain yang ditentukan oleh Bank.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">3. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bilyet Deposito tidak dapat dipindahtangankan.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">4. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Deposito dapat diperpanjang secara otomatis sesuai permintaan Nasabah dengan tingkat suku bunga yang berdaku pada saat perpanjangan.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">5. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Deposito hanya dapat dicairkan pada saat jatuh tempo, dan pencairan Deposito sebelum jatuh tempo dikenakan denda sesuai ketentuan yang berlaku.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">6. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Nasabah harus memberitahukan kepada Bank paling lambat 7 (tujuh) hari kerja sebelum jatuh tempo apabila menghendaki pencairan deposito yang diperpanjang secara otomatis.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">7. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bea Meterai yang timbul pada saat penerbitan maupun secara pencairan Deposito menjadi beban Nasabah
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">8. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Nasabah bersedia menerima risiko atas simpanannya sebagai simpanan yang tidak layak dibayar apabila jumlah nominal simpanannya dan tingkat bunga yang diterima melebihi tingkat bunga yang ditetapkan oleh LPS.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">9. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Insentif yang diterima oleh Nasabah akan dipersamakan dengan biaya bunga, sehingga apabila yang diterima oleh Nasabah melebihi dar suku bunga yang ditetapkan LPS, maka akan mengikuti ketentuan yang ditetapkan oleh LPS.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td><br/></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%">
                                                                <b>III. </b>
                                                            </td>
                                                            <td colspan="5" width="88%" style="text-align: justify;">
                                                                <b>TRANSAKSI</b>
                                                            </td>
                                                            
                                                            <td width="2%">
                                                                
                                                            </td>
                                                            
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">1. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Dana yang disetorkan/dipergunakan/ditransaksikan pada Bank tidak berasal dari/untuk tujuan tindakan pidana pencucian uang (money laundring).
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">2. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Setiap transaksi yang menggunakan surat berharga/warkat kliring dan sarana perbankan lainnya berlaku pula ketentuan perundang-undangan yang mengatur tentang hal tersebut.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">3. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Nasabah bertanggung jawab atas keamanan perintah transaksi/surat berharga yang diberikan oleh dan kepada Bank termasuk penyalahgunaan, pemalsuan dan penggandaan yang menyebabkan tindak kejahatan.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">4. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Berdasarkan itikad baik, Bank berhak melakukan koreksi terhadap pembukuan rekening Nasabah dengan memberitahukan kepada Nasabah.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">5. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bila terjadi perbedaan perhitungan saldo antara Bank dengan Nasabah atau Pemilik Rekening, maka para pihak setuju perhitungan Bank yang dinyatakan benar dan sah.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td><br/></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%">
                                                                <b>IV. </b>
                                                            </td>
                                                            <td colspan="5" width="88%" style="text-align: justify;">
                                                                <b>BUNGA, PAJAK DAN BIAYA</b>
                                                            </td>
                                                            
                                                            <td width="2%">
                                                                
                                                            </td>
                                                            
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">1. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Ketentuan mengenai bunga yang ditawarkan oleh Bank kepada Nasabah dapat berubah mengikuti kondisi pasar perbankan dan kebijakan internal Bank, kecuali ditentukan lain oleh Bank.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">2. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Pendapatan atas bunga yang diterima oleh Nasabah akan dikenakan pajak yang besarnya sesuai dengan ketentuan perpajakan yang berlaku.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">3. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Ketentuan mengenai biaya dan besarnya biaya yang harus ditanggung oleh Nasabah terkait dengan simpanan, fasilitas dan layanan jasa Bank ditentukan oleh Bank. Dengan ini Nasabah menyatakan setuju dan memberikan kuasa kepada Bank untuk sewaktu-waktu mendebet rekening Nasabah untuk kepeduan pembayaran biaya dimaksud.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td><br/></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%">
                                                                <b>V. </b>
                                                            </td>
                                                            <td colspan="5" width="88%" style="text-align: left;">
                                                                <b>PENCAIRAN DEPOSITO</b>
                                                            </td>
                                                            
                                                            <td width="2%">
                                                                
                                                            </td>
                                                            
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">1. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Pada saat pencairan deposito Nasabah hars mengembalikan Bilyet Deposito asli ke Bank dan dirtandalangani pada kolom yang sudah disediakan pada halaman belakang Bilyet Deposito asli.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">2. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Instruksi pembayaran simpanan pokok Deposito harus ditulis oleh Nasabah pada halaman belakang Biyet Deposito asli dengan jelas dan benar.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td><br/></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%">
                                                                <b>VI. </b>
                                                            </td>
                                                            <td colspan="5" width="88%" style="text-align: left;">
                                                                <b>NASABAH MENINGGAL DUNIA/PAILIT/DIBUBARKAN</b>
                                                            </td>
                                                            
                                                            <td width="2%">
                                                                
                                                            </td>
                                                            
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">1. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Dalam hal Nasabah meninggal dunia atau dinyatakan pailit atau dibubarkan atau diletakkan di bawah pengawasan pihak yang ditunjuk untuk itu, Bank sewaktu-waktu berhak untuk melakukan penutupan rekening secara administratif untuk sementara dan hanya dapat mengalihkan hak atas nama ahli waris yang sah atau pihak yang ditunjuk tersebut, sesuai ketentuan Bank maupun perundang- undangan yang berlaku.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">2. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank berhak meminta dokumen yang dapat diterima sebagai bukti yang sah tentang kedudukannya sebagai ahli waris atau pengganti hak.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">3. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Ketentuan terkait dengan Nasabah meninggal dunia/pailit/dibubarkan mengacu pada ketentuan umum yang berlaku di Bank.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td><br/></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%">
                                                                <b>VII. </b>
                                                            </td>
                                                            <td colspan="5" width="88%" >
                                                                <b>KEHILANGAN DAN PENYALAHGUNAAN REKENING FASILITAS LAINNYA</b>
                                                            </td>
                                                            
                                                            <td width="2%">
                                                                
                                                            </td>
                                                            
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">1. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Dalam hal bukti kepemilikan rekening hilang, maka Nasabah wajib memberitahukan  kepada  Bank, melalui  Kantor  Cabang  terdekat selama jam kerja dengan disertai laporan tertulis dan Surat Keterangan Kehilangan dari Kepolisian.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">2. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Dalam hal Kartu ATM hilang atau terjadi permasalahan atas penggunaan fasilitas ATM, maka Nasabah wajib memberitahukan kepada Bank dan/atau Kantor Cabang terdekat.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">3. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank akan segera melakukan pemblokiran atas Rekening dan/atau Kartu ATM berdasarkan laporan Nasabah dilengkapi dengan Surat Kehilangan dari Kepolisian sebagaimana dimaksud dalam butir 1 diatas.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">4. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank tidak bertanggung jawab  atas setiap transaksi yang terjadi sebelum diterimanya laporan kehilangan bukti kepemilikan  rekening  dan/atau fasilitas lainnya.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">5. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Setiap penggantian bukti kepemilikan rekening dan/atau fasilitas lainnya yang dilaporkan hilang, Nasabah akan dikenakan biaya administrasi.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">6. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank dibebaskan dari segala tuntutan dan kerugian yang timbul karena kehilangan/pemalsuan dan/atau penyalahgunaan bukti kepemilikan rekening dan/atau fasilitas lainnya yang dilakukan oleh Nasabah atau pihak lainnya dan hal tersebut sepenuhnya menjadi beban dan tanggung jawab Nasabah.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">7. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank dibebaskan dari tanggung jawab atas keteledoran atau kecerobohan dan/atau penggunaan secara melawan hak, pemalsuan, penyalahgunaan segala akibat yang timbul karena kehilangan atas Buku Tabungan,  Buku Cek/Bilyet Giro, Bilyet Deposito, Kartu ATM, PIN ATM dan bukti kepemilikan lainnya yang berhubungan dengan jenis rekening yang dimiliki oleh Pemegang Rekening.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td><br/></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%">
                                                                <b>VIII. </b>
                                                            </td>
                                                            <td colspan="5" width="88%" style="text-align: justify;">
                                                                &nbsp;&nbsp;&nbsp;<b>LAIN-LAIN</b>
                                                            </td>
                                                            
                                                            <td width="2%">
                                                                
                                                            </td>
                                                            
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">1. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Dana yang tersedia dalam rekening Nasabah dijamin dalam program penjaminan yang diselenggarakan Lembaga Penjamin Simpanan (LPS) sesuai dengan  syarat dan  ketentuan yang ditetapkan oleh LPS.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">2. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Nasabah setuju bahwa Bank berhak untuk memperbaiki, mengubah, atau melengkapi Syarat dan Ketentuan ini. Setiap perubahan, penambahan atau pembaharuan atas Syarat dan Ketentuan ini akan diberitahukan melalui kantor-kantor cabang Bank.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">3. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Bank tidak bertanggung jawab atas terjadinya hal-hal diluar kekuasaan Bank (Force Majeure).
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top">4. </td>
                                                            <td width="85%" style="text-align: justify;">
                                                                Syarat dan ketentuan produk/fasilitas selengkapannya diatur dalam syarat dan ketentuan masing-masing produk/fasilitas, tetapi tidak terbatas pada Buku Petunjuk dan Kebijakan intemal Bank lainnya yang merupakan suatu kesatuan serta bagian yang tidak terpisahkan dari Ketentuan   Umum dan Ketentuan Khusus Pembukaan Rekening ini.
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="5"><hr></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%">                                                        
                                                                <input id="chkdis" name="chkdis" value="agreed" onclick="myFunction()" class="form-check-input" type="checkbox"  required>
                                                            </td>
                                                            <td width="3%" valign="top"></td>
                                                            <td width="85%" style="text-align: justify;">
                                                                <b>SAYA TELAH MEMBACA DAN MENGERTI SELURUH SYARAT DAN KETENTUAN PENGGUNAAN INI
                                                                BESERTA KONSEKUENSINYA, DAN DENGAN INI MENERIMA SETIAP HAK, KEWAJIBAN, DAN
                                                                KETENTUAN YANG DIATUR DI DALAMNYA.</b>
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5"><div class="mb10">&nbsp;</div></td>
                                                        </tr>
                                                        <tr>
                                                            <td width="5%"></td>
                                                            <td width="2%"></td>
                                                            <td width="3%" valign="top"></td>
                                                            <td width="85%" style="text-align: center;">
                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('landing') }}"  name="kembali" ><button id="kembali" class="btn btn-danger btn-lg mr10 " type="button" title="Kembali">Kembali</button></a>
                                                                <button id="yy" type="submit" class="btn btn-primary btn-lg ml10" title="Setuju" disabled>Setuju</button>
                                                            </td>
                                                            <td width="5%"></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="5"><div class="mb20">&nbsp;</div></td>
                                                        </tr>
                                                    </table>
                                                </form>
                                                </div>
                                            </div>
                                        </center>
                                        
                                        <table>
                                            <!-- <tr>
                                                <td width="5%"></td>
                                                <td colspan="3" width="90%" style="text-align: justify;">
                                                    Syarat dan Ketentuan ini mengatur penggunaan dan akses Nasabah terhadap Victoria Mobile dan Victoria IB Retail. Dengan mengakses atau menggunakan Victoria Mobile dan Victoria IB Retail, Nasabah setuju dan mengikatkan diri untuk mematuhi “Syarat dan Ketentuan Victoria Mobile dan Victoria IB Retail” (selanjutnya disebut “Syarat dan Ketentuan”) serta “Kebijakan Privasi Victoria Mobile dan Victoria IB Retail” yang tertera pada halaman yang berbeda. Syarat dan Ketentuan ini juga berlaku setiap kali Nasabah mengakses, bertransaksi serta menggunakan seluruh fitur dalam Victoria Mobile dan Victoria IB Retail.
                                                </td>
                                                <td width="5%"></td>
                                            </tr> -->
                                            
                                            
                                            
                                           
                                            
                                            
                                           
                                           
                                        </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </section>
                <!-- End: Content -->

            </section>

        </div>
        <!-- End: Main -->

        <!-- BEGIN: PAGE SCRIPTS -->
        <!-- jQuery -->
        <script type="text/javascript" src="{!! asset('admindesigns/vendor/jquery/jquery-1.11.1.min.js') !!}"></script>
        <script type="text/javascript" src="{!! asset('admindesigns/vendor/jquery/jquery_ui/jquery-ui.min.js') !!}"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="{!! asset('admindesigns/assets/js/bootstrap/bootstrap.min.js') !!}"></script>

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

            });
        </script>
        <!-- END: PAGE SCRIPTS -->

        <script>
            function myFunction() {
                var checkBox = document.getElementById("chkdis");
                //var text = document.getElementById("domi1");
                //var domi2 = document.getElementById("domi2");
                //var domi3 = document.getElementById("domi3");
                //var domi4 = document.getElementById("domi4");
                //var domi5 = document.getElementById("domi5");
                
                var yy = document.getElementById("yy");
                

                if (checkBox.checked == false){
                          
                    yy.disabled = true;

                } else {
                    
                    yy.disabled = false;

                    
                }
            }
        </script>

    </body>

</html>
