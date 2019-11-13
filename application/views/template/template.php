<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>eCosting</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/mdb.min.css">
    <!-- Your custom styles (optional) -->
</head>

<body class="fixed-sn white-skin">
    <input type="" name="" value="<?php echo $this->session->userdata("level"); ?>" id="cek_user" hidden>
    <!--Main Navigation-->
    <header>
        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4 fixed">
            <ul class="custom-scrollbar">
            <!-- Logo -->
                <li class="logo-sn waves-effect" style="border-radius: 25px;">
                    <div class="text-center">
                        <a href="#" class="pl-0"><p style="font-family: fantasy; font-size: 30px;"><span style="color: lightblue;">e</span>Costing</p></a>
                    </div>
                </li>
            <li>
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a href="<?php echo base_url(); ?>dashboard" class="collapsible-header waves-effect"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li id="master_nav"><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-css3"></i> Master<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>dashboard/master" class="collapsible-header waves-effect"><i class="fa fa-database"></i> Edit Kain</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>dashboard/addkain" class="collapsible-header waves-effect"><i class="fa fa-plus"></i> Tambah Kain</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i> View Data<i class="fa fa-angle-down rotate-icon"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>dashboard/data_hpp" class="collapsible-header waves-effect"><i class="fa fa-database"></i> Data Hpp</a>
                                </li>
                                <!--li><a href="<?php echo base_url(); ?>dashboard/" class="collapsible-header waves-effect"><i class="fa fa-plus"></i> Tambah Kain</a>
                                </li-->
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>dashboard/report" class="collapsible-header waves-effect"><i class="fa fa-file-o"></i> Report</a>
                    </li>
                </ul>
            </li>
            <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fa fa-bars"></i></a>
            </div>
            <!-- Breadcrumb-->
            <!--div class="breadcrumb-dn mr-auto">
                <p style="font-family: fantasy; font-size: 30px;"><span style="color: lightblue;">e</span>Costing</p>
            </div-->

            <!--Navbar links-->
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img id="level" style="width:30px; border-radius: 50px;" src="<?php echo base_url(); ?>image/icon/admin.jpg" class="" alt="...">&nbsp;&nbsp;
                        <span style="font-family: fantasy; font-size: 15px;"><?php echo $this->session->userdata("name"); ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a style="font-weight: bold;" class="dropdown-item" href="<?php echo base_url(); ?>dashboard/logout"><i class="fa fa-sign-out"></i> Log Out</a>
                        <!--a class="dropdown-item" href="#">My account</a-->
                    </div>
                </li>
            </ul>
            <!--/Navbar links-->
        </nav>
        <!-- /.Navbar -->
    </header>
    <!--Main Navigation-->
    <script src="<?php echo base_url(); ?>js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            var cu = $("#cek_user").val();
            //alert(cu);
            if (cu == 'USER'){
                    document.getElementById("level").src = "<?php echo base_url(); ?>image/icon/user.jpg";
                $("#master_nav").hide();
            }else{
                $("#master_nav").show();
            }
        })
    </script>
    