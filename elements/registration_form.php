<form method="post">
	<input type="hidden" name="action" value="validate_client">
	Username: <input type="text" name="user_name" placeholder="username" maxlength="10" required><br>
	First Name: <input type="text" name="name" placeholder="firstname" required ><br>
	Middle Name: <input type="text" name="mname" placeholder="middlename" required><br>
	Last Name: <input type="text" name="lname" placeholder="lastname" required><br>
	Address: <input type="text" name="address"  placeholder="address" required><br>
	Birthday: <input type="date" name="birthday" width="50px" placeholder="birthday" style = "color:black" required><br><br>
	Email: <input type="email" name="email"  placeholder="email_address" required><br>
	Password: <input type="password" name="user_pass" placeholder="password" maxlength="9" required><br>
	Gender: <select name="gender" required><br><br>
			<option>Male</option>
			<option>Female</option>
			</select><br>
	<label>Terms & Condition</label><br>
	<div style="border: 2px solid white; height: 100px; overflow: auto; padding: 10px;position:relative;bottom:20px;align:justify">
                <p>This registration is very important to download the application use <br>
                during emergency. It is not allow to share to other without registration<br>
                status</p>
    </div>
	<input type="checkbox" name="agree" value="agree" id="terms" onchange="activateInput(this)" required=""> I accept Terms and Conditions<br><br>
	<input type="submit" value="Register" id="submit" name="users" class="btnRegister">
	<?php
	$i=100;
	?>	
</div>
</form>
</body>
