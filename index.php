<?php 
include("includes/config.php");

//session_destroy(); //For log out button

if(isset($_SESSION['userLoggedIn'])){
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else{
	header("Location: register.php");
}

 ?>
<html>
<head>
	<title>Welcome to Slotify</title>
</head>
<body>
	Hello World!
</body>
</html>