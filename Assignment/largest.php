<?php
 $a=10;
 $b=300;
 $c=30;
 $larg=($a>$b)?($a>$c?$a:$c):($b>$c?$b:$c);
 echo "The largest number".$a .",".$b . ",".$c."is:".$larg;

?>