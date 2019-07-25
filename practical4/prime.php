<?php
	$no=$_GET["no"];
	echo intval($no);
	$c=2;
	while($c<$no-1)
	{
		if($no%$c==0)
		{
			break;
		}
		$c=$c+1;
	}
	if($c==$no)
	{
		echo "$no is prime";
	}
	else
	{
		echo "$no is not prime";
	}
?>