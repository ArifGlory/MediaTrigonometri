<!DOCTYPE html>
<html lang="en" class="">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Media Pembelajaran Trigonometri</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/stroke-7/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/lib/jquery.nanoscroller/css/nanoscroller.css" />
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
	<link rel="stylesheet" type="text/css"
		href="<?php echo base_url();?>assets/lib/theme-switcher/theme-switcher.min.css" />
	<link type="text/css" href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
	<script src="<?php echo base_url();?>assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
  	<script src="<?php echo base_url();?>assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js" type="text/javascript"></script>
 	 <script src="<?php echo base_url();?>assets/js/main.js" type="text/javascript"></script>
	  <style type="text/css">
.bgimg {
	background-image: url('<?php echo base_url();?>assets/img/green_landscape.jpg');
	width:inline-block;
	background-repeat: repeat-y;
}

/* Layout */
/* .main {
    display: flex;
    padding: 2em;
    height: 90vh;
    justify-content: center;
    align-items: middle;
} */

.clockbox,
#clock {
    width: 100%;
}

/* Clock styles */
.circle {
    fill: none;
    stroke: #000;
    stroke-width: 9;
    stroke-miterlimit: 10;
}

.mid-circle {
    fill: #000;
}
.hour-marks {
    fill: none;
    stroke: #000;
    stroke-width: 9;
    stroke-miterlimit: 10;
}

.hour-arm {
    fill: none;
    stroke: #000;
    stroke-width: 17;
    stroke-miterlimit: 10;
}

.minute-arm {
    fill: none;
    stroke: #000;
    stroke-width: 11;
    stroke-miterlimit: 10;
}

.second-arm {
    fill: none;
    stroke: #000;
    stroke-width: 4;
    stroke-miterlimit: 10;
}

/* Transparent box ensuring arms center properly. */
.sizing-box {
    fill: none;
}

/* Make all arms rotate around the same center point. */
/* Optional: Use transition for animation. */
#hour,
#minute,
#second {
    transform-origin: 300px 300px;
    /*transition: transform .5s ease-in-out;*/
}

</style>

</head>

<body>
	<html lang="en" class="">
	<div class="am-wrapper am-fixed-sidebar">
		<nav class="navbar navbar-default navbar-fixed-top am-top-header">
			<div class="container-fluid">
				<div class="navbar-header">
					<div class="page-title"><span></span></div><a href="#"
						class="am-toggle-left-sidebar navbar-toggle collapsed"><span
							class="icon-bar"><span></span><span></span><span></span></span></a><a href="<?php echo base_url();?>Utama/dashboard"
						class=""></a>
				</div>
				
				<div id="am-navbar-collapse" class="collapse navbar-collapse">
					<ul class="nav navbar-nav am-user-nav">
						<li class="dropdown"><a href="dashboard2.php-theme=default.html#" data-toggle="dropdown"
								role="button" aria-expanded="false" class="dropdown-toggle">
								<img src="<?php echo base_url();?>assets/img/logo_uin3.jpg"><span
									class="user-name">Media Trigonometri</span><span
									class="angle-down s7-angle-down"></span></a>
							<ul role="menu" class="dropdown-menu">
								<li><a href="<?php echo base_url();?>Utama"> <span
											class="icon s7-power"></span>Keluar</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav am-top-menu">
						<li><a href="<?php echo base_url();?>Utama/dashboard">Home</a></li>
						
					</ul>
					<ul class="nav navbar-nav am-icons-nav">	
					</ul>
				</div>
			</div>
		</nav>