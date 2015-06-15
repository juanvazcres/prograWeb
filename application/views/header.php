<!DOCTYPE html>
<html lang="en">
<head>
  <title>Web Mediateca</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?php echo base_url()?>/css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="<?php echo base_url()?>/css/style.css" type="text/css" media="all">
  <script data-brackets-id="1453" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>/js/cufon-yui.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>/js/Humanst521_BT_400.font.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>/js/Humanst521_Lt_BT_400.font.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/js/roundabout.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>/js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>/js/gallery_init.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>/js/cufon-replace.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
  <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script data-brackets-id="1465" type="text/javascript">
		$(function(){
			// Option set as a global variable
			$('#loopedSlider').loopedSlider({
				container: ".wrap",
				containerClick: false
			});
		});
	</script>  
    
  <!--[if lt IE 7]>
  	<link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="all">
  <![endif]-->
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
    <script type="text/javascript" src="js/IE9.js"></script>
  <![endif]-->
</head>

<body>
  <!-- header -->
  <header>
    <div class="container">
        
    	<h1><a href="<?php echo base_url()?>">Mediateca</a></h1>
      <?php echo $JuanitoMenu; ?>
    </div>
	</header>