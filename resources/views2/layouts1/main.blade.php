<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>
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
            width: 250px;
            height: 300px;
        }

        .dropzone {
            display: flex;
            justify-content: center;
        }
    </style>

</head>

<body class="sb-l-c sb-l-m sb-r-c" data-target="#nav-spy" data-offset="200">
    <div class="animated fadeIn" id="main">

        <!-- Start: Header -->
        <header class="navbar navbar-fixed-top bg-light">
            {{-- <div class="navbar-branding" id="logo">
                <a href="{{ route('menu') }}">
                    <img style="width: 150px;" src="{{ URL::to('/assets/images/logo/victoria.png') }}" alt="Logo">
                </a>
            </div> --}}
            @yield('logo')

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img
                            src="{{ URL::to('/assets/images/logo/user.jpg') }}" alt="avatar" class="mw30 br64 mr15">
                        <span style="color: #CE2222">@yield('user')</span>
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
