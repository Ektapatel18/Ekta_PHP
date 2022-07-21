
<html>
<head>
	<title>POST</title>
</head>
<body>
	<form action="" method="post">
		<p>Name:<input type="text" name="name"></p>
		<p>Age:<input type="text" name="age"></p>
		<p><input type="submit" name="submit" value="click"></p>
</body>
</html>

<?php

if (isset ($_POST['submit']))
{
	echo $name=$_REQUEST['name'];
	echo $age=$_POST['age'];
}

session_start();

echo $_SESSION['user'];
?>