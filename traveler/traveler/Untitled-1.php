<?php 
    
	$errors = "";

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "tms");

	// insert 
	if (isset($_POST['submit'])) {
		if (empty($_POST['fname'])) {
			$errors = "You must fill in the First Name";
		}else{
			$role=$_POST['role'];
			$fname = $_POST['fname'];
            $lname=$_POST['lname'];
			$username=$_POST['username'];
			$email =$_POST['email'];
			$phone=$_POST['phone'];
            $address=$_POST['address'];
			$password=$_POST['password'];
			$sqli = "INSERT INTO `user`(`role`, `fname`, `lname`, `username`, `email`, `phone`, `address`, `password`) VALUES ([$role],[$fname],[$lname],[$username],[$email],[$phone],[$address],[$password])";
			$sql = "INSERT INTO user (fname,lname,username,email,phone,address,password) VALUES ('$role','$fname','$lname','$username','$email','$phone','$address','$password')";
			mysqli_query($db, $sqli);
			header('location: signup.php');
		}
	}	
?>