<?php
	$no=$_GET["no"];
	echo intval($no);
	$i=1;
	$sum=0;
	while ($i<$no)
	{
		if($no%$i==0)
		{
			$sum=$sum+$i;
		}
		$i=$i+1;
	}
	if($sum==$no)
	{
		echo "$no is perfect";
	}
	else
	{
		echo "$no is not perfect";
	}
?>