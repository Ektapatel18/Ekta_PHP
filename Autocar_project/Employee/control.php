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
					$data=$run->fetch_object();
					$status=$data->status;
					if($status=="Unblock")
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
							alert('Login Failed due Blocked') 
							window.location='index';
							</script>";
					}
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
			$where=array("user_name"=>$_SESSION['employee']);
			$run=$this->select_where('employee',$where);
			$fetch=$run->fetch_object();
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
			
			case '/edituser':
			if(isset($_REQUEST['edit_cust_id']))
			{
				$cust_id=$_REQUEST['edit_cust_id'];
				$where=array("cust_id"=>$cust_id);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$cust_id=$_REQUEST['cust_id'];
					$name=$_REQUEST['name'];
					$addres=$_REQUEST['addres'];
					$contact_no=$_REQUEST['contact_no'];
					$email_id=$_REQUEST['email_id'];
					$user_name=$_REQUEST['user_name'];
					$adharcard_no=$_REQUEST['adharcard_no'];
					$driving_licence=$_REQUEST['driving_licence'];
					
					
					$arr=array("cust_id"=>$cust_id,"name"=>$name,"addres"=>$addres,"contact_no"=>$contact_no,"email_id"=>$email_id,"user_name"=>$user_name,"adharcard_no"=>$adharcard_no,"driving_licence"=>$driving_licence);
					$res=$this->update('customer',$arr,$where);
					if($res)
					{
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_user';
						</script>";
					}
				}
			}
			include_once('edituser.php');
			break;
			
			case '/editcontact':
			if(isset($_REQUEST['edit_cont_id']))
			{
				$cont_id=$_REQUEST['edit_cont_id'];
				$where=array("cont_id"=>$cont_id);
				$run=$this->select_where('contact',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$cont_id=$_REQUEST['cont_id'];
					$name=$_REQUEST['name'];
					$email_id=$_REQUEST['email_id'];
					$contact_no=$_REQUEST['contact_no'];
					$message=$_REQUEST['message'];
					$arr=array("cont_id"=>$cont_id,"name"=>$name,"email_id"=>$email_id,"contact_no"=>$contact_no,"message"=>$message);
					$res=$this->update('contact',$arr,$where);
					if($res)
					{
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_contact';
						</script>";
					}
				}
			}
			
			include_once('editcontact.php');
			break;
			
			case '/editbooking':
			if(isset($_REQUEST['edit_book_id']))
			{
				$book_id=$_REQUEST['edit_book_id'];
				$where=array("book_id"=>$book_id);
				$run=$this->select_where('booking',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$book_id=$_REQUEST['book_id'];
					$cust_id=$_REQUEST['cust_id'];
					$Vehi_id=$_REQUEST['Vehi_id'];
					$book_date=$_REQUEST['book_date'];
					$booking_time=$_REQUEST['booking_time'];
					
					$arr=array("book_id"=>$book_id,"cust_id"=>$cust_id,"Vehi_id"=>$Vehi_id,"book_date"=>$book_date,"booking_time"=>$booking_time);
					$res=$this->update('booking',$arr,$where);
					if($res)
					{
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_booking';
						</script>";
					}
				}
			}
			include_once('editbooking.php');
			break;
			
			case '/editpayment':
			if(isset($_REQUEST['edit_Pay_id']))
			{
				$Pay_id=$_REQUEST['edit_Pay_id'];
				$where=array("Pay_id"=>$Pay_id);
				$run=$this->select_where('payment',$where);
				$fetch=$run->fetch_object();
				
				if(isset($_REQUEST['submit']))
				{
					$Pay_id=$_REQUEST['Pay_id'];
					$cust_id=$_REQUEST['cust_id'];
					$book_id=$_REQUEST['book_id'];
					$pay_type=$_REQUEST['pay_type'];
					
					$arr=array("Pay_id"=>$Pay_id,"cust_id"=>$cust_id,"book_id"=>$book_id,"pay_type"=>$pay_type);
					$res=$this->update('payment',$arr,$where);
					if($res)
					{
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_payment';
						</script>";
					}
				}
			}
			include_once('editpayment.php');
			break;
			
			case '/editvehicale':
			if(isset($_REQUEST['edit_vehi_id']))
			{
				$vehi_id=$_REQUEST['edit_vehi_id'];
				$where=array("vehi_id"=>$vehi_id);
				$run=$this->select_where('vehicale',$where);
				$fetch=$run->fetch_object();
				$old_file=$fetch->img;
				
				if(isset($_REQUEST['submit']))
				{
					$vehi_id=$_REQUEST['vehi_id'];
					$cli_id=$_REQUEST['cli_id'];
					$name=$_REQUEST['name'];
					$price=$_REQUEST['price'];
					
					if($_FILES['img']['size']>0)
					{
						$img=$_FILES['img']['name'];  
						$path='img/'.$img;
						$dup_file=$_FILES['img']['tmp_name'];
						move_uploaded_file($dup_file,$path);
				
					
					$arr=array("vehi_id"=>$vehi_id,"cli_id"=>$cli_id,"name"=>$name,"price"=>$price,"img"=>$img);
					$res=$this->update('vehicale',$arr,$where);
					if($res)
					{
						unlink('img/'.$old_file);
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_vehicale';
						</script>";
					}
				}
				else
				{
					$arr=array("vehi_id"=>$vehi_id,"cli_id"=>$cli_id,"name"=>$name,"price"=>$price,"img"=>$img);
					$res=$this->update('vehicale',$arr,$where);
					if($res)
					{
						
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_vehicale';
						</script>";
					}
				}
				
				}
			}
			include_once('editvehicale.php');
			break;
			
			case '/editcategories':
			if(isset($_REQUEST['edit_cat_id']))
			{
				$cat_id=$_REQUEST['edit_cat_id'];
				$where=array("cat_id"=>$cat_id);
				$run=$this->select_where('categories',$where);
				$fetch=$run->fetch_object();
				$old_file=$fetch->cate_img;
				
				if(isset($_REQUEST['submit']))
				{
					$cat_id=$_REQUEST['cat_id'];
					$cate_name=$_REQUEST['cate_name'];
					$cate_desc=$_REQUEST['cate_desc'];
				
					if($_FILES['cate_img']['size']>0)
					{
						$cate_img=$_FILES['cate_img']['name'];  
						$path='img/cate_img/'.$cate_img;
						$dup_file=$_FILES['cate_img']['tmp_name'];
						move_uploaded_file($dup_file,$path);
				
					
					$arr=array("cat_id"=>$cat_id,"cate_name"=>$cate_name,"cate_desc"=>$cate_desc,"cate_img"=>$cate_img);
					$res=$this->update('categories',$arr,$where);
					if($res)
					{
						unlink('img/cate_img/'.$old_file);
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_categories';
						</script>";
					}
				}
				else
				{
					$arr=array("cat_id"=>$cat_id,"cate_name"=>$cate_name,"cate_desc"=>$cate_desc,"cate_img"=>$cate_img);
					$res=$this->update('categories',$arr,$where);
					if($res)
					{
						unlink('img/cate_img/'.$old_file);
						echo "<script> 
						alert('Update Success'); 
						window.location='manage_categories';
						</script>";
					}
				}
				
				}
			}
			include_once('editcategories.php');
			break;
			
			
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