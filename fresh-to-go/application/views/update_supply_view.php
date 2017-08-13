<?php 
$id 				= $supply->id;
if($this->input->post('is_submitted'))
{
	$supply_name          = set_value('supply_name');
	$supply_description   = set_value('supply_description');
	$supply_category      = set_value('supply_category');
	$supply_price         = set_value('supply_price');
	$supply_stock         = set_value('supply_stock');
	$supply_sale          = set_value('supply_sale');
}else{

	$supply_name          = $supply->supply_name;
	$supply_description   = $supply->supply_description;
	$supply_category      = $supply->supply_category;
	$supply_price         = $supply->supply_price;
	$supply_stock         = $supply->supply_stock;
	$supply_sale          = $supply->supply_sale;
	
}//end if 	is_submitted

?>

<!DOCTYPE html>
<html>
<head>
	<title>yo</title>

	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>

<body>

	<?php echo validation_errors();?>
	<?php echo form_open_multipart('supply/edit/'.$id,['class'=>'form-group']); ?>
	<div class="col-sm-4">
		<div class="input-group">
			<div class="input-group-addon">Name</div>
			<input type="text" class="form-control" name="supply_name" placeholder="Enter Product Name" value="<?php echo $supply_name; ?>">
		</div>
	</div>

	<div class="col-sm-4">
		<div class="input-group">
			<div class="input-group-addon">Category</div>
			<select type="text" class="form-control" name="supply_category" value="<?php echo set_value('supply_category'); ?>">
					<option value="">Choose Category</option>
					<option>Poultry</option>
					<option>Seafood</option>
					<option>Meat</option>
			</select>
		</div>
	</div>

	<div class="input-group-addon">Description</div>
	<div class="col-sm-4">
		<div class="input-group col-sm-12">
			<textarea rows="4" class="form-control" name="supply_description" placeholder="Enter Product Description"><?php echo $supply_description; ?></textarea>
		</div>
	</div>
	<div class="col-sm-12"><hr></div>
	<div class="col-sm-2">
		<div class="input-group">
			<div class="input-group-addon">Price</div>
			<input type="text" class="form-control" name="supply_price"  value="<?php echo $supply_price; ?>">
			<div class="input-group-addon">$</div>
		</div>
	</div>

	<div class="col-sm-3">
		<div class="input-group">
			<div class="input-group-addon">Available Stock</div>
			<input type="text" class="form-control" name="supply_stock" value="<?php echo $supply_stock; ?>">
		</div>
	</div>

	<div class="col-sm-2">
		<div class="input-group">
			<div class="input-group-addon">Sale</div>
			<input type="text" class="form-control" name="supply_sale" value="<?php echo $supply_sale; ?>">
			<div class="input-group-addon">%</div>
		</div>
	</div>

	<!-- <div class="col-sm-3">
		<div class="input-group">
			<input type="file" name="userfile">
		</div>
	</div> -->

	<div class="col-sm-1">
		<div class="input-group">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</div>
	<div class="col-sm-1">
		<div class="input-group">

			<?=  anchor('home','Cancel',['class'=>'btn btn-danger']) ?>
		</div>
	</div>


	<?php echo form_close(); ?>
</body>
</html>