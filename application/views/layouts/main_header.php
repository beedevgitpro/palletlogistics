<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="endless admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, endless admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo base_url('assets/images/favicon.jpg')?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.jpg')?>" type="image/x-icon">
    <title>Pallet Logistics</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/asset/css/fontawesome.css')?>">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/asset/css/icofont.css')?>">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/asset/css/themify.css')?>">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/asset/css/flag-icon.css')?>">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/asset/css/feather-icon.css')?>">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/asset/css/owlcarousel.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/asset/css/prism.css')?>">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/asset/css/bootstrap.css')?>">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/asset/css/style.css')?>">
    <link id="color" rel="stylesheet" href="<?php echo base_url('assets/asset/css/light-1.css')?>" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/asset/css/responsive.css')?>">
    <link href="https://www.jqueryscript.net/demo/Multi-column-Dropdown-Plugin-jQuery-Inputpicker/src/jquery.inputpicker.css" rel="stylesheet" type="text/css">
     <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />

  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader bg-white">
        <div class="whirly-loader"> </div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
      <!-- Page Header Start-->
      <?php $this->load->view('layouts/nav-header');?>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php $this->load->view('layouts/left-sidebar');?>
        <!-- Page Sidebar Ends-->
        <!-- Right sidebar Start-->
        <?php $this->load->view('layouts/right-sidebar');?>
        <!-- Right sidebar Ends-->