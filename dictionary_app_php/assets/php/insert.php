	<!DOCTYPE html>
	<html lang="en">

	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	    <link rel="stylesheet"
	        href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	    <!--hosted libraries-->
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.5/chosen.jquery.min.js"></script>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.5/chosen.min.css">
	    <link rel="preconnect" href="https://fonts.googleapis.com">
	    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	    <link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&display=swap" rel="stylesheet">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link rel="stylesheet" href="../css/bootstrap.min.css">
	    <title>Document</title>
	</head>
	<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "dictionary_db";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

// error_reporting(0);


if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$img = $_FILES['img']['name'];




    $target_dir = "../img/";
    $target_file = $target_dir.$_FILES["img"]["name"];


if (file_exists($target_file)) {
  echo "<script>alert('Sorry, file already exists.')</script>";
}
else {
    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
    echo "The file ". $_FILES["img"]["name"] . " has been uploaded.";
  } 


		
			$sql = "INSERT INTO word_tbl (foods, image)
					VALUES ('$name', '$img')";

			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Added successfully.')</script>";
			} else {
				echo "<script>alert('Something Wrong Went.')</script>";
			}

			?>


	<?php


} 



?>

	</html>