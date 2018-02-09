<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>AENS Website!!!</title>
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=yes"> <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <meta name="HandheldFriendly" content="true">
		<meta name="viewport" content="width=device-width, initial-scale=.5, maximum-scale=12.0, minimum-scale=.25, user-scalable=yes"/>
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/style.css" />
		<link rel="icon" href="assets/icon/icon.png" type="image/x-icon" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css" type="text/css"  />
		<script src="script.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	</head>

	<div id="wrapper">
				
				<!-- Header -->
					<header id="header" style="background-color: #7dfb64;">
						<div class="logo">
							<span class="icon fa-plus"></span>
						</div>
						<div class="content" style="background-color: whitesmoke;">
							<div class="inner">
								<h1 style = "font-family:Arial Rounded MT;color:black;text-shadow:white 5px 3px 4px; font-size:20px">AMBULANCE EMERGENCY NOTIFICATION SYSTEM USING ANDROID TECHNOLOGY</h1>
								<p style="text-shadow:white 10px 3px 4px; font-size:10px;color:black;font-family:Arial;"><!--[-->Iloilo City Emergency Response (ICER)</a><!--]--><br />
								<!--[-->Cor. J.M. Basa –Peralta St.,City Proper, Iloilo City Philippines 5000 <!--]--></p>
							</div>
						</div>


					   <!-- Collect the nav links, forms, and other content for toggling -->
					   <nav>   
					      <ul style = "text-shadow:white 1px 1px 1px;border:3px solid #7dfb64;font-size:10px;">
					        <li class="active"><a href="./">Home<span class="sr-only"></span></a></li> 
					        <li><a href="./?page=one">Emergency Tips</a></li>
					        <li><a href="./?page=login">Registration</a></li>
					        <li><a href="./?page=about">About</a></li>
					    </ul>
						</nav>
		
	</div>	
				
			<?php 
				if( !empty( $MESSAGE ) ) {
					echo "<div class='row'><div class='col-lg-12'><div class='alert alert-$MESSAGE_TYPE'>$MESSAGE</div></div></div>";
				} 
			?>
			<div class="main-content row"></div>				
				<div class="col-lg-8 col-md-8"></div>

		<style>
			/* Tablet Landscape */ @media screen and (max-width: 1060px) { #primary { width:67%; } #secondary { width:30%; margin-left:3%;} } /* Tabled Portrait */ @media screen and (max-width: 768px) { #primary { width:100%; } #secondary { width:100%; margin:0; border:none; } }
		</style>

</header>
</body>
</html>