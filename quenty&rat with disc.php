<?php
	$q=100;
	$rat=10;
	$tot;
	$dis=0;
	
	$tot=$q*$rat;
	if($tot>=1000)
	{
		$dis=$tot*10/100;
	}
	else
	{
		$dis=$tot*5/100;
	}
	$tot=$tot-$dis;
	
	echo"<br>Discount is :".$dis;
	echo"<br>Total is :".$tot;
?>