<!DOCTYPE html>
<html lang="en">
<head>
  <title>Web Mediateca</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="<?php echo base_url()?>/css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="<?php echo base_url()?>/css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="<?php echo base_url()?>/js/jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" src="<?php echo base_url()?>/js/cufon-yui.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>/js/Humanst521_BT_400.font.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>/js/Humanst521_Lt_BT_400.font.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>/js/roundabout.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>/js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>/js/gallery_init.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>/js/cufon-replace.js"></script>
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
      <nav>
        <ul>
            <li><a href="<?php echo base_url()?>">Home</a></li>
            <li><a href="#">Galleria</a></li>
            <!--?php echo $is_logged ? base_url().'logout' : base_url().'login';?--> 
            <li><a href="<?php echo $is_logged ? base_url().'index.php/login/logout' : base_url().'index.php/login';?>"><?php echo $is_logged ? 'Salir' : 'Ingresar';?></a></li>
            <li><a href="#">Ayuda</a></li>
            <li><a href="#">Acerca de</a></li>
        </ul>
      </nav>
    </div>
	</header>