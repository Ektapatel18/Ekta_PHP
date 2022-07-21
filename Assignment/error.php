<h4>error</h4>

<?php

//1> Notice error

/*
$a=10;
$b=20;

echo $A;
echo "<br>"."Hello";
echo $b;

*/

//2> Syntax error
/*
$a=30;
$b=50
echo $a;
echo $b;
*/

//3> Warning error
/*
include('include1.php');
echo "Hi";
echo "How are you";
*/

//4> fettale error

require(require1.php);
echo "Hello";
echo "World";
?>