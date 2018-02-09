<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>
<link rel="icon" href="assets/icon/icon.png" type="image/x-icon" />
<body class="is-article-visible" style="background-color:#7dfb64"> 
<div class = "mind" style="background-color: #616060;">
		<div class = "close"><a href = "./?page=default">.....</a></div>
<?php
		if( isset( $_GET[ 'invalid' ] ) ) {
			echo "<h2>Invalid Username or Password. Please try again.</h2>";
		}
		if( isset( $_GET[ 'restricted' ] ) ) {
			echo "<h2>You need to login to access that page.</h2>";
		}
?>
<h1>Login</h1>
<?php element( 'login_form' ) ?>
</div>
</body>
<?php element( 'footer' ); ?>