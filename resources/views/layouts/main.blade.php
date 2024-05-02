<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>
    <link rel="icon" type="image/png" href="{!! asset('images/bvic-logo.ico') !!}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>

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

    <!-- Admin Modals CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('admindesigns/assets/admin-tools/admin-plugins/admin-modal/adminmodal.css') !!}">

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
            align-items: center;
            justify-content: center;
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

        #save {
            background: #CE2222;
            border: 1px solid #CE2222;
            border-radius: 10px;
            color: white;
        }

        #verifyCustomer {
            background: #CE2222;
            border: 1px solid #CE2222;
            border-radius: 10px;
            color: white;
        }

        #verifyDukcapil {
            background: #CE2222;
            border: 1px solid #CE2222;
            border-radius: 10px;
            color: white;
        }

        #sendOTP {
            background: #CE2222;
            border: 1px solid #CE2222;
            border-radius: 10px;
            color: white;
        }

        #verifyOTP {
            background: #CE2222;
            border: 1px solid #CE2222;
            border-radius: 10px;
            color: white;
        }

        #snapshot {
            background: #CE2222;
            border: 1px solid #CE2222;
            border-radius: 10px;
            color: white;
        }

        #countdownTimer {
            margin-top: 730px;
            font-size: 14px;
            color: #555;
        }
        
        .overlay {
            position: absolute;
            top: 0;
            left: 10px;
            right: 0;
            width: 310px;
            height: 250px;
            pointer-events: none; /* Ensures clicks pass through to the camera */
        }

        .overlay-top, .overlay-bottom, .overlay-left, .overlay-right {
            position: absolute;
            background-color: transparent /* Red overlay */
        }

        .overlay-top {
            top: 40px;
            left: 90px;
            right: 90px;
            height: 5px; /* Adjust height as needed */
            border-style: dashed;
            border-color: yellow;
        }

        .overlay-bottom {
            bottom: 40px;
            left: 90px;
            right: 90px;
            height: 5px; /* Adjust height as needed */
            border-style: dashed;
            border-color: yellow;
        }

        .overlay-left {
            top: 40px; /* Adjust top position to avoid overlap with top overlay */
            left: 90px;
            bottom: 40px; /* Adjust bottom position to avoid overlap with bottom overlay */
            width: 5px; /* Adjust width as needed */
            border-style: dashed;
            border-color: yellow;
        }

        .overlay-right {
            top: 40px; /* Adjust top position to avoid overlap with top overlay */
            right: 90px;
            bottom: 40px; /* Adjust bottom position to avoid overlap with bottom overlay */
            width: 5px; /* Adjust width as needed */
            border-style: dashed;
            border-color: yellow;
        }

        .camera-container {
            width: 100%;
            height: 0;
            padding-bottom: 75%; /* This creates a 4:3 aspect ratio (250px / 330px = 0.7575) */
            position: relative;
        }

        #results {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%; /* Set the width of the container to 100% */
            height: auto; /* Maintain aspect ratio */
            text-align: center; /* Center align the image within the container */
        }
        
        #results img {
            max-width: 100%; /* Ensure the image does not exceed the container width */
            max-height: 100%; /* Ensure the image does not exceed the container height */
            display: inline-block; /* Display the image as inline block */
        }

        #submitReject {
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

        .dropzone {
            display: flex;
            justify-content: center;
        }

        .pagination>.active>a {
            background-color: #CE2222;
            border-color: #CE2222;
        }

        .pagination>.active>a:hover {
            background-color: #CE2222;
            border-color: #CE2222;
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

        img#disabledInput {
            width: 80%;
            height: 80%;
        }

        .dropzone {
            display: flex;
            justify-content: center;
        }

        .logout {
            border: none;
            background: none;
            padding: 0;
            margin: 0;
            cursor: pointer;
            display: block;
            width: 100%;
            text-align: left;
        }

        .nav-pills>li.active>a {
            background-color: #CE2222;
        }

        .nav-pills>li.active>a,
        .nav-pills>li.active>a:hover,
        .nav-pills>li.active>a:focus {
            background-color: #CE2222;
        }

        .nav>li>a:hover {
            color: #CE2222;
        }

        li a {
            color: #CE2222;
        }
    </style>
    

</head>

<body class="sb-l-c sb-l-m sb-r-c" data-target="#nav-spy" data-offset="200">
    <div class="animated fadeIn" id="main">

        <!-- Start: Header -->
        <header class="navbar navbar-fixed-top bg-light">
            @yield('logo')

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img
                            src="{{ URL::to('/assets/images/logo/user.jpg') }}" alt="avatar" class="mw30 br64 mr15">
                        <span style="color: #CE2222">{{ auth()->user()->username }}</span>
                        <span class="caret caret-tp"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                        <li class="br-t of-h">
                            <a href="{{ route('resetpassword') }}" class="button fw600 p12 animated animated-short fadeInDown logout">
                                <span class="fa fa-pencil pr5"></span> Ubah Password
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="fw600 p12 animated animated-short fadeInDown logout">
                                    <span class="fa fa-power-off pr5"></span> Logout
                                </button>
                            </form>
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
        <section id="content_wrapper" class="mt10">

            <!-- Begin: Content -->
            <section id="content" class="p40" style="font-size: 15px;">
                <h2 class="center" style="color: #CE2222;">Cabang : {{ auth()->user()->cabang }}</h2>
                @yield('container')
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
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') !!}"></script>

    <!-- Datatables Editor addon - READ LICENSING NOT MIT  -->
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
        });
    </script>
    @yield('js')

</body>

</html>
