<!DOCTYPE html>
<html>
	<head>
		<title>Slider - Banner Resposive :: Urian Viera</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">

		<!-- Fonts-->
		<link rel="stylesheet" type="text/css" href="assets/fonts/fontawesome/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
		<link type="text/css" rel="shortcut icon" href="assets/img/favicon.ico"/>
		

		<link rel="stylesheet" type="text/css" href="assets/css/grid.css">
		<link rel="stylesheet" type="text/css" id="app-stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="assets/css/cargando.css">
		<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
		<link rel="stylesheet" type="text/css" href="assets/css/micss.css">

		<!----css banner --->
		<link rel="stylesheet"  href="banner/dist/zoomslider.css"/>
		<script type="text/javascript" src="banner/js/modernizr-2.6.2.min.js"></script>
		<link rel="stylesheet" href="banner/cssbanner.css">

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body>

	<!-- cargando -->
	<div class="cargando">
	    <div class="loader-outter"></div>
	    <div class="loader-inner"></div>
	</div>
	<!-- fin -->
	


		<div class="page-wrap" id="root">
			<?php
		    include('config.php');
			include('menu.php'); 
			?>
			
			<div class="md-content">
				<div class="hero" id="id-1">
					<div class="hero__wrapper">
						
						<?php
							$sqlBanner   = ("SELECT * FROM banner");
							$queryBanner = mysqli_query($con, $sqlBanner);
							$DataBanner  = mysqli_fetch_array($queryBanner);
						?>

						<div id="demo-1" data-zs-src='["<?php echo $DataBanner['bannerOne']; ?>", "<?php echo $DataBanner['bannerTwo']; ?>", "<?php echo $DataBanner['bannerThree']; ?>", "<?php echo $DataBanner['bannerFourt']; ?>" , "<?php echo $DataBanner['bannerFive']; ?>" ]' data-zs-overlay="dots">    
						    
						    
						    <div class="demo-inner-content">
						    	<br><br>
						    	<br><br>
						    	<br><br>
						    	<br><br>
						       <h1 id="titleBanner">
						       	Bienvenidos..!
						       </h1>
						    </div>
						
						</div>

					
					</div>
				</div>

			<div class="col-md-12 col-lg-12 mt-5">
				<h4 class="mt-5 text-center"> Aqui el contenido de la Web</h4>
			</div>

		</div>


	<script  src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<script type="text/javascript" src="assets/js/menu.js"></script>
		
	<!---Importante para hacer funcionar el Banner -->
	<script type="text/javascript" src="banner/dist/jquery.zoomslider.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
		setTimeout(function () {
     $(".cargando").hide();
    }, 500);

	 });
	</script>

		<!-- I AM WEB DEVELOPER ENGINEER URIAN VIERA ---->
		<!--- https://blogangular-c7858.web.app --->
		<!--- http://mywebsite.rf.gd --->
	</body>
</html>