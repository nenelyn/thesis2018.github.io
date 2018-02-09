<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>
<?php element('header2') ?>
<body class="is-article-visible" style="background-color:#7dfb64">

<div class = "mind" style="background-color: #616060;">
		<div class = "close"><a href = "./?page=default">.....</a></div>
<?php

	if( isset( $_GET[ 'invalid' ] ) ) {
			echo "<h2>Invalid Registration. Please try again.</h2>";
		}
	if( isset( $_GET[ 'restricted' ] ) ) {
			echo "<h2>You need to Register.</h2>";
		}
	?>

	<h1>Create Account</h1>
	<?php element( 'registration_form' ) ?>
	


</div>
</body>
	<?php element('footer') ?>
