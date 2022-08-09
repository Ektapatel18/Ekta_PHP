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
				$user_name=$_REQUEST['user_name'];
				$email_id=$_REQUEST['email_id'];
				$password=$_REQUEST['pass'];
				$pass=md5($password);

				$arr=array("user_name"=>$user_name,"email_id"=>$email_id,"pass"=>$pass);
				
				$res=$this->insert('customer',$arr);
				if($res)
				{
					echo "<script> alert('Register Success') </script>";				
				}
				else
				{
					echo "Not success";
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