<?php
	$s=10;
	$e=20;
	echo"<br>odd";
	for($i=$s;$i<=$e;$i++)
	{
		if($i%2!=0)
		{
			echo"<br>Number is :".$i;
		}	
	}
	echo"<br>Even";
	for($i=$s;$i<=$e;$i++)
	{
		if($i%2==0)
		{
			echo"<br>Number is :".$i;
		}	
	}
?>