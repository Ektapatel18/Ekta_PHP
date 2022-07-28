<?php

class model
{
	public $conn="";
	function __construct()
	{
		$this->conn=new mysqli('localhost','root','','rent_my_vehicale');
	}
	function insert($tbl,$arr)
	{
		$key_arr=array_keys($arr);
		$key=implode(",",$key_arr);
		
		$value_arr=array_values($arr);
		$value=implode("','",$value_arr);
		
		echo $ins="insert into $tbl($key) values('$value')";
		$run=$this->conn->query($ins);
		return $run;
	}
}
$obj=new model;
?>