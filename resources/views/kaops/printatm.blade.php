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

<style>
    @media print {
            #printButton {
                display: none;
            }
            
        }
</style>

<body id="page-top" class="index">
    <!-- <div class="col-md-1" ></div> -->
    <!-- <div class="col-md-12" > -->
        <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" style="margin-left: 32.5%;">
    <table width="100%">
        <tr>
            <td>
                <div class="col-md-12">
                    <table width="50%">
                        <tr>
                            <td align="left" bgcolor="#CE2222" style="font-size:20px"><img src="/assets/images/logo/victoria_white.png" style="margin-left:10px;" width="30%"></td>
                        </tr>
                        <tr>
                            <td height="20" style="font-size:15px;color:grey;"><b><i>formulir pengajuan pembuatan Kartu ATM</i></b></td>
                        </tr>
                    </table>
                    <table width="100%">
                        <tr>
                            <td width="22%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Dengan hormat,</td>
                        </tr>
                    </table>
                    <table width="100%">
                        <tr>
                            <td width="22%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Yang bertanda tangan dibawah ini:</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="49%">
                                <table width="51%">
                                    <tr>
                                        <td width="8%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Nama Pemilik Rekening:</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp; :</td>
                                        <td width="32%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{$nasabah->nik}}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="49%">
                                <table width="51%">
                                    <tr>
                                        <td width="9.25%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Alamat</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp; :</td>
                                        <td id="alamatCell" width="32%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{$nasabah->alamat}}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="49%">
                                <table width="51%">
                                    <tr>
                                        <td width="9.25%" height="20" align="left" style="vertical-align: bottom;font-size:10px;"></td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;"></td>
                                        <td id="remainingCell" width="32%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="49%">
                                <table width="51%">
                                    <tr>
                                        <td width="9.25%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">No. CIF</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp; :</td>
                                        <td width="32%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{$nasabah->cif}}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="49%">
                                <table width="51%">
                                    <tr>
                                        <td width="8.5%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">No. Rekening</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp; :</td>
                                        <td width="32%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{$nasabah->account_no}}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="17%" height="40" align="left" style="vertical-align: bottom;font-size:10px;">Mengajukan permohonan pembuatan Kartu ATM. Segala Resiko yang akan timbul adalah merupakan tanggung jawab Saya/Kami
                                            sepenuhnya dan dalam hal ini Saya/Kami membebaskan pihak Bank dari segala tuntutan.</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="27%" height="20" align="left" style="vertical-align: bottom;font-size:10px;"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="17%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Terima Kasih</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="10%" height="20" style="text-align: center; vertical-align: bottom; font-size: 10px; border-bottom: 0.5pt solid black;">
                                            ,
                                        </td>                                        
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="12%" height="20" align="right" style="vertical-align: bottom;font-size:10px;">Pemegang Kartu ATM</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">

                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="12%" height="20" align="right" style="vertical-align: bottom;font-size:10px;">Nama Jelas & Tanda Tangan</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" height="150" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div class="col-md-12 mt10">
                    <table width="49%">
                        <tr>
                        <td height="20" align="center" bgcolor= "#808080"  style="font-size:10px;color:white;border-top: 0.5pt solid black;border-bottom: 0.5pt solid black;border-left: 0.5pt solid black;border-right: 0.5pt solid black;"><b>Diisi Pihak Bank</b></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="49%">
                                <table width="100%" height="30">
                                    <tr>
                                        <td width="8%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">No. KartuATM</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp; :</td>
                                        <td width="32%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%" height="50">
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="49%">
                        <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black;border-top: 0.5pt solid black;">
                            <td width="20%" height="20" align="center" style="vertical-align: bottom;font-size:10px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">Diinput</td>
                            <td width="20%" height="20" align="center" style="vertical-align: bottom;font-size:10px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">Diotorisasi</td>
                        </tr>
                        <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black;">
                            <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                            <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                        </tr>
                        <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black;">
                            <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                            <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                        </tr>
                        <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black;">
                            <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                            <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                        </tr>
                        <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black;">
                            <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                            <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                        </tr>
                        <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black;">
                            <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                            <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                        </tr>
                        <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black;">
                            <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                            <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                        </tr>
                        <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black; border-bottom: 0.5pt solid black;">
                            <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">Nama Jelas & Tanda Tangan</td>
                            <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">Nama Jelas & Tanda Tangan</td>
                        </tr>
                        <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black; border-bottom: 0.5pt solid black;">
                            <td width="20%" height="30" align="left" style="vertical-align: bottom;font-size:10px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">Tanggal</td>
                            <td width="20%" height="30" align="left" style="vertical-align: bottom;font-size:10px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">Tanggal</td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
        </div>
        <div class="col-md-2"></div>
        </div>
    <div class="col-md-12 mt10 mb20">
        <table width="100%">
            <tr>
                <td width="100%" align="center">
                    <button id="printButton" onclick="window.print()" style="padding: 10px 20px; font-size: 14px; background: #CE2222; color: white;border: 1px solid #CE2222;border-radius: 10px; margin-top:20px;">Print</button>
                </td>
            </tr>
        </table>
    </div>
    <script>
        // Get the text content of the alamatCell
        var alamatText = document.getElementById('alamatCell').innerText;
    
        // Set a character limit for the text content
        var characterLimit = 50;
    
        // Check if the alamatText exceeds the character limit
        if (alamatText.length > characterLimit) {
            // Find the last space character within the character limit
            var lastSpaceIndex = alamatText.lastIndexOf(' ', characterLimit);
    
            // Check if a space character was found
            if (lastSpaceIndex !== -1) {
                // Split the text content into two parts
                var displayedText = alamatText.slice(0, lastSpaceIndex);
                var remainingText = alamatText.slice(lastSpaceIndex + 1); // Skip the space character
    
                // Update the text content of the alamatCell and remainingCell
                document.getElementById('alamatCell').innerText = displayedText;
                document.getElementById('remainingCell').innerText = remainingText;
            }
        }
    </script>
    

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

</body>

</html>