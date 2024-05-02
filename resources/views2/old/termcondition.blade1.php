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
                                        <h2 class="fw200 mb10 mt10 text-center">Syarat Dan Ketentuan Pembukaan Rekening</h2>
                                    </div>
                                    <div>
                                        <table>
                                            <tr>
                                                <td width="5%"></td>
                                                <td colspan="3" width="90%" style="text-align: justify;">
                                                    Syarat dan Ketentuan ini mengatur penggunaan dan akses Nasabah terhadap Victoria Mobile dan Victoria IB Retail. Dengan mengakses atau menggunakan Victoria Mobile dan Victoria IB Retail, Nasabah setuju dan mengikatkan diri untuk mematuhi “Syarat dan Ketentuan Victoria Mobile dan Victoria IB Retail” (selanjutnya disebut “Syarat dan Ketentuan”) serta “Kebijakan Privasi Victoria Mobile dan Victoria IB Retail” yang tertera pada halaman yang berbeda. Syarat dan Ketentuan ini juga berlaku setiap kali Nasabah mengakses, bertransaksi serta menggunakan seluruh fitur dalam Victoria Mobile dan Victoria IB Retail.
                                                </td>
                                                <td width="5%"></td>
                                            </tr>
                                            <tr>
                                                <td width="5%"></td>
                                                <td width="2%">
                                                    <b>A. </b>
                                                </td>
                                                <td colspan="2" width="88%" style="text-align: justify;">
                                                    <b>DEFINISI</b>
                                                </td>
                                                <td width="5%"></td>
                                            </tr>
                                            <tr>
                                                <td width="5%"></td>
                                                <td width="2%"></td>
                                                <td width="3%" valign="top">1. </td>
                                                <td width="85%" style="text-align: justify;">
                                                    Aktivasi adalah proses mengaktifkan account pada sistem Mobile Banking.
                                                </td>
                                                <td width="5%"></td>
                                            </tr>
                                            <tr>
                                                <td width="5%"></td>
                                                <td width="2%"></td>
                                                <td width="3%" valign="top">2. </td>
                                                <td width="85%" style="text-align: justify;">
                                                    Anjungan Tunai Mandiri (ATM) adalah mesin dengan sistem komputer yang diaktifkan dengan kartu magnetik bank yang berkode atau bersandi; melalui mesin tersebut nasabah dapat menabung, mengambil uang tunai, mentransfer dana antar-rekening, dan transaksi rutin; ATM dipasang secara nasional ataupun internasional sehingga memudahkan nasabah mendapatkan uang tunai dari ATM di negara tempat nasabah berada dengan menggunakan kode atau sandi ATM yang diterbitkan oleh bank yang bersangkutan dan nomor jati diri nasabah (automated teller machine/ATM).
                                                </td>
                                                <td width="5%"></td>
                                            </tr>
                                            <tr>
                                                <td width="5%"></td>
                                                <td width="2%"></td>
                                                <td width="3%" valign="top">3. </td>
                                                <td width="85%" style="text-align: justify;">
                                                    <i>Bancassurance</i> adalah aktivitas kerja sama antara Perusahaan Asuransi dengan Bank dalam rangka memasarkan produk asuransi melalui Bank.
                                                </td>
                                                <td width="5%"></td>
                                            </tr>
                                            <tr>
                                                <td width="5%"></td>
                                                <td width="2%"></td>
                                                <td width="3%" valign="top">4. </td>
                                                <td width="85%" style="text-align: justify;">
                                                    Bank atau Bank Victoria adalah PT Bank Victoria International Tbk                                                </td>
                                                <td width="5%"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"><hr></td>
                                            </tr>
                                            <tr>
                                                <td width="5%"></td>
                                                <td width="2%">                                                        
                                                    <input id="chkdis" name="chkdis" value="agreed" class="form-check-input" type="checkbox"  required>
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
                                                <td width="85%" style="text-align: right;">
                                                    <a href="{{ route('landing') }}"  name="kembali" ><button id="kembali" class="btn btn-danger btn-lg mr10 " type="button" >Kembali</button></a>
                                                    <a href="{{ route('openaccount') }}" class="btn btn-primary btn-lg ml10">Setuju</a>
                                                </td>
                                                <td width="5%"></td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"><div class="mb20">&nbsp;</div></td>
                                            </tr>
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

    </body>

</html>
