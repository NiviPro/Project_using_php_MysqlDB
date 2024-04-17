<?php 

include './assets/php/config.php';

session_start();

error_reporting(0);

// if (isset($_SESSION['username'])) {
//     header("Location: welcome.php");
// }

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$_SESSION['mail'] = $email;

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		if($_SESSION['mail'] == $row['email']){
		header("Location: ./assets/php/dashboard1.php");
	}
	} else {
		echo "<script>alert('Email or Password is Wrong.')</script>";
	}
}


?>