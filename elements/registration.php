<form method="post">
	<input type="hidden" name="action" value="update_client">
	Username: <input type="text" name="username"><br>
	First Name: <input type="text" name="fname"><br>
	Middle Name: <input type="text" name="mname"><br>
	Last Name: <input type="text" name="lname"><br>
	Address: <input type="text" name="address"><br>
	Birthday: <input type="date" name="birthday" width="50px" style = "color:black"><br><br>
	Age: <input type="age" name="age" style="color:black"><br><br>
	Password: <input type="password" name="password"><br>
	Email: <input type="text" name="email"><br>
	Gender: <select name="gender">
			<option>Male</option>
			<option>Female</option>
	<input type="checkbox" name="terms"> I accept Terms and Conditions 
	<input type="submit" value="Register">
	<?php
	$i=100;
	?>	
</div>
</form>