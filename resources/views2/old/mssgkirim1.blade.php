<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bank Victoria International</title>
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
                left: 180px;
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
                                        <h1 class="fw200 mb10 mt10 text-center"><strong>Data Anda Sudah Terkirim, Silahkan Datang Ke Cabang Yang Terdekat, Untuk Membuat Rekening Anda.</strong></h1>
                                    </div>
                                    <div>
                                        <center>
                                            
                                        </center>
                                        
                                        <table>
                                            <!-- <tr>
                                                <td width="5%"></td>
                                                <td colspan="3" width="90%" style="text-align: left;">
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

    </body>

</html>
