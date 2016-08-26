<title>Create User</title>
<h2>Create User</h2>
<hr>
<br>
<div class="container">
	<div class="row">
		<div class="col s12 m8 l9">
			<div class="row">
				<form class="col s12" action="<?php echo base_url('admin/create_user_stat')?>" method="post">
					<div class="row">
						<div class="input-field col s6">
							<input id="first_name" name="first_name" type="text" class="validate">
							<label for="first_name" class="active">First Name</label>
						</div>
						<div class="input-field col s6">
							<input id="last_name" name="last_name" type="text" class="validate">
							<label for="last_name">Last Name</label>
						</div>
						<div class="input-field col s6">
							<input id="roll_number" name="roll_number" type="text" class="validate">
							<label for="roll_number">Roll Number</label>
						</div>
						<div class="input-field col s6">
							<input id="registration_number" name="registration_number" type="text" class="validate">
							<label for="last_name">Registration Number</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="email" name="email" type="email" class="validate">
							<label for="email">Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="phone" name="phone" type="text" class="validate">
							<label for="phone">Phone</label>
						</div>
					</div>
					<div class="row">
						<div class="col s12 m8 l9">
							<label>Select Branch</label>
							<select class="browser-default" name="specialization_id">
								<option value="" disabled="" selected="">Choose your option</option>
								<?php foreach($special as $value){?>
								<option value="<?php echo $value['id']?>"> <?php echo $value['name'];?></option>
								<?php }?>
							</select>
						</div>
					</div>
					<button class="btn cyan waves-effect waves-light right" type="submit" name="action">Create User
                    <i class="mdi-social-person-add right"></i></button>
				</form>
			</div>
		</div>
	</div>
</div>