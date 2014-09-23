<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Simple Login Page</title>
	</head>
	<body>
		<div>
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

		</div>
	</body>
</html>
