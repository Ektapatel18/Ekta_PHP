<?php

class control
{
	function __construct()
	{
		
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index';
			include_once('index.php');
			break;
			case '/dashboard';
			include_once('dashboard.php');
			break;
			case '/add_client';
			include_once('add_client.php');
			break;
			case '/add_emp';
			include_once('add_emp.php');
			break;
			case '/manage_booking';
			include_once('manage_booking.php');
			break;
			case '/manage_categories';
			include_once('manage_categories.php');
			break;
			case '/manage_client';
			include_once('manage_client.php');
			break;
			case '/manage_contact';
			include_once('manage_contact.php');
			break;
			case '/manage_employee';
			include_once('manage_employee.php');
			break;
			case '/manage_feedback';
			include_once('manage_feedback.php');
			break;
			case '/manage_payment';
			include_once('manage_payment.php');
			break;
			case '/manage_user';
			include_once('manage_user.php');
			break;
			case '/manage_vehicale';
			include_once('manage_vehicale.php');
			break;
			case '/manage_profile';
			include_once('manage_profile.php');
			break;
			
			default:
			include_once('404.php');
			break;
		}
	}
}
$obj=new control;
?>