<?php
	$tot=0;
	for($i=1;$i<=10;$i++)
	{
			echo"<br>Number is :".$i;
			$tot=$tot +$i;
	}
	$avg=$tot/10;
	echo"<br>Total is :".$tot;
	echo"<br>Avg is :".$avg;
?>	