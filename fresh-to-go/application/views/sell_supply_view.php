	<div style="padding-top:30px" class="panel-body" >

		<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

		<?php $attributes = array("name" => "supplyform");
		echo form_open("supply/index", $attributes);?>
		<div class="col-sm-4">
			<div class="input-group" style="margin-bottom: 25px">
				<div class="input-group-addon">Supply Name</div>
				<input type="text" class="form-control" name="supply_name" placeholder="Name" value="<?php echo set_value('supply_name'); ?>">
			</div>
		</div>

		<div class="col-sm-4">
			<div class="input-group" style="margin-bottom: 25px">
				<div class="input-group-addon">Supply Description</div>
				<textarea rows="4" class="form-control" name="supply_description" placeholder="Description" value="<?php echo set_value('supply_description'); ?>"></textarea>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="input-group" style="margin-bottom: 25px">
				<div class="input-group-addon">Category</div>
				<select type="text" class="form-control" name="supply_category" value="<?php echo set_value('supply_category'); ?>">
					<option value="">Choose Category</option>
					<?php foreach ($categories as $cat) : ?> 
                    	<option><?=  $cat->cat_name ?></option>
                	<?php endforeach; ?>
					<!-- <option>Beans, Grains, Nuts</option>
					<option>Canned Goods</option>
					<option>Cheese, Milk, Dairy Products</option>
					<option>Eggs</option>
					<option>Fruits</option>
					<option>Seafood</option>
					<option>Meat</option>
					<option>Poultry</option>
					<option>Vegetables</option> -->
				</select>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="input-group" style="margin-bottom: 25px">
				<div class="input-group-addon">Price $</div>
				<input type="text" class="form-control" name="supply_price" placeholder="Name" value="<?php echo set_value('supply_price'); ?>">
			</div>
		</div>	

		<div class="col-sm-4">
			<div class="input-group" style="margin-bottom: 25px">
				<div class="input-group-addon">Available Stock</div>
				<input type="text" class="form-control" name="supply_stock" value="<?php echo set_value('supply_stock'); ?>">
			</div>
		</div>

		<div class="col-sm-4">
			<div class="input-group" style="margin-bottom: 25px">
				<div class="input-group-addon">Sale</div>
				<input type="text" class="form-control" name="supply_sale" value="<?php echo set_value('supply_sale'); ?>">
				<div class="input-group-addon">%</div>
			</div>
		</div>

		<div class="col-sm-1">
			<div class="input-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>
		<div class="col-sm-1">
			<div class="input-group">

				<?=  anchor('home','Cancel',['class'=>'btn btn-danger']) ?>
			</div>
		</div>


		<?php echo form_close(); ?>
		<?php echo $this->session->flashdata('emsg'); ?>

	</div><!-- /..panel-body -->
</div><!-- /..panel panel-default -->
<?php //echo $this->session->flashdata('msg'); ?>
<?php //echo $this->session->flashdata('emsg'); ?>
</div> 


</div>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
</body>
</html>