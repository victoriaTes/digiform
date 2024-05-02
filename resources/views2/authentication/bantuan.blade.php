<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bantuan</title>
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
    <link rel="stylesheet" type="text/css" href="{!! asset('admindesigns/assets/admin-tools/admin-forms/css/style.css') !!}">
    <style>
        .center {
            display: flex;
            justify-content: center;
        }

        .admin-form.theme-info .gui-input {
            border: 1px solid #CE2222;
            border-radius: 10px;
        }

        .admin-form.theme-info .gui-input:hover {
            border-color: #CE2222;
        }

        .admin-form.theme-info .gui-input:focus {
            border-color: #CE2222;
        }

        #canvas-wrapper {
            background-color: #CE2222;
            background-color: white;
        }

        .admin-form .field-icon i {
            color: #CE2222;
        }

        .admin-form .field-icon i {
            color: #CE2222;
        }

        #login {
            background: #CE2222;
            border: 1px solid #CE2222;
            border-radius: 10px;
            color: white;
        }
    </style>

</head>

<body class="login external-page sb-l-c sb-r-c">

    <!-- Start: Main -->
    <div id="" class="animated fadeIn">

        <!-- Start: Content-Wrapper -->
        <!-- <section id="content_wrapper"> -->

        <!-- begin canvas animation bg -->
        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>

        <!-- Begin: Content -->
        <section id="content">

            <div class="admin-form theme-info" id="login1">
                <div class="panel panel-info mt10 br-n mw800 ">
                    <div class="center bg-light">
                        <img class="mt30" src="{{ URL::to('/assets/images/logo/victoria.png') }}">
                    </div>
                    <div class="center bg-light">
                        <h1 style="color:#CE2222">BANTUAN</h1>
                    </div>
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif


                    <form id="contact" method="POST" action="{{ route('bantuan') }}">
                        @csrf
                        <div class="panel-body bg-light p30">
                            <div class="row">
                                <div class="col">
                                    <div class="section">
                                        <label for="username" class="field-label text-muted fs18 mb10">Username</label>
                                        <label for="username" class="field prepend-icon">
                                            <input type="text" name="username" id="username" class="gui-input"
                                                placeholder="Enter username" required autofocus>
                                            <label for="username" class="field-icon"><i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <div class="section">
                                        <label for="username"
                                            class="field-label text-muted fs18 mb10 mt30">Password</label>
                                        <label for="password" class="field prepend-icon">
                                            <input type="password" name="password" id="password" class="gui-input"
                                                placeholder="Enter password" required>
                                            <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                            </label>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @error('username')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- end .form-body section -->
                        <div class="clearfix p20 ph15 text-center bg-light">
                            <button type="submit" class="button mx-auto" id="login">Confirm</button>
                            <a href="{{ route('login') }}" class="button mx-auto ml20" id="login">Kembali</a>
                        </div>
                    </form>
                </div>

            </div>

        </section>
        <!-- End: Content -->

        <!-- </section> -->
        <!-- End: Content-Wrapper -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Page Plugins -->
    <script type="text/javascript" src="assets/js/pages/login/EasePack.min.js"></script>
    <script type="text/javascript" src="assets/js/pages/login/rAF.js"></script>
    <script type="text/javascript" src="assets/js/pages/login/TweenLite.min.js"></script>
    <script type="text/javascript" src="assets/js/pages/login/login.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>

    <!-- Page Javascript -->
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core      
            Core.init();

            // Init Demo JS
            Demo.init();

            // Init CanvasBG and pass target starting location
            CanvasBG.init({
                Loc: {
                    x: window.innerWidth / 2,
                    y: window.innerHeight / 3.3
                },
            });


        });
    </script>

    <!-- END: PAGE SCRIPTS -->

</body>

</html>
