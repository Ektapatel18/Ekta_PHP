<?php
include_once('../admin/model.php');

class control extends model
{
	function __construct()
	{
		session_start();
		model::__construct();
		
		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index';
			if(isset($_REQUEST['submit']))
			{
				$user_name=$_REQUEST['user_name'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				
				$where=array("user_name"=>$user_name,"pass"=>$pass);
				$run=$this->select_where('employee',$where);
				
				$res=$run->num_rows;
				if($res==1)
				{
					$_SESSION['employee']=$user_name;
					echo "<script>
					alert('Login Succesc')
					window.location='dashboard';
					</script>";
					
				}
				else
				{
					echo "<script>
					alert('Login Failed');
					window.location='index';
					</script>";
				}
				}
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
			
			case '/delete';
			if(isset($_REQUEST['del_cust_id']))
			{
				$cust_id=$_REQUEST['del_cust_id'];
				$where=array("cust_id"=>$cust_id);
				$res=$this->delete_where('customer',$where);
				if($res)
				{
					echo "<script> alert('Delete successfully')
					 window.location='manage_user';</script>";
				}
			}
			if(isset($_REQUEST['del_cat_id']))
			{
				$cat_id=$_REQUEST['del_cat_id'];
				$where=array("cat_id"=>$cat_id);
				$run=$this->select_where('categories',$where);
				$fetch=$run->fetch_object();
				$cate_img=$fetch->cate_img;
				
				$res=$this->delete_where('categories',$where);
				if($res)
				{
						unlink('img/'.$cate_img);
						echo "<script> alert('Delete successfully')
					          window.location='manage_categories';</script>";
				}
			}
			if(isset($_REQUEST['del_cont_id']))
			{
				$cont_id=$_REQUEST['del_cont_id'];
				$where=array("cont_id"=>$cont_id);
				$res=$this->delete_where('contact',$where);
				if($res)
				{
					echo "<script> alert('Delete successfully')
					 window.location='manage_contact';</script>";
				}
			}
			if(isset($_REQUEST['del_book_id']))
			{
				$book_id=$_REQUEST['del_book_id'];
				$where=array("book_id"=>$book_id);
				$res=$this->delete_where('booking',$where);
				if($res)
				{
					echo "<script> alert('Delete successfully')
					 window.location='manage_booking';</script>";
				}
			}
			if(isset($_REQUEST['del_Pay_id']))
			{
				$Pay_id=$_REQUEST['del_Pay_id'];
				$where=array("Pay_id"=>$Pay_id);
				$res=$this->delete_where('payment',$where);
				if($res)
				{
					echo "<script> alert('Delete successfully')
					 window.location='manage_payment';</script>";
				}
			}
			if(isset($_REQUEST['del_vehi_id']))
			{
				$vehi_id=$_REQUEST['del_vehi_id'];
				$where=array("vehi_id"=>$vehi_id);
				$res=$this->delete_where('vehicale',$where);
				if($res)
				{
					echo "<script> alert('Delete successfully')
					 window.location='manage_vehicale';</script>";
				}
			}
			
			
			
			case '/employee_logout':
			unset($_SESSION['employee']);
			echo "<script>
			alert('Logout Success');
			window.location='index';
			</script>";
			break;
			
			default:
			include_once('404.php');
			break;
		}
	}
}
$obj=new control;
?>