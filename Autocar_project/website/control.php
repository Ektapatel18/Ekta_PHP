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
			include_once('index.php');
			break;
			case '/about';
			include_once('about.php');
			break;
			case '/contact';
			include_once('contact.php');
			break;
			
			case '/gallery';
			include_once('gallery.php');
			break;
			
			case '/services';
			include_once('services.php');
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
					
					$_SESSION['user_name']=$user_name;
					
					echo "<script> 
						alert('Login Success') 
						window.location='index';
						</script>";
					
				}
				else
				{
					echo "<script> 
						alert('Login Failed due wrong credebntial') 
						window.location='index';
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

				$arr=array("name"=>$name,"addres"=>$addres,"contact_no"=>$contact_no,"email_id"=>$email_id,"user_name"=>$user_name,"pass"=>$pass);
				
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