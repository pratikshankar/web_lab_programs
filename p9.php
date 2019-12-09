<?php
$array="Texas Alabama Mississippi Massachusetts Kansas";
$newarray=array();
$statearray=explode(" ",$array);
print("The origunal array is as follows <br>");
foreach($statearray as $i=>$value)
{
	print("$i state is => $value <br>");
	
	
}
foreach($statearray as $states)
{
	if(preg_match('/xas$/',($states)))
	{
		$newarray[0]=$states;
		print("$newarray[0]");
	}
	if(preg_match('/^k.*s$/i',($states)))
	{
		$newarray[1]=$states;
		print("<br>$newarray[1]");
	}
	if(preg_match('/^M.*s$/',($states)))
	{
		$newarray[2]=$states;
		print("<br>$newarray[2]");
	}
	if(preg_match('/.*a$/',($states)))
	{
		$newarray[3]=$states;
		print("<br>$newarray[3]");
	}
	
}
foreach($newarray as $i=>$value)
{
	print("newarray[$i]=$value<br>");
}
?>