<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>DevOOPS</title>
		<meta name="description" content="description">
		<meta name="author" content="Evgeniya">
		<meta name="keyword" content="keywords">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="<?php echo base_url(); ?>/plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>css/gecko.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
	</head>
<body>
<div class="container-fluid">
	<div id="page-login" class="row">
		<div class="col-xs-12 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			<div class="box">
				<div class="box-content">
					<div class="text-center">
						<h3 class="page-header">DevOOPS Login Page</h3>
					</div>

    <?php echo form_open('login'); ?>
    <p>

      <?php
        echo form_label('Email Address:', 'email_address','class="form-control top"');
        echo form_input('email_address', set_value('email_address'), 'class="form-control top" id="email_address"');
      ?>
    </p>

    <p>
      <?php
        echo form_label('Password:', 'password','class="form-control bottom"');
        echo form_password('password', '', 'id="password" class="form-control bottom"');
      ?>
    </p>
    <br>
<p class="center">
  <?php echo form_submit('submit', 'Login',"class='btn btn-primary'"); ?>
  </p>

    <?php echo form_close(); ?>

    <div class="errors"> <?php echo validation_errors(); ?> </div>

<!-- 					<div class="form-group">
						<label class="control-label">Username</label>
						<input type="text" class="form-control" name="username" />
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
						<input type="password" class="form-control" name="password" />
					</div>
					<div class="text-center">
						<a href="<?php echo base_url(); ?>dashboard" class="btn btn-primary">Sign in</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
