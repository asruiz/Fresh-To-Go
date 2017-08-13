<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- 	<title>Fresh To Go</title>
 -->	
	<title><?php echo $title; ?></title>

	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/shop-homepage.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/creative.min.css"); ?>">
	<link rel="stylesheet" href="<?php echo base_url("assets/css/magnific-popup.css"); ?>">

	<link rel="stylesheet" href="<?php echo base_url("assets/css/font-awesome.min.css");?>" >
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>
    
</head>
<body>
	<nav class="navbar navbar-toggleable-md sticky-top navbar-light bg-faded">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<?php if ($this->session->userdata('login') && $this->session->userdata('urole')==1){ ?>
				<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/profile">Fresh To Go</a>
				<a class="nav-item nav-link active" href="#">Hello <?php echo $this->session->userdata('uname'); ?>!</a>
				<a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/profile">Profile</a>
				<a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/settings">Settings</a>
				<a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/home/logout">Log Out</a>
				<?php } ?>

				<?php if ($this->session->userdata('login') && $this->session->userdata('urole')==2){ ?>
				<a class="navbar-brand" href="<?php echo base_url(); ?>index.php/buyer">Fresh To Go</a>
				<a class="nav-item nav-link active" href="#">Hello <?php echo $this->session->userdata('uname'); ?>!</a>
				<a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/profile">Profile</a>
				<a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/settings">Settings</a>
				<a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/buyer/cart">My Carts : <?=  $this->cart->total_items()?> <i class="fa fa-shopping-cart"></i></a>
				<a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/home/logout">Log Out</a>
				<?php } ?>

				<?php if($this->session->userdata('urole')!=1 && $this->session->userdata('urole')!=2) { ?>
				<a class="navbar-brand" href="welcome">Fresh To Go</a>
				<a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/signup">Register</a>
				<a class="nav-item nav-link" href="<?php echo base_url(); ?>index.php/login">Log in</a>
				<?php } ?>
			</div><!-- 
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="text" placeholder="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form> -->
		</div>
	</nav>

