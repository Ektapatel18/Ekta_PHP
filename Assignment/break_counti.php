<h4>break</h4>
<h4>countine</h4>

<?php

$name=array("Ekta","Binita","Dax","Tushar","Abhi");
/*
foreach($name as $n)
{
	if($n=="Dax")
	{
		break;
	}
	echo $n ."<br>";
}
*/

echo "<hr>";
foreach($name as $n)
{
	if($n=="Binita"|| $n=="Tushar")
	{
		continue;
	}
	echo $n. "<br>";
}

?>