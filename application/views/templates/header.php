<!DOCTYPE html>
<html>
  <head>
    <title>IT Telkom Dashboard</title>
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-responsive.min.css'); ?>" rel="stylesheet">
    <style type="text/css">
    #header {
	margin-bottom: 20px;
	}

	.nav.nav-tabs.nav-stacked {
    background-color: white;
    }

.breadcrumb {
border: 1px solid #3c4049;
color: #fff;
background-color: #4e525d;
background-image: -moz-linear-gradient(top, #4e525d, #3c4049);
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#4e525d), to(#3c4049));
background-image: -webkit-linear-gradient(top, #4e525d, #3c4049);
background-image: -o-linear-gradient(top, #4e525d, #3c4049);
background-image: linear-gradient(to bottom, #4e525d, #3c4049);
filter: progid:dximagetransform.microsoft.gradient(startColorstr='#4e525d', endColorstr='#3c4049', GradientType=0);
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
}

.nav.nav-tabs.nav-stacked li.active a {
background-color: #0088cc;
color: #ffffff;
}

.center {
text-align: center;
}
	
    </style>
  </head>
  <body>
  	<div id="header">
  	<div class="navbar navbar-static-top navbar-inverse">
  	<div class="navbar-inner">
  	<div class="container-fluid">
    <a class="brand" href="#">IT Telkom Dashboard</a>
    <ul class="nav pull-right">
    <li><a href="<?php echo site_url('admin/logout'); ?>"><i class="icon-search icon-off icon-white"></i> Logout</a></li>
    </ul>
	</div>
	</div>
	</div>
	</div>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span2">
				<ul class="nav nav-tabs nav-stacked">
                    <li class="active"><a href="#">Home</a></li>
                    <li class="nav-header">Kelola Data Institusi</li>
                    <li><a href="#">Mahasiswa</a></li>
                    <li><a href="#">Dosen</a></li>
                    <li><a href="#">Pegawai</a></li>
                    <li><a href="#">Fakultas</a></li>
                    <li><a href="#">Prodi</a></li>
                    <li><a href="#">Unit</a></li>
                    <li><a href="#">Mitra Kerjasama</a></li>
                    <li><a href="#">Ruangan</a></li>
				</ul>
			</div><!-- End Span2 -->