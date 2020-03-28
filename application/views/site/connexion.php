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
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('ressources/plugins/images/favicon.png');?>">
<title>Se connecter à l'intranet</title>
<!-- Bootstrap Core CSS -->
<link href="<?php echo base_url('ressources/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet');?>">
<!-- animation CSS -->
<link href="<?php echo base_url('ressources/css/animate.css" rel="stylesheet');?>">
<!-- Custom CSS -->
<link href="<?php echo base_url('ressources/css/style.css" rel="stylesheet');?>">
<link href="<?php echo base_url('ressources/css/login.css" rel="stylesheet');?>">
<!-- color CSS -->
<link href="<?php echo base_url('ressources/css/colors/default.css" id="theme"  rel="stylesheet');?>">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--Bootsrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

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
<section id="wrapper" class="login-vue">
  <div class="login-box">
    <div class="white-box">
      <div class="form-horizontal form-material" id="loginform">
	  
</br>
      <h3 class="box-title m-b-20">Intranet de l'ANSD</h3>
      <?= form_open('connexion', ['class' => 'form-horizontal']); ?>
					<div class="form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i>Utilisateur</span>
						</div>
						<div class="col-xs-12 <?= empty(form_error('username')) ? "" : "has-error" ?>">
						<?= form_input(['name' => "username", 'id' => "username", 'class' => 'form-control'], set_value('username')) ?>
						<span class="help-block"><?= form_error('username'); ?></span>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i>Mot passe</span>
						</div>
						<div class="col-xs-12 <?= empty(form_error('password')) ? "" : "has-error" ?>">
					<?= form_password(['name' => "password", 'id' => "password", 'class' => 'form-control'], set_value('password')) ?>
								<span class="help-block"><?= form_error('password'); ?></span>
						</div>
					</div>
					<div class="row align-items-center remember">
				
					</div>
					<div class="form-group">
						<div class="col-md-offset-2 col-md-10">
					<?= form_submit("send", "Se connecter", ['class' => "btn btn-default"]); ?>
						</div>
					</div>
				<div class="row">
    <?= form_open('connexion', ['class' => 'form-horizontal']); ?>
    <?php if(! empty( $login_error)) : ?>
      <div class="form-group">
        <div class="col-md-offset-2 col-md-10 has-error">
          <span class="help-block"><?= $login_error; ?></span>
        </div>
      </div>
      <!-- (...) -->
    <?php endif; ?>
    <?= form_close() ?>
	</div>
    </div>
  </div>
</section>
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
<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url('ressources/js/custom.min.js');?>"></script>
<!--Style Switcher -->
<script src="<?php echo base_url('ressources/plugins/bower_components/styleswitcher/jQuery.style.switcher.js');?>"></script>
</body>
</html>
