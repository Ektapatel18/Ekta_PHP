<?php
include_once('../admin/model.php');

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
			case '/manage_booking';
			$manage_booking_arr=$this->selectall('booking');
			include_once('manage_booking.php');
			break;
			
			case '/manage_categories';
			$manage_categories_arr=$this->selectall('categories');
			include_once('manage_categories.php');
			break;
			
			case '/add_categories';
			if(isset($_REQUEST['submit']))
			{
				$cate_name=$_REQUEST['cate_name'];
				$cate_desc=$_REQUEST['cate_desc'];
				$cate_img=$_FILES['cate_img']['name'];
				$path='img/'.$cate_img;
				$dup_file=$_FILES['cate_img']['tmp_name'];
				move_uploaded_file($dup_file,$path);
				
		 		$arr=array("cate_name"=>$cate_name,"cate_desc"=>$cate_desc,"cate_img"=>$cate_img);
				
				$res=$this->insert('categories',$arr);
				if($res)
				{
					echo "<script> alert('Register successfully')</script>";
				}
				else
				{
					echo "<script>Not successfully</script>";
				}
			}
			include_once('add_categories.php');
			break;
			
			case '/manage_contact';
			$manage_contact_arr=$this->selectall('contact');
			include_once('manage_contact.php');
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
			case '/profile';
			include_once('profile.php');
			break;
			
			default:
			include_once('404.php');
			break;
		}
	}
}
$obj=new control;
?>