<?php
	$un=$_GET["uname"];
	$pd=$_GET["passwd"];
	echo "username is:".$un."<br>";
	echo "password is:".$pd."<br>";
	$username="admin";
	$password="abc123";
	if($un==$username || $pd==$password)
	{
		echo "Succesfully login";
	}
	else
	{
		echo "invalid username or password";
	}
?>