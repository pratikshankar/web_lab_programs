<?php
 print("<h3>Refresh Page</h3>");
 $name="connt.txt";
 $file=fopen($name,"r");
 $lines=fscanf($file,"%d");
 $count=$lines[0];
 fclose($file);
 print("Count=".$count);
 $file=fopen($name,"w");
 fprintf($file,"%d",$count+1);
 fclose($file);
 ?>