
<html>
<head></head>
<body>
 <form action="<?php echo base_url()?>user/login_action" method="POST">
	 <table>
	 <tr>SIGN IN</tr>
	 <tr>
	 	<td>Username</td> 
	 	<td>:</td>
	 	<td><input type="text" name="username"></td>
	</tr>
	 <tr>
	 	<td>Password</td> 
	 	<td>:</td>
	 	<td><input type="password" name="pass"></td>
	</tr>
	<tr>
		<td><input type="checkbox" name="remember">Remember Me?</td>
	</tr>
	</table>
	<input type="submit" value="Sign me in">
</form> 
<a href="">I forgot my password</a>
<br>
<a href="">Register</a>
</body>
</html>