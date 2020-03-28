<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Intranet de l'ANSD</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('ressources/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet');?>">
    <!-- Menu CSS -->
    <link href="<?php echo base_url('ressources/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet');?>">
    <!-- toast CSS -->
    <link href="<?php echo base_url('ressources/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet');?>">
    <!-- morris CSS -->
    <link href="<?php echo base_url('ressources/plugins/bower_components/morrisjs/morris.css" rel="stylesheet');?>">
    <!-- animation CSS -->
    <link href="<?php echo base_url('ressources/css/animate.css" rel="stylesheet');?>">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('ressources/css/style.css" rel="stylesheet');?>">
    <!-- color CSS -->
    <link href="<?php echo base_url('ressources/css/colors/default.css" id="theme" rel="stylesheet');?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Debut Navigation -->
        <?php $this->load->view('menu/nav') ?>
       <!--Fin Nabigation -->
        <!-- Left navbar-header -->
        <?php $this->load->view('menu/sidebar.php') ?>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Mon Compte</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                         <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Dashboard 1</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="col-md-12 col-sm-12">
                                <div class="white-box">
                                    <h3 class="box-title">Total de mes articles</h3>
                                    <ul class="list-inline two-part">
                                        <li><i class="icon-folder-alt text-danger"></i></li>
                                        <li class="text-right"><span class="counter">11</span></li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-5 col-sm-6">
                        <div class="row">
                            <!-- .col -->
                            <div class="col-md-6 col-sm-12">
                                <div class="white-box text-center bg-megna">
                                    <h1 class="text-white counter">2</h1>
                                    <p class="text-white">Consulter mes articles</p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-6 col-sm-12">
                                <div class="white-box text-center bg-inverse">
                                    <h1 class="text-white counter">2</h1>
                                    <p class="text-white">Soumis</p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-6 col-sm-12">
                                <div class="white-box text-center bg-info">
                                    <h1 class="counter text-white">2</h1>
                                    <p class="text-white">En cours</p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                            <div class="col-md-6 col-sm-12">
                                <div class="white-box text-center bg-danger">
                                    <h1 class="text-white counter">6</h1>
                                    <p class="text-white">Rejetés</p>
                                </div>
                            </div>
                            <!-- /.col -->
                            <!-- .col -->
                           
                            <!-- /.col -->
                        </div>
                    </div>
                </div>
                 
                
                 
                <!-- /.row -->
                <!--/.row -->
                 
                <!-- .right-sidebar -->
              
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> Abdoul Aziz Kebe </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url('ressources/plugins/bower_components/jquery/dist/jquery.min.js');?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('ressources/bootstrap/dist/js/bootstrap.min.js');?>"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url('ressources/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js');?>"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url('ressources/js/jquery.slimscroll.js');?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('ressources/js/waves.js');?>"></script>
    <!--Counter js -->
    <script src="<?php echo base_url('ressources/plugins/bower_components/waypoints/lib/jquery.waypoints.js');?>"></script>
    <script src="<?php echo base_url('ressources/plugins/bower_components/counterup/jquery.counterup.min.js');?>"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url('ressources/plugins/bower_components/raphael/raphael-min.js');?>"></script>
    <script src="<?php echo base_url('ressources/plugins/bower_components/morrisjs/morris.js');?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('ressources/js/custom.min.js');?>"></script>
    <script src="<?php echo base_url('ressources/js/dashboard1.js');?>"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo base_url('ressources/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js');?>"></script>
    <script src="<?php echo base_url('ressources/plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js');?>"></script>
    <script src="<?php echo base_url('ressources/plugins/bower_components/toast-master/js/jquery.toast.js');?>"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $.toast({
            heading: 'Welcome to Pixel admin',
            text: 'Use the predefined ones, or specify a custom position object.',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
    });
    </script>
    <!--Style Switcher -->
    <script src="<?php echo base_url('ressources/plugins/bower_components/styleswitcher/jQuery.style.switcher.js');?>"></script>
</body>

</html>
