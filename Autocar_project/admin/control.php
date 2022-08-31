<?php
include_once('model.php');


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
				$username=$_REQUEST['username'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				
				$where=array("username"=>$username,"pass"=>$pass);
				$run=$this->select_where('admin',$where);
				
				$res=$run->num_rows; 
				if($res==1) 
				{
					
					$_SESSION['admin']=$username;
					
					echo "<script> 
						alert('Login Success') 
						window.location='dashboard';
						</script>";
					
				}
				
			}
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
			
			case '/delete':
			if(isset($_REQUEST['del_emp_id']))
			{
				$emp_id=$_REQUEST['del_emp_id'];
				$where=array("emp_id"=>$emp_id);
				$res=$this->delete_where('employee',$where);
				if($res)
				{
					 echo "<script> alert('Delete successfully')
					 window.location='manage_employee';</script>";
				}
				
			}
			if(isset($_REQUEST['del_cli_id']))
			{
				$cli_id=$_REQUEST['del_cli_id'];
				$where=array("cli_id"=>$cli_id);
				$res=$this->delete_where('client',$where);
				if($res)
				{
					 echo "<script> alert('Delete successfully')
					 window.location='manage_client';</script>";
				}
					
			}
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
			if(isset($_REQUEST['del_feedback_id']))
			{
				$feedback_id=$_REQUEST['del_feedback_id'];
				$where=array("feedback_id"=>$feedback_id);
				$res=$this->delete_where('feedback',$where);
				if($res)
				{
					 echo "<script> alert('Delete successfully')
					 window.location='manage_feedback';</script>";
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
			if(isset($_REQUEST['del_cat_id']))
			{
				$cat_id=$_REQUEST['del_cat_id'];
				$where=array("cat_id"=>$cat_id);
				$res=$this->delete_where('categories',$where);
				if($res)
				{
					 echo "<script> alert('Delete successfully')
					 window.location='manage_categories';</script>";
				}
			}
			
			case '/status':
			if(isset($_REQUEST['status_cust_id']))
			{
				$cust_id=$_REQUEST['status_cust_id'];
				$where=array("cust_id"=>$cust_id);
				
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				$status=$fetch->status;
				
				if($status=="Block")
				{
					$arr=array("status"=>"Unblock");
					$res=$this->update('customer',$arr,$where);
					if($res)
					{
						echo "<script> alert('Unblock successfully')
								window.location='manage_user';</script>";
					}
				}
				else
				{
					$arr=array("status"=>"Block");
					$res=$this->update('customer',$arr,$where);
					if($res)
					{
						unset($_SESSION['user_name']);
						echo "<script> alert('Block successfully')
								window.location='manage_user';</script>";
					}
				}
			}
		
		
			if(isset($_REQUEST['status_emp_id']))
			{
				$emp_id=$_REQUEST['status_emp_id'];
				$where=array("emp_id"=>$emp_id);
				
				$run=$this->select_where('employee',$where);
				$fetch=$run->fetch_object();
				$status=$fetch->status;
				
				if($status=="Block")
				{
					$arr=array("status"=>"Unblock");
					$res=$this->update('employee',$arr,$where);
					if($res)
					{
						echo "<script> alert('Unblock successfully')
								window.location='manage_employee';</script>";
					}
				}
				else
				{
						$arr=array("status"=>"Block");
						$res=$this->update('employee',$arr,$where);
						if($res)
						{
							unset($_SESSION['user_name']);
							echo "<script> alert('Block successfully')
								window.location='manage_employee';</script>";
						}
				}
			}
			break;
			
			case '/admin_logout':
			unset($_SESSION['admin']);
			echo "<script>
			alert('Logout Success')
			window.location='index';
			</script>";
			
			default:
			include_once('404.php');
			break;
		}
	}
}
$obj=new control;
?>