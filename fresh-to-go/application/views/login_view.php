	<div class="container" align="center">
		<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

			<div class="panel panel-info" >
				<div class="panel-title">Log In</div>
				<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>

				<div style="padding-top:30px" class="panel-body" >

					<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

					<?php $attributes = array("name" => "loginform");
					echo form_open("login/index", $attributes);?>

					<div class="alert-danger">
						<?php echo form_error('email'); ?>
					</div>

					<div style="margin-bottom: 25px" class="input-group">
						<input id="email" type="text" class="form-control" name="email" placeholder="Email Address" value="<?php echo set_value('email'); ?>">
					</div>

					<div class="alert-danger">
						<?php echo form_error('password'); ?>
					</div>

					<div style="margin-bottom: 25px" class="input-group">
						<input id="password" type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
					</div>
					

					<div class="form-group">
						<button name="submit" type="submit" class="btn btn-primary">Login</button>
						<button name="cancel" type="reset" class="btn btn-primary">Cancel</button>
					</div>
					<?php echo form_close(); ?>
					<?php echo $this->session->flashdata('msg'); ?>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>
