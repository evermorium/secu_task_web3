<?php

for($i = 1; $i <= 9; $i++)
{
	echo "$i 단";
	echo nl2br("\n");
	for($j = 2 ;$j <=9 ; $j++)
	{     	
	       	$multi = $i * $j;
		echo "$i * $j = $multi ";
		echo nl2br("\n");
		
	}
	echo nl2br("\n");
}

?>
