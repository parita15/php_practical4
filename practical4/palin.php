<?php
	$no=$_GET["no"];
	$rev=strrev($no);
	if($rev==$no)
	{
		echo "$no is palindrome";
	}
	else
	{
		echo "$no is not palindrome";
	}
?>