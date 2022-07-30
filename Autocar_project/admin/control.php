<?php
include_once('model.php');


class control extends model 
{
	function __construct()
	{
		
		model::__construct();
		
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
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$addres=$_REQUEST['addres'];
				$contact_no=$_REQUEST['contact_no'];
				$email_id=$_REQUEST['email_id'];
				$user_name=$_REQUEST['user_name'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				$Adharcard_no=$_REQUEST['Adharcard_no'];
				$driving_licence=$_REQUEST['driving_licence'];
				$PUC=$_REQUEST['PUC'];
				$Insurance_policy=$_REQUEST['Insurance_policy'];
				
		 		$arr=array("name"=>$name,"addres"=>$addres,"contact_no"=>$contact_no,"email_id"=>$email_id,"user_name"=>$user_name,"pass"=>$pass,"Adharcard_no"=>$Adharcard_no,"driving_licence"=>$driving_licence,"PUC"=>$PUC,"Insurance_policy"=>$Insurance_policy);
				
				$res=$this->insert('client',$arr);
				if($res)
				{
					echo "<script> alert('Register successfully')</script>";
				}
				else
				{
					echo "<script>Not successfully</script>";
				}
			}
			include_once('add_client.php');
			break;
			
			case '/add_emp';
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$addres=$_REQUEST['addres'];
				$contact_no=$_REQUEST['contact_no'];
				$email_id=$_REQUEST['email_id'];
				$user_name=$_REQUEST['user_name'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				
		 		$arr=array("name"=>$name,"addres"=>$addres,"contact_no"=>$contact_no,"email_id"=>$email_id,"user_name"=>$user_name,"pass"=>$pass);
				
				$res=$this->insert('employee',$arr);
				if($res)
				{
					echo "<script> alert('Register successfully')</script>";
				}
				else
				{
					echo "<script>Not successfully</script>";
				}
			}
			include_once('add_emp.php');
			break;
			
			case '/manage_booking';
			$manage_booking_arr=$this->selectall('booking');
			include_once('manage_booking.php');
			break;
			
			case '/manage_categories';
			$manage_categories_arr=$this->selectall('categories');
			include_once('manage_categories.php');
			break;
			
			case '/manage_client';
			$manage_client_arr=$this->selectall('client');
			include_once('manage_client.php');
			break;
			
			case '/manage_contact';
			$manage_contact_arr=$this->selectall('contact');
			include_once('manage_contact.php');
			break;
			
			case '/manage_employee';
			$manage_employee_arr=$this->selectall('employee');
			include_once('manage_employee.php');
			break;
			
			case '/manage_feedback';
			$manage_feedback_arr=$this->selectall('feedback');
			include_once('manage_feedback.php');
			break;
			
			case '/manage_payment';
			$manage_payment_arr=$this->selectall('payment');
			include_once('manage_payment.php');
			break;
			
			case '/manage_user';
			$manage_user_arr=$this->selectall('customer');
			include_once('manage_user.php');
			break;
			
			case '/manage_vehicale';
			$manage_vehicale_arr=$this->selectall('vehicale');
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