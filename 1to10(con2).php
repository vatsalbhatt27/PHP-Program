<?php
	for($i=1;$i<=10;$i++)
	{
		if($i==2 || $i==5)
		{
			continue;
		}
		echo"<br>Number is:".$i;
	}
?>