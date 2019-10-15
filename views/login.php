<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url();?>assets1/css/login.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets1/scss/skin.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> -->
    <script src=" ./javascript/login.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="../javascript/login.js"></script> -->
    <!-- application\views\javascript\login.js -->
   
</head>
<body>
	<div class="login">
		<img src="..\assets1\img\man.png" alt="user">    
	<form>
		<center><table>
			<tr>
				<td>NAME:</td>
				<td><input type="text" id="name" placeholder="Enter the user name"></td>
			</tr>
			<tr>
				<td>PASSWORD:</td>
				<td><input type="password" id="password" placeholder="Enter the password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="LOGIN" onclick="loginform();"></td>
			</tr>
				<td></td>
				<td><a href="#">Forgot password</a></td>
			
		</table></center>
		<p>Or</p>
		<center><a href="registration.php">SIGN UP </a></center>
	</form>
	</div>
</body>
</html>