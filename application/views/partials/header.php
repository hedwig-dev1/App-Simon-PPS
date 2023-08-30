<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description"
		content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
	<meta name="keywords"
		content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
	<meta name="author" content="pixelstrap">
	<link rel="icon" href="<?= base_url('public/')?>images/favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="<?= base_url('public/')?>images/favicon.png" type="image/x-icon">
	<title><?= $title ?></title>
	<!-- Google font-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
		rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
		rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
		rel="stylesheet">
	<!-- Font Awesome-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('public/')?>css/fontawesome.css">
	<!-- ico-font-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('public/')?>css/icofont.css">
	<!-- Themify icon-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('public/')?>css/themify.css">
	<!-- Flag icon-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('public/')?>css/flag-icon.css">
	<!-- Feather icon-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('public/')?>css/feather-icon.css">
	<!-- Bootstrap css-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('public/')?>css/bootstrap.css">
	<!-- App css-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('public/')?>css/style.css">
	<link id="color" rel="stylesheet" href="<?= base_url('public/')?>css/color-1.css" media="screen">
	<!-- Responsive css-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('public/')?>css/responsive.css">

	<!-- table start -->
	<?php if ($this->uri->segment(1) == 'daftar_permohonan' || $this->uri->segment(1) == 'daftar_progress'|| $this->uri->segment(1) == 'pesan'|| $this->uri->segment(1) == 'list_user') { ?>
		<link rel="stylesheet" type="text/css" href="<?= base_url('public/')?>css/datatables.css">
		<?php } ?>
		<?php if ($this->uri->segment(2) == 'daftar_permohonan' || $this->uri->segment(2) == 'daftar_progress') { ?>
			
			<link rel="stylesheet" type="text/css" href="<?= base_url('public/')?>css/datatables.css">
	<?php } ?>

	<!-- table end -->
</head>

<body>

	<!-- Loader starts-->
	<!-- <div class="loader-wrapper">
		<div class="theme-loader">
			<div class="loader-p"></div>
		</div>
	</div> -->
	<!-- Loader ends-->
	<!-- page-wrapper Start       -->
	<div class="page-wrapper compact-wrapper" id="pageWrapper">

		<!-- topbar -->
        <?php $this->load->view('partials/topbar');?>
        
		<div class="page-body-wrapper sidebar-icon">
            <!-- sidebar -->
        <?php $this->load->view('partials/sidebar');?>
        <div class="page-body">
		<?php var_dump($this->session->userdata());?>
	<!-- footer -->
		
