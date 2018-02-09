<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>
<link rel="icon" href="assets/icon/icon.png" type="image/x-icon" />
<body class="is-article-visible" style="background-color:#7dfb64">
		<article class = "mind" style="background-color: #616060;">
			<div class = "close"><a href = "./?page=account">.....</a></div>
		<?php 
		$user_name = $_SESSION [ 'user_name' ];
		$res = $DB->query( "SELECT * FROM clients WHERE user_name ='$user_name'");
		$user = $res->fetch_object();
		?>

<form method="post">
	<input type="hidden" name="action" value="update_user">
	<input type="hidden" name="client_id" value="<?php echo $client_id ?>">
	Username: <input type="text" name="user_name"  value="<?php echo $user ->user_name ?>"><br>
	First Name: <input type="text" name="name"  value ="<?php echo $user->name ?>"><br>
	Middle Name: <input type="text" name="mname"  value="<?php echo $user->mname ?>"><br>
	Last Name: <input type="text" name="lname"  value="<?php echo $user->lname ?>"><br>
	Address: <input type="text" name="address"   value="<?php echo $user->address ?>"><br>
	Birthday: <input type="date" name="birthday" width="50px" style = "color:black" required value="<?php echo $user->birthday ?>"><br><br>
	Email: <input type="text" name="email"  value="<?php echo $user->email ?>"><br>
	Gender: <select name="gender" value="<?php echo $user->gender ?>"><br><br>
			<option>Male</option>
			<option>Female</option><br><br>
	<input type="checkbox" name="terms" required> I accept Terms and Conditions <br><br>
	<input type="submit" value="Update" name="clients" class="btnRegister">
	<?php
	$i=100;
	?>	
</div>
</form>
		</article>
		</body>

<?php element( 'footer' ); ?>