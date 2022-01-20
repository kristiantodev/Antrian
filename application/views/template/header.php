<!DOCTYPE html>
<html>

    <head>
        
        <title>Sistem Antrian</title>
        
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/udang.ico">
        <link href="<?php echo base_url();?>assets/plugins/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/morris/morris.css">
        <!-- DataTables -->
        <link href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url();?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body class="bg-muted">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a class="logo">
                        <span>
                            <img src="<?php echo base_url();?>assets/images/cic.png" alt="" height="70" width="154">
                        </span>
                        <i>
                            <img src="<?php echo base_url();?>assets/images/logo-sm-light.png" alt="" height="22">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="navbar-right d-flex list-inline float-right mb-0">
                        
 <li><!-- <img src="<?php echo base_url();?>assets/images/cic.png" alt="" height="70" width="154">--></li>
                        
                          <li class="dropdown notification-list">
                            <div class="dropdown notification-list nav-pro-img">
                                                                                                
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect waves-light">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>                        
                        <li class="d-none d-sm-block">
                            
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu side-menu-light">
                <div class="slimscroll-menu" id="remove-scroll">



<div class="user-details">
                        <div class="float-left mr-2">
                            
                        </div>
                        <div class="user-info">
                        </div>
                    </div>


                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">


                        <li>
                                <a href="<?php echo site_url();?>antrian/simulasi" class="waves-effect">
                                    <font color=""><i class="fas fa-balance-scale "></i></font><span> Simulasi Antrian </span>
                                </a>
                            </li>    

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->