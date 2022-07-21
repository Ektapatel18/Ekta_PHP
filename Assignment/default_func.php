<h4>default arrgument</h4>

<?php

function default_func($name , $country="India")
{
	echo "My Name is :". $name . " and my country is :". $country ."<br>";
}
//default_func("Ekta");
default_func ("Ekta" , Null);
?>