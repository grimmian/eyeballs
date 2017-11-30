<?php
	$username = $_POST["username"];
	$password = $_POST["password"];
		if ($username == "user" && $password == "password"){
		header("Location: shopping.html");
		}
		else {															
		header("Location: login.html");
		}
?>
