<?php

	require("dbconfig.php");
	if($user->is_loggedin())
	{
		$user->logout();
		$user->redirect("loggedin.php"); //home page
	}

	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		
		if($user->login($email,$upass))
		{
			redirect("loggedin.php"); // redirect can change according to design if model is usedj
		}
		

	}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src = "javascript/jquery-3.2.1.js"></script>
	<script type="text/javascript" src = "javascript/user_login.js"></script>
</head>
<body>
	<form action = "login.php" method = "post" id = "login_form">
		<input id = "login_email" type = "text" placeholder = "email" name = "email">
		<span id = "err_login_email" ><?php if(isset($err_login_email)) {echo $err_login_email;}?></span>
		<input id = "login_password" type = "password" placeholder = "password" name = "password">
		<span id = "err_login_password"><?php if(isset($err_login_password)){echo $err_login_password;}?></span>
		<input id = "login" type = "submit" name = "login" value = "login">
	</form>
	<a href = "forgot_password.php?table=participants">forgot password ?</a> <!--forgot password sending mail-->

</body>
</html>