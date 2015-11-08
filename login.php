<?php


session_start();
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
	//echo "reached here";
	if (empty($_POST['user']) || empty($_POST['password'])) {
		$error = "Username or Password is empty";
	}
	
	else{
		$username=$_POST['user'];
		$password=$_POST['password'];
			
		include("connectdb.php");

		$username = htmlspecialchars($username);
		$password = htmlspecialchars($password);
		$query="select rollno,password from registration where password='$password' AND rollno=$username";
		$result = mysqli_query($con,$query);
		$rows=mysqli_num_rows($result);
		if ($rows == 1) {
			$_SESSION['user']=$username; 
			header("location: home.php"); // Redirecting To Other Page
		} else {
			$error = "Username or Password is invalid";
		}
		mysqli_close($con); 
	}
	//echo "hello";	
}
?>