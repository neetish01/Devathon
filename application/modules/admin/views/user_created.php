<title>Created User</title>
<h2>User Created</h2>
<hr>
<br>
<div class="container">
	<div class="row">
		<div class="col s12 m8 l9">
			<div class="row">
				<a class="btn-flat waves-effect blue accent-2 white-text" href="<?php echo base_url('admin/create_user')?>"><i class="mdi-communication-comment left"></i>Create Another User</a>
				<form class="col s12" action="<?php echo base_url('admin/create_user_email')?>" method="post">
					<div class="row">
						<div class="input-field col s6">
							<input readonly id="first_name" name="first_name" value="<?php echo $first_name;?>" type="text" class="validate">
							<label for="first_name" class="active">First Name</label>
						</div>
						<div class="input-field col s6">
							<input readonly id="last_name" name="last_name" value="<?php echo $last_name;?>" type="text" class="validate">
							<label for="last_name">Last Name</label>
						</div>
						<div class="input-field col s6">
							<input readonly id="roll_number" name="roll_number" value="<?php echo $roll_number;?>" type="text" class="validate">
							<label for="roll_number">Roll Number</label>
						</div>
						<div class="input-field col s6">
							<input readonly id="registration_number" name="registration_number" value="<?php echo $registration_number;?> "type="text" class="validate">
							<label for="last_name">Registration Number</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input readonly id="email" name="email" type="email" value="<?php echo $email;?>" class="validate">
							<label for="email">Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input readonly id="phone" name="phone" type="text" value="<?php echo $phone;?>" class="validate">
							<label for="phone">Phone</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input readonly id="phone" name="special" type="text" value="<?php echo $specialization_id;?>" class="validate">
							<label for="phone">Specialization</label>
						</div>
					</div>
					<button <?php if($email_disable=1){echo "disable";}?> class="btn cyan waves-effect waves-light right" type="submit" name="action">Send Email
                    <i class="mdi-social-person-add right"></i></button>
				</form>
			</div>
		</div>
	</div>
</div>