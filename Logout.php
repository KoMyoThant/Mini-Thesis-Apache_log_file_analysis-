<?php
	session_start();
	unset($_SESSION['auth']);
	unset($_SESSION['id']);
	/*if(isset($_SESSION['auth'])){
		echo "valid";
	}else {
		echo "not valid";
	}*/
	session_destroy();
	//header("location: Log.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
	<div id="logoutid">
		<h1>Logout</h1>
			<br>
			<br>
			<p style="font-size: 20px">You have successfully logouted.</p>
			<a href="Login.php">Login</a>
	</div>
</body>
</html>