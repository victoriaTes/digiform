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
    <table width="100%">
        <tr>
            <td>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td align="left" style="font-size:20px"><b><i>Customer Identification File Nasabah Perorangan<i></b></td>
                        </tr>
                        <tr>
                            <td height="20" align="center" bgcolor= "#CE2222"  style="font-size:10px;color:white;border-top: 0.5pt solid black;border-bottom: 0.5pt solid black;border-left: 0.5pt solid black;border-right: 0.5pt solid black;"><b>INFORMASI DATA UTAMA</b></td>
                        </tr>
                    </table>
                    <table width="100%">
                        <tr>
                            <td width="22%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Nama Sesuai Bukti Identitas</td>
                            <td width="53%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->nama_lengkap }}</td>
                            <td width="2%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="5%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Gelar</td>
                            <td width="28%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->gelar }}</td>
                        </tr>
                    </table>
                    <table width="100%">
                        <tr>
                            <td width="22%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Alamat Sesuai Bukti Identitas</td>
                            <td width="53%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->alamat_ktp }}</td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="3%" align="left" style="vertical-align: bottom;font-size:10px;">RT</td>
                            <td width="8%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->rtrw_ktp }}</td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="3%" align="left" style="vertical-align: bottom;font-size:10px;">RW</td>
                            <td width="8%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->rtrw_ktp }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="17%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Kelurahan/Desa</td>
                                        <td width="34%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->kelurahan_ktp }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="13%" align="left" style="vertical-align: bottom;font-size:10px;">Kecamatan</td>
                                        <td width="34%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->kecamatan_ktp }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Jenis Kelamin</td>
                                        <td width="13%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->jenis_kelamin }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="7%" align="left" style="vertical-align: bottom;font-size:10px;">Kewarganegaraan</td>
                                        <td width="8%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="9%" align="left" style="vertical-align: bottom;font-size:10px;">Negara</td>
                                        <td width="20%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">INDONESIA</td>
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
                                        <td width="17%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Kabupaten/Kota</td>
                                        <td width="34%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->kabupaten_ktp }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="13%" align="left" style="vertical-align: bottom;font-size:10px;">Propinsi</td>
                                        <td width="34%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->propinsi_ktp }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="22%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Jenis Identitas</td>
                                        <td width="12%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="24%" align="left" style="vertical-align: bottom;font-size:10px;">Nomor Identitas</td>
                                        <td width="40%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->nik }}</td>
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
                                        <td width="15%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Kode Pos</td>
                                        <td width="12%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->kode_pos_ktp }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="15%" align="left" style="vertical-align: bottom;font-size:10px;">No. Telp</td>
                                        <td width="21%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="17%" align="left" style="vertical-align: bottom;font-size:10px;">No. Ponsel</td>
                                        <td width="21%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->no_hp }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="25%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Tanggal Identitas</td>
                                        <td width="17%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="33%" align="left" style="vertical-align: bottom;font-size:10px;">Tanggal Akhir Identitas</td>
                                        <td width="38%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">Seumur Hidup</td>
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
                                        <td  height="20" align="left" style="vertical-align: bottom;font-size:10px;">Alamat Tempat Tinggal Saat Ini (<i>Jika Berbeda Dengan Bukti Identitas</i>)</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="28%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Jenis Identitas Lain</td>
                                        <td width="22%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="10%" align="left" style="vertical-align: bottom;font-size:10px;">Nomor</td>
                                        <td width="38%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="75%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->alamat }}</td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="3%" align="left" style="vertical-align: bottom;font-size:10px;">RT</td>
                            <td width="8%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->rtrw }}</td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="3%" align="left" style="vertical-align: bottom;font-size:10px;">RW</td>
                            <td width="8%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->rtrw }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="17%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Kelurahan/Desa</td>
                                        <td width="34%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->kelurahan }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="13%" align="left" style="vertical-align: bottom;font-size:10px;">Kecamatan</td>
                                        <td width="34%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->kecamatan }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="27%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Jumlah Tanggungan</td>
                                        <td width="15%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="29%" align="left" style="vertical-align: bottom;font-size:10px;">Status Perkawinan</td>
                                        <td width="25%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->status_perkawinan }}</td>
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
                                        <td width="17%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Kabupaten/Kota</td>
                                        <td width="34%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->kabupaten }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="13%" align="left" style="vertical-align: bottom;font-size:10px;">Propinsi</td>
                                        <td width="34%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->propinsi }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="27%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Status Rumah</td>
                                        <td width="15%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->status_rumah }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="30%" align="left" style="vertical-align: bottom;font-size:10px;">Pendidikan Terakhir</td>
                                        <td width="26%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->pendidikan }}</td>
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
                                        <td width="8%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Kode Pos</td>
                                        <td width="12%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->kode_pos }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="8%" align="left" style="vertical-align: bottom;font-size:10px;">No. Telp</td>
                                        <td width="26%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="35%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Nama Ibu Kandung</td>
                                        <td width="65%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->nama_ibu }}</td>
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
                                        <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Tempat Lahir</td>
                                        <td width="29%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->tempat_lahir }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="20%" align="left" style="vertical-align: bottom;font-size:10px;">Tanggal Lahir</td>
                                        <td width="29%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->tgl_lahir }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="45%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Nama Suami/Istri/Orang Tua</td>
                                        <td width="55%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
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
                                        <td width="10%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Agama</td>
                                        <td width="90%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->agama }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="5%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Email</td>
                                        <td width="51%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->email }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="8%" align="left" style="vertical-align: bottom;font-size:10px;">NPWP</td>
                                        <td width="35%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->nik }}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12 mt10">
                    <table width="100%">
                        <tr>
                        <td height="20" align="center" bgcolor= "#CE2222"  style="font-size:10px;color:white;border-top: 0.5pt solid black;border-bottom: 0.5pt solid black;border-left: 0.5pt solid black;border-right: 0.5pt solid black;"><b>DATA PEKERJAAN</b></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="30%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Nama Perusahaan</td>
                                        <td width="70%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->nama_perusahaan }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="15%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Pekerjaan</td>
                                        <td width="85%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->pekerjaan }}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Alamat Perusahaan</td>
                            <td width="53%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->alamat_perusahaan }}</td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="3%" align="left" style="vertical-align: bottom;font-size:10px;">RT</td>
                            <td width="8%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->rt_perusahaan }}</td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="3%" align="left" style="vertical-align: bottom;font-size:10px;">RW</td>
                            <td width="8%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->rw_perusahaan }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="17%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Kelurahan/Desa</td>
                                        <td width="34%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->kelurahan_perusahaan }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="13%" align="left" style="vertical-align: bottom;font-size:10px;">Kecamatan</td>
                                        <td width="34%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->kecamatan_perusahaan }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="17%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Bidang Usaha</td>
                                        <td width="83%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->bidang_usaha }}</td>
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
                                        <td width="17%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Kabupaten/Kota</td>
                                        <td width="34%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->kabupaten_perusahaan }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="13%" align="left" style="vertical-align: bottom;font-size:10px;">Propinsi</td>
                                        <td width="34%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"{{ $nasabah->propinsi_perusahaan }}></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="32%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Jabatan/Golongan/Pangkat</td>
                                        <td width="68%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->jabatan }}</td>
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
                                        <td width="8%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Kode Pos</td>
                                        <td width="12%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->kode_pos_perusahaan }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="8%" align="left" style="vertical-align: bottom;font-size:10px;">No. Telp</td>
                                        <td width="26%" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->telpon_perusahaan }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="55%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Jumlah Karyawan (Khusus Wiraswasta)</td>
                                        <td width="45%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->jumlah_karyawan }}</td>
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
                                        <td width="15%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">No. Fax</td>
                                        <td width="85%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Lama Bekerja</td>
                                        <td width="30%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->lama_kerja }}</td>
                                        <td width="10%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Tahun</td>
                                        <td width="35%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                        <td width="10%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Bulan</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12 mt10">
                    <table width="100%">
                        <tr>
                        <td height="20" align="center" bgcolor= "#CE2222"  style="font-size:10px;color:white;border-top: 0.5pt solid black;border-bottom: 0.5pt solid black;border-left: 0.5pt solid black;border-right: 0.5pt solid black;"><b>DATA KEUANGAN</b></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="47%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Jika Karyawan Penghasilan Utama (<i>Kotor Per-Bulan Dalam Rupiah</i>)</td>
                            <td width="53%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->penghasilan }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="70%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Penghasilan Tambahan (<i>Per-Bulan Dalam Rupiah</i>)</td>
                                        <td width="30%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->dana_tambahan }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="60%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Transaksi Setoran Tunai (<i>Dalam Rupiah</i>)</td>
                                        <td width="40%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->trx_str_tunai }}</td>
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
                                        <td width="70%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Jika Wiraswasta, Omzet (<i>Per-Bulan Dalam Rupiah</i>)</td>
                                        <td width="30%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->omzet_karyawan }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="60%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Transaksi Penarikan Tunai (<i>Dalam Rupiah</i>)</td>
                                        <td width="40%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->trx_pnrkn_tunai }}</td>
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
                                        <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Jenis Rekening</td>
                                        <td width="15%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->jenis_tabungan }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="38%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Tujuan Pembukaan Rekening</td>
                                        <td width="15%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->tujuan_rek }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="65%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Transaksi Setoran Non Tunai (<i>Dalam Rupiah</i>)</td>
                                        <td width="35%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->trx_str_nontunai }}</td>
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
                                        <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Sumber Dana</td>
                                        <td width="15%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->sumber_dana }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="40%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Tujuan Penggunaan Dana</td>
                                        <td width="23%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->tujuan_dana }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="70%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Transaksi Penarikan Non Tunai (<i>Dalam Rupiah</i>)</td>
                                        <td width="30%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->trx_pnrkn_nontunai }}</td>
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
                                        <td width="38%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Frekuensi Setoran Tunai</td>
                                        <td width="9%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->setoran_tunai }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="40%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Frekuensi Setoran Non Tunai</td>
                                        <td width="9%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->penarikan_tunai }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="38%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Frekuensi Penarikan Tunai</td>
                                        <td width="7%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->setoran_nontunai }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="46%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Frekuensi Penarikan Non Tunai</td>
                                        <td width="7%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->penarikan_nontunai }}</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>                
                <div class="col-md-12 mt10">
                    <table width="100%">
                        <tr>
                        <td height="20" align="center" bgcolor= "#CE2222"  style="font-size:10px;color:white;border-top: 0.5pt solid black;border-bottom: 0.5pt solid black;border-left: 0.5pt solid black;border-right: 0.5pt solid black;"><b>DATA DIISI OLEH BANK</b></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <table width="100%">
                        <tr>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="45%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Tanggal Pembukaan Rekening</td>
                                        <td width="15%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->tgl_buka }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Kode Cabang</td>
                                        <td width="18%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->cabang }}</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="35%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Golongan Penduduk</td>
                                        <td width="11%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="40%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Keterkaitan Dengan Bank</td>
                                        <td width="13%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
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
                                        <td width="24%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Nomor CIF</td>
                                        <td width="18%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->noCif }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="26%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Nasabah Induk</td>
                                        <td width="30%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Faktor Resiko</td>
                                        <td width="21%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->riskFactor }}</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Jenis Nasabah</td>
                                        <td width="21%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="5%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">A/O</td>
                                        <td width="10%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">{{ $nasabah->kode_ao }}</td>
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
                                        <td width="30%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Hubungan Nasabah</td>
                                        <td width="40%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Kode Negara</td>
                                        <td width="10%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;">ID</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="25%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Golongan Pemilik</td>
                                        <td width="24%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="25%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Sektor Ekonomi</td>
                                        <td width="24%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
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
                                        <td width="16%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Badan Hukum</td>
                                        <td width="8%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="15%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Flag PPH</td>
                                        <td width="11%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="12%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Kode Area</td>
                                        <td width="10%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%">
                                <table width="100%">
                                    <tr>
                                        <td width="30%" height="20" align="left" style="vertical-align: bottom;font-size:10px;">Pemeriksaaan DHNBI</td>
                                        <td width="21%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                                        <td width="25%" height="20" align="left" style="vertical-align: bottom;font-size:10px;"><i>Customer Risk</i></td>
                                        <td width="22%" height="20" align="left" style="vertical-align: bottom;font-size:10px;border-bottom: 0.5pt solid black;"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>                
                <div class="col-md-12 mt10 mb20">
                    <table width="100%">
                        <tr>
                            <td width="49%" style="vertical-align: top;">
                                <table width="100%">
                                    <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black;border-top: 0.5pt solid black;">
                                        <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">Diproses</td>
                                        <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">Diperiksa</td>
                                        <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">Disetujui</td>
                                    </tr>
                                    <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black;">
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                    </tr>
                                    <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black;">
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                    </tr>
                                    <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black;">
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                    </tr>
                                    <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black;">
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                    </tr>
                                    <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black;">
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                    </tr>
                                    <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black;">
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                        <td align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">&nbsp;</td>
                                    </tr>
                                    <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black; border-bottom: 0.5pt solid black;">
                                        <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">Nama Jelas & Tanda Tangan</td>
                                        <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">Nama Jelas & Tanda Tangan</td>
                                        <td width="20%" height="20" align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">Nama Jelas & Tanda Tangan</td>
                                    </tr>
                                    <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black; border-bottom: 0.5pt solid black;">
                                        <td width="20%" height="30" align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">Tanggal</td>
                                        <td width="20%" height="30" align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">Tanggal</td>
                                        <td width="20%" height="30" align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; border-right: 0.5pt solid black;">Tanggal</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="2%" align="left" style="vertical-align: bottom;font-size:10px;">&nbsp;</td>
                            <td width="49%"  style="vertical-align: top;">
                                <table width="100%">
                                    <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black;border-top: 0.5pt solid black;">
                                        <td width="70%" height="20" align="justify"  style="vertical-align: top;font-size:8px;border-left: 0.5pt solid black;">Dengan menandatangani aplikasi ini, Saya/Kami menyatakan bahwa keterangan tersebut di atas adalah benar dan merupakan data terbaru. Saya/Kami telah membaca dan memahami untuk menerima dan mengikatkan diri pada Ketentuan Umum dan Ketentuan Khusus mengenai pembukaan rekening yang merupakan satu kesatuan dan tidak terpisahkan dengan Aplikasi Pembukaan Rekening pada PT. Bank Victoria International Tbk.</td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:8px;">&nbsp;</td>
                                        <td width="28%" height="20" align="center" style="vertical-align: top;font-size:8px;border-right: 0.5pt solid black;"></br>________________,______________</td>
                                    </tr>
                                    <tr style="border-left: 0.5pt solid black; border-right: 0.5pt solid black; border-bottom: 0.5pt solid black;">
                                        <td width="70%" height="20" align="left" style="vertical-align: bottom;font-size:8px;border-left: 0.5pt solid black; ">Saya/Kami Pemegang Rekening  &nbsp; <input type="checkbox"> Setuju &nbsp;<input type="checkbox"> Tidak Setuju </td>
                                        <td width="2%" align="left" style="vertical-align: bottom;font-size:8px;">&nbsp;</td>
                                        <td width="28%" height="20" align="left" style="vertical-align: bottom;font-size:8px;border-right: 0.5pt solid black;">Nama Jelas Pemohon & Tanda Tangan</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>

    <div class="col-md-12 mt10 mb20">
        <table width="100%">
            <tr>
                <td width="100%" align="center">
                    <button id="printButton" onclick="window.print()" style="padding: 10px 20px; font-size: 14px; background: #CE2222; color: white;border: 1px solid #CE2222;border-radius: 10px;">Print</button>
                </td>
            </tr>
        </table>
    </div>


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