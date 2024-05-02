<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Bank Victoria International</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -- Local Version -->
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{!! asset('admindesigns/landing-page/landing1/css/theme.css') !!}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic'>

    <!-- Favicon -->
		<link rel="icon" type="image/png" href="{!! asset('images/bvic-logo.ico') !!}">

</head>

<body id="page-top" class="index">

    <!-- Hero Content -->
    <header id="hero">
        <div class="container"  >
            <div class="intro-text">
                <div class="intro-heading">{{ $greeting }},</div>
                <div class="intro-lead-in">Selamat Datang di <b class="text-danger">Bank Victoria International</b></div>
                <div class="intro-lead-in-a">Dapatkan Kemudahan Transaksi Finansial Anda Disini</div>
                <!-- <a href="{{ route('termcondition') }}" class="page-scroll btn btn-xl mr30 mt10 btn-danger">Buka Rekening Baru</a> -->
                <a href="{{ route('ceknik') }}" class="page-scroll btn btn-xl mr30 mt10 btn-danger">Buka Rekening Baru</a>
                <!-- <a href="{{ route('addaccount') }}" class="page-scroll btn btn-xl mt10 btn-wire">Tambah Rekening</a> -->
            </div>
        </div>
    </header>

    <!-- Footer -->
    <footer id="footer">
        <div class="container mw850">
            <div class="row">
                <div class="col-md-6 text-left">
                <span class="copyright text-muted">Copyright &copy; <b>Bank Victoria International</b> 2024</span>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 hidden">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <!-- <script src="js/vendor/jquery.js"></script> -- Local Version -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/vendor/bootstrap.min.js"></script> -- Local Version -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="{!! asset('admindesigns/landing-page/landing1/js/vendor/jqBootstrapValidation.js') !!}"></script>
    <script src="{!! asset('admindesigns/landing-page/landing1/js/contact_me.js') !!}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{!! asset('admindesigns/landing-page/landing1/js/main.js') !!}"></script>

    <!-- <script>
        window.onload = function() {
        // Your JavaScript code here
        alert('Page loaded!');
    };
    </script> -->

    <!-- <script>
        function toggleFullscreen() {
            var elem = document.documentElement; // Get the HTML element

            // Check if the current document is in fullscreen
            if (!document.fullscreenElement && !document.mozFullScreenElement && !document.webkitFullscreenElement && !document.msFullscreenElement) {
                // If not, request fullscreen
                if (elem.requestFullscreen) {
                    elem.requestFullscreen();
                } else if (elem.mozRequestFullScreen) { // Firefox
                    elem.mozRequestFullScreen();
                } else if (elem.webkitRequestFullscreen) { // Chrome, Safari and Opera
                    elem.webkitRequestFullscreen();
                } else if (elem.msRequestFullscreen) { // IE/Edge
                    elem.msRequestFullscreen();
                }
            }
            else {
                // If already in fullscreen, exit fullscreen
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                } else if (document.mozCancelFullScreen) { // Firefox
                    document.mozCancelFullScreen();
                } else if (document.webkitExitFullscreen) { // Chrome, Safari and Opera
                    document.webkitExitFullscreen();
                } else if (document.msExitFullscreen) { // IE/Edge
                    document.msExitFullscreen();
                }
            }
        };
    </script>     -->
</body>

</html>
