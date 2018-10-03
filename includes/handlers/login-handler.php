<?php
if (isset($_POST['loginButton'])) {
	$username = $_POST['loginUsername'];
	$password = $_POST['loginPassword'];

	$result = $account->login($username, $password);

	if($result == true){
		$_SESSION['userLoggedIn'] = $username;
		header("Location: index.php"); //Go to index.php if true i.e. a page redirect
	}
}
?>