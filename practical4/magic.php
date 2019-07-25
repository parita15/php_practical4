<?php
	$no=$_GET["no"];
	echo intval($no);
	$sum=0;
	$n=$no;
	while($n>0 || $sum>9)
	{
		if($n==0)
		{
			$n=$sum;
			$sum=0;
		}
		$sum+=$n%10;
		$n=$n/10;
	}
	if($sum==1)
	{
		echo "$no is a magic number";
	}
	else
	{
		echo "$no is not a magic number";
	}
?>