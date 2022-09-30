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
			$fetcharr=$this->selectall('categories');
			include_once('index.php');
			break;
			
			case '/categories';
			include_once('categories.php');
			break;
			
			case '/contact';
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$email_id=$_REQUEST['email_id'];
				$contact_no=$_REQUEST['contact_no'];
				$message=$_REQUEST['message'];
				
				$arr=array("name"=>$name,"email_id"=>$email_id,"contact_no"=>$contact_no,"message"=>$message);
				
				$res=$this->insert('contact',$arr);
				if($res)
				{
					echo "<script> alert('Inquiry Success')</script>";
				}
				else
				{
					echo "<script> alert('Inquiry Not Success')</script>";
				}
				
			}
			include_once('contact.php');
			break;
			
			case '/vehicales';
			$fetcharr=$this->selectall('vehicale');
			include_once('vehicales.php');
			break;
			
			case '/vehicaleform';
			if(isset($_REQUEST['submit']))
			{
					$name=$_REQUEST['name'];
					$des=$_REQUEST['des'];
					$mileage=$_REQUEST['mileage'];
					$price=$_REQUEST['price'];
					$img=$_FILES['img']['name'];
					$path='img/vehi_img/'.$img;
					$dup_file=$_FILES['img']['tmp_name'];
					move_uploaded_file($dup_file,$path);		
					
					$arr=array("name"=>$name,"des"=>$des,"mileage"=>$mileage,"price"=>$price,"img"=>$img);
					$res=$this->insert('vehicale',$arr);
					if($res)
					{
						echo "<script> alert('Register successfully')</script>";
					}
					else
					{
						echo "<script>Not successfully</script>";
					}
			}
			include_once('vehicaleform.php');
			break;
			
			case '/booking';
			include_once('booking.php');
			break;
			
			case '/myprofile';
			$where=array("user_name"=>$_SESSION['user_name']);
			$run=$this->select_where('customer',$where);
			$fetch=$run->fetch_object();
			include_once('myprofile.php');
			break;
			
			case '/editmyprofile':
			if(isset($_REQUEST['edit_cust_id']))
			{
				$cust_id=$_REQUEST['edit_cust_id'];
				$where=array("cust_id"=>$cust_id);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$addres=$_REQUEST['addres'];
					$contact_no=$_REQUEST['contact_no'];
					$email_id=$_REQUEST['email_id'];
					$user_name=$_REQUEST['user_name'];
					
					$arr=array("name"=>$name,"addres"=>$addres,"contact_no"=>$contact_no,"email_id"=>$email_id,"user_name"=>$user_name);
					$res=$this->update('customer',$arr,$where);
					if($res)
					{
						echo "<script> 
						alert('Update Success'); 
						window.location='myprofile';
						</script>";
					}
				}
			}
			include_once('editmyprofile.php');
			break;
			
			case '/login';
			if(isset($_REQUEST['submit']))
			{
				$user_name=$_REQUEST['user_name'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				
				$where=array("user_name"=>$user_name,"pass"=>$pass);
				$run=$this->select_where('customer',$where);
				
				$res=$run->num_rows; 
				if($res==1) 
				{
					$data=$run->fetch_object();
					$status=$data->status;
					if($status=="Unblock")
					{
						$_SESSION['user_name']=$user_name;
						
						echo "<script> 
							alert('Login Success') 
							window.location='index';
							</script>";
					
					}
					else
					{
						echo "<script> 
							alert('Login Failed due Blocked') 
							window.location='login';
							</script>";
					}
				}
				else
				{
					echo "<script> 
						alert('Login Failed due wrong credential') 
						window.location='login';
						</script>";
						
				}
			}
			include_once('login.php');
			break;
			
			case '/signup';
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$addres=$_REQUEST['addres'];
				$contact_no=$_REQUEST['contact_no'];
				$email_id=$_REQUEST['email_id'];
				$user_name=$_REQUEST['user_name'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);
				$adharcard_no=$_REQUEST['adharcard_no'];
				$driving_licence=$_REQUEST['driving_licence'];

				$arr=array("name"=>$name,"addres"=>$addres,"contact_no"=>$contact_no,"email_id"=>$email_id,"user_name"=>$user_name,"pass"=>$pass,"adharcard_no"=>$adharcard_no,"driving_licence"=>$driving_licence);
				
				$res=$this->insert('customer',$arr);
				if($res)
				{
					echo "<script> alert('Register Success')
							window.location='index';</script>";				
				}
				else
				{
					echo "<script> alert('Not success')
						window.location='index';</script>";
				}
				
				
			}
			include_once('signup.php');
			break;
			
			case '/logout':
			unset($_SESSION['user_name']);
			echo "<script> 
				alert('Logout Success'); 
				window.location='index';
				</script>";
			break;
			
			default:
			include_once('blog.php');
			break;
		}
	}
}
$obj=new control;
?>