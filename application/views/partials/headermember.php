<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('') ?>assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('') ?>assets/img/kaltim.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>SPK MOORA</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/css/bootstrap.min.css">

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('') ?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url('') ?>assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('') ?>assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('') ?>assets/css/themify-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/datatables.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
               <center><img src="<?php echo base_url()?>assets/img/kaltim.png" height=90 ></center>
                <a href="" class="simple-text">
                    <font><b>SPK METODE MOORA POLRES KUTIM</b></font>
                </a>
            </div>

             <ul class="nav">
                <li>
                    <a href="<?php echo site_url('Home_member')?>">
                        <i class="ti-home"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li>
                        <a href="<?php echo site_url('User')?>">
                            <i class="ti-user"></i>
                            <p>User</p>
                        </a>
                    </li>
                <li>  <!-- class="active"> -->
                    <a href="<?php echo site_url('Kriteria_pegawai')?>">
                        <i class="ti-book"></i>
                        <p>Data Kriteria </p>
                    </a>
                </li>
                 <li>
                    <a href="<?php echo site_url('Alternatif_pegawai')?>">
                        <i class="ti-book"></i>
                        <p>Data Personel</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Nilai_member')?>">
                        <i class="ti-book"></i>
                        <p>Nilai Personel</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('Perhitungan/Perhitungan')?>">
                        <i class="ti-book"></i>
                        <p>Perhitungan Metode</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
