<?php
	$s=5;
	$e=10;
	if($s<=$e)
	{
		for($i=$s;$i<=$e;$i++)
		{
			echo"<br>Number is :".$i;
		}	
	}
	else
	{
		for($i=$e;$i<=$s;$i++)
		{
			echo"<br>Number is :".$i;
		}	
	}
?>