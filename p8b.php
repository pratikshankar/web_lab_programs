<?php
$array1=array(array(1,2,3),array(4,5,6),array(8,4,9));
$array2=array(array(9,8,9),array(7,3,4),array(0,4,1));
$result=array();
echo("The current matrix 1 is<br>");
for($i =0;$i<3;$i++)
{
	for($j=0;$j<3;$j++)
	{
		echo($array1[$i][$j]);
		
	}
	echo("<br>");
}
echo("The current matrix 2 is<br>");
for($i =0;$i<3;$i++)
{
	for($j=0;$j<3;$j++)
	{
		echo($array2[$i][$j]);
		
	}
	echo("<br>");
}
echo("The transpose 1 st matrix are:-<br>");
for($i =0;$i<3;$i++)
{
	for($j=0;$j<3;$j++)
	{
		echo($array1[$j][$i]);
		
	}
	echo("<br>");
}
echo("The transpose 2 nd matrix are:-<br>");
for($i =0;$i<3;$i++)
{
	for($j=0;$j<3;$j++)
	{
		echo($array2[$j][$i]);
		
	}
	echo("<br>");
}

echo("The addition of the matrices are<br>");
for($i =0;$i<3;$i++)
{
	for($j=0;$j<3;$j++)
	{
		echo($array1[$i][$j]+$array2[$i][$j]." ");
		
	}
	echo("<br>");
}
$m=count($array1);
$n=count($array1[2]);
$p=count($array2);
$q=count($array2[2]);
if($n!=$q)
{
	alert("Not a valid operation");
}
echo("Multiplication of the matrices is as foollows<br>");
for($i =0;$i<$m;$i++)
{
	for($j=0;$j<$q;$j++)
	{
		$result[$i][$j]=0;
		for($k=0;$k<$n;$k++)
		{
			$result[$i][$j]+=$array1[$i][$k]*$array2[$k][$j];
		}
	}
}
for($i =0;$i<3;$i++)
{
	for($j=0;$j<3;$j++)
	{
		echo($result[$i][$j]." ");
		
	}
	echo("<br>");
}
?>