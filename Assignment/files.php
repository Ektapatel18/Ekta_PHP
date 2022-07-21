<html>
<head>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
	<p>Name:<input type="text" name="username"/></p>
	
	<p>File:<input type="file" name="file1"/></p>
	
	<p><input type="submit" name="submit" value="click"/></p>

</form>


<?php


if(isset($_POST['submit']))
{
	echo $username=$_POST['username']."<br>";
	
	echo $file1=$_FILES['file1']['name'];
		 $path="image\upload".$file1;
	   	 
		 $dup_file=$_FILES['file1']['tmp_name'];
	move_uploaded_file($dup_file,$path);
	
}

?>
</body>
</html>