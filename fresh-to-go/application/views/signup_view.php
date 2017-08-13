	<div class="container" align="center">
		<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

			<div class="panel panel-info" >
				<div class="panel-heading">
					<div class="panel-title">Register</div>
				</div> 

				<div style="padding-top:30px" class="panel-body" >
					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>    
					<?php $attributes = array("name" => "signupform");
					echo form_open("signup/index", $attributes);?>

					<div class="btn-group"  data-toggle="buttons" style="margin-bottom: 25px">
						<label class="btn btn-primary">
							<input type="radio" name="role" value="1" <?php echo set_radio('role', '1'); ?>>
							Supplier
						</label>
						<label class="btn btn-primary">
							<input type="radio" name="role" value="2" <?php echo set_radio('role', '2'); ?>>
							Buyer
						</label>
						<span class="text-danger"><?php echo form_error('role'); ?></span>
					</div>

					<div style="margin-bottom: 25px" class="input-group">
						<input id="fname" type="text" class="form-control" name="fname" placeholder="First Name" value="<?php echo set_value('fname'); ?>">
						<span class="text-danger"><?php echo form_error('fname'); ?></span>
					</div>

					<div style="margin-bottom: 25px" class="input-group">
						<input id="lname" type="text" class="form-control" name="lname" placeholder="Last Name" value="<?php echo set_value('lname'); ?>">
						<span class="text-danger"><?php echo form_error('lname'); ?></span>
					</div>

					<div style="margin-bottom: 25px" class="input-group">
						<input id="email" type="text" class="form-control" name="email" placeholder="Email Address" value="<?php echo set_value('email'); ?>">
						<span class="text-danger"><?php echo form_error('email'); ?></span>
					</div>

					<div style="margin-bottom: 25px" class="input-group">
						<input id="password" type="password" class="form-control" name="password" placeholder="Password">
						<span class="text-danger"><?php echo form_error('password'); ?></span>
					</div>

					<div style="margin-bottom: 25px" class="input-group">
						<input id="cpassword" type="password" class="form-control" name="cpassword" placeholder="Confirm Password">
						<span class="text-danger"><?php echo form_error('cpassword'); ?></span>
					</div>

					<div class="form-group">
						<button name="submit" type="submit" class="btn btn-primary">Signup</button>
						<button name="cancel" type="reset" class="btn btn-primary">Cancel</button>
					</div>
					<?php echo form_close(); ?>
					<?php echo $this->session->flashdata('msg'); ?>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>