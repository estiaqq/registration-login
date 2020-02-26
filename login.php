<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>


	<form>
	<fieldset>
		<legend>Login</legend>
	<table>
		<tr>
			<td>User ID: </td>
			<td><input type="number" name="" value=""/></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td> <input type="password" name="" value=""/><hr/td >
		</tr>
		
		
		<tr>
			<td td colspan=2 align= left>
				<input type="button" name="" value="Login">
				<a href="reg.php">Register
			</td>
		</tr>
	</table>
	</fieldset>
	</form>
</body>
</html>