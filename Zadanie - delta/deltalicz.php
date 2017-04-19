<?php
 $a=$_POST["a"];
 $b=$_POST["b"];
 $c=$_POST["c"];
 
   $delta=pow($b,2)-4*$a*$c;
 
 if($a<=0)
 {
	 echo "Delta wyszła ujemna!";
 }
 
 else if($delta>=0)
 {
	 $sx1=-$b-sqrt($delta)/(2*$a);
	 $sx2=$b-sqrt($delta)/(2*$a);
	 
	 print("$x1 $x2");
 }
 else
 {
	 $x=-$b/(2-$a);
	 
	 print("$x = $x");
 }
?>