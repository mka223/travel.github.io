<?php
$connection = mysqli_connect ("localhost" , "root" , "","travel");
$success=false;

$username = $_POST['username'];
$password = $_POST['password'];

{
	$result = mysqli_query($connection, "SELECT * FROM user WHERE username='$username' AND password='$password' AND not deleted;");
	while($row = mysqli_fetch_array($result))
	{
	$success = true;
	$username = $row['username'];
	$password = $row['password'];
	}
	if($success == true)
	{
		session_start();
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;			
		header("location:index.php");
	}
	else
	{
		header("location:index.php");
	}
}
?>