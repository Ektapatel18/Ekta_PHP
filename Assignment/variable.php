<?php
//variables 

$a=90;
$b=40;
$c=60;
$d=56;

$total=$a+$b;
echo "Total is : ". $total . "<br>";

$total=$a-$c;
echo "Total is :". $total ."<br>";

$total=$b*$d;
echo "Total is :". $total . <br>";

$per=($total*100)/400;
echo "per % is :". $per. <br>";


if($per>=75)
{
	echo "Your grade is destriction<br>";
	
}
elseif($per>=60&& $per<75)
{
	 echo "your grade is First Class<br>";
}
elseif($per>=50 && $per<60)
{
	echo "your grade is Second Class<br>";
	
}
else
{
	echo "You are Fail <br>";
}
?>