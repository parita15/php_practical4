<?php
	$no=$_GET["no"];
	for($i=1;$i<=10;$i++)
	{
		print($no."*".$i."=".$i*$no);
		echo "<br>";
	}
?>