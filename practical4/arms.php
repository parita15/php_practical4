<?php
	$no=$_GET["no"];
	echo intval($no);
	$s=0;
	$n=$no;
	while($no>0)
	{
		$d=$no%10;
		$s=$s+$d*$d*$d;
		$no=$no/10;
	}
	if($n==$s)
	{
		echo "$n is armstrong number";
	}
	else
	{
		echo "$n is not armstrong number";
	}
?>