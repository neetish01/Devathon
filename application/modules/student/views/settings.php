<title>Settings | NITW TAPS</title>
<h3>Settings Menu</h3>
<hr>
<br>
<div class="row">
	<div class="col s12 m6">
		<a href="<?php echo base_url('auth/change_password')?>" class="waves-effect waves-light  btn">Change Password</a>
	</div>
	<div class="col s12 m6">
		<a href="<?php echo base_url('student/deactivate_req')?>" class="waves-effect waves-light  btn">Request Deactivation</a>
	</div>
	<div class="col s12">
		<br>
		<p>Registered Email:<?php echo $email; ?></p>
	</div>
	<div class="col s12">
		<p>Last Logged in date:<?php echo date("F j, Y, g:i a", $last_login); ?></p>
	</div>
	<div class="col s12">
		<p>Last Logged in IP address:<?php echo $ip_address; ?></p>
	</div>
	<div class="col s12">
		<p>Deactivation Request Status: <?php if($deactivate_status==1){echo  "Deactivation requested.Once approved, you will no longer will be able to log into TAPS.If commited by mistake contact admin immediately.";}else if($deactivate_status==2){echo "Deactivation approved, your account will be closed soon.";}else if($deactivate_status==3){echo "Deactivation declined, contact administrator for further information";}?></p>
	</div>
</div>