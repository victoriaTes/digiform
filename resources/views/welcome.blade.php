<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Formulir</title>
		<link rel="icon" type="image/png" href="{!! asset('images/bvic-logo.ico') !!}">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('admindesigns/assets/skin/default_skin/css/theme.css') !!}">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="{!! asset('admindesigns/assets/admin-tools/admin-forms/css/admin-forms.css') !!}">

  </head>
  <body class="calendar-page" data-spy="scroll" data-target="#nav-spy" data-offset="300">
    <!-- Begin: Content -->
    <section id="content" class="table-layout animated fadeIn">
      <!-- begin: .tray-center -->
      <div class="tray tray-center pv40 ph30 va-t posr animated-delay animated-long" data-animate='["800","fadeIn"]'>
        <h2 class="lh30 mtn text-center">Selamat Datang Di Pembukaan Rekening Digital <b>Bank Victoria International</b></h2>
        <p class="lead mb40 text-center">Every widget has its own set of skins, making form creation easier than ever.</p>
      </div>
    </section>
    <style>
    
    /* demo page styles */
    body {
        min-height: 2300px;
    }
    .affix-pane.affix {
        top: 80px;
    }
    .admin-form .panel.heading-border:before,
    .admin-form .panel .heading-border:before {
        transition: all 0.7s ease;
    }
    .custom-nav-animation li {
        display: none;
    }
    .custom-nav-animation li.animated {
        display: block;
    }

    #amount {
        color: #f6931f;
        font-weight: bold;
        background: transparent;
        border: 0;
    }
    </style>

    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/jquery/jquery-1.11.1.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/jquery/jquery_ui/jquery-ui.min.js') !!}"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="{!! asset('admindesigns/vendor/jquery/jquery-1.11.1.min.js') !!}assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Forms Javascript -->
    <script type="text/javascript" src="{!! asset('admindesigns/assets/admin-tools/admin-forms/js/jquery-tcm-month.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/assets/admin-tools/admin-forms/js/jquery-ui-timepicker.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/assets/admin-tools/admin-forms/js/jquery-ui-touch-punch.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/assets/admin-tools/admin-forms/js/jquery.spectrum.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/assets/admin-tools/admin-forms/js/jquery.stepper.min.js') !!}"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="{!! asset('admindesigns/assets/js/utility/utility.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/assets/js/main.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('admindesigns/assets/js/demo.js') !!}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Theme Core    
            Demo.init();

        });
    </script>
    <!-- END: PAGE SCRIPTS -->    
  </body>
</html>
