<?php
	$s=1000;
	$b;
	$ns;
	
	if($s<=5000)
	{
		$b=$s*10/100;
	}
	else
	{
		$b=$s*5/100;
	}
	$ns=$s+$b;
	echo"<br>Bonus is :".$b;
	echo"<br>Net Salary is :".$ns;
?>