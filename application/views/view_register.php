
<html>
<head></head>
<body>
 <form action="<?php echo base_url()?>user/reg_action" method="POST">
	 <table>
	 <tr>Get Your 30 Days Free Trial</tr>
	 <tr>
	 	<td>Surname</td> 
	 	<td>:</td>
	 	<td><input type="text" name="surname"></td>
	</tr>
	 <tr>
	 	<td>Last Name</td> 
	 	<td>:</td>
	 	<td><input type="text" name="lastname"></td>
	</tr>
	<tr>
	 	<td>Username</td> 
	 	<td>:</td>
	 	<td><input type="text" name="username"></td>
	</tr>
	<tr>
	 	<td>Email</td> 
	 	<td>:</td>
	 	<td><input type="text" name="email"></td>
	</tr>
	<tr>
	 	<td>Job Title</td> 
	 	<td>:</td>
	 	<td>
	 	<select name="title">
	 		<option value="1">1</option>
	 		<option value="2">2</option>
	 		<option value="3">3</option>
	 	</select></td>
	</tr>
	<tr>
	 	<td>Company Name</td> 
	 	<td>:</td>
	 	<td><input type="text" name="company"></td>
	</tr>
	<tr>
		<td>Company Size</td>
		<td>:</td>
		<td>
		<input type="radio" name="size">&lt;50 &nbsp;
		<input type="radio" name="size">50-100 &nbsp; 
		<input type="radio" name="size">&gt;100
		</td>
	</tr>
	<tr>
		<td> <input type="checkbox" name="agree">I agree to the term and condition to join OneHundred</td>
	</tr>
	</table>
	<input type="submit" value="Register">
</form> 
</body>
</html>