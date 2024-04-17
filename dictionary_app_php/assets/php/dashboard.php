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
	    <link rel="stylesheet" href="./css/bootstrap.min.css">
	    <title>Document</title>
	    <style>
	    .words {
	        padding: 20px;
	        align-items: center;
	        display: flex;
	        flex-direction: column;
	        justify-content: center;
	    }

	    .words h1 {
	        margin: 10px;
	    }

	    .words img {
	        border: 1px solid black;
	        padding: 5px;
	        border-radius: 5px;
	    }

	    .words h2 {
	        margin: 10px;
	    }
	    </style>

	</head>

	<body>

	    <?php 
		session_start();
	error_reporting(0);
       include './config.php';
	   $searchedWord = explode(".", basename($_SERVER['REQUEST_URI']))[0];

       $sql = "SELECT foods,image FROM word_tbl WHERE foods='$searchedWord'";

	  
	
	//    echo $sql;
    //    echo  $searchedWord ;
	   if($res = mysqli_query($conn, $sql)){
		if(mysqli_num_rows($res) > 0){

			while($row = mysqli_fetch_array($res)){
			$ans = $row['foods'];
            $anss = $row['image'];
		    }

			?>


	    <nav class="navbar navbar-light bg-light">
	        <a class="navbar-brand" href="#">WORDSWORLD</a>

	        <div id="search">
	            <select name="food_items" class="chosen" onchange="la(this.value)">
	                <option disabled selected>Search Your Words... !</option>
	                <?php
            
            
            include "./config.php";

            if (!$conn) {
                die("<script>alert('Connection Failed.')</script>");
            }
            
            $qry="Select * from word_tbl where is_approved='1'";
            $rslt=mysqli_query($conn,$qry);
            if ($rslt) {
                while($row=mysqli_fetch_array($rslt))
                {
                    echo '<option value="'.$row["foods"].'">'.$row["foods"].'</option>';
                }
            }
        ?>
	            </select>
	        </div>


	        <div>

	            <a class="btn btn-outline-dark my-2 my-sm-0 plus" href="./view/insert.php"><i class="fa fa-plus-circle"
	                    aria-hidden="true"></i></a>

	            <a class="btn btn-outline-dark my-2 my-sm-0" href="../index.php">LOGIN</a>

	            <a class="btn btn-outline-dark my-2 my-sm-0" href="./view/register.php">REGISTER</a>

	        </div>
	    </nav>

	    <?php
	   }
	 
	   else{
		header("Location: ./view/redirect.php");
	   }
	}	


	?>


	    <?php

	if ($ans == $searchedWord){
		
		$slt_qry = "SELECT * from word_tbl where foods='$searchedWord'";
		if($slt_res = mysqli_query($conn, $slt_qry)){
			if(mysqli_num_rows($slt_res) > 0){
	
				while($row = mysqli_fetch_array($slt_res)){
					$id = $row['id'];
				}
			}	
			
} $_SESSION["id"] = $id;
  echo "<h2 style='margin: 20px;'>WELCOME <span style='color: green;'>".$_SESSION["username"]." !</span></h2>";


		echo "<div class='words'>
		     <h1>".strtoupper($ans)."</h1><br>
			 <img src='./img/$anss' style='height: 300px; width: 300px;'><br>
			 <h2>Synonyms :  ";
			 
			

			 $in_qry = "SELECT * from word_tbl inner join pivot_tbl on word_tbl.id = pivot_tbl.word_id WHERE pivot_tbl.`type` = 'syn' AND pivot_tbl.parent_id = $id";
			 if($in_res = mysqli_query($conn, $in_qry)){
				 if(mysqli_num_rows($in_res) > 0){
		 
					 while($row = mysqli_fetch_array($in_res)){
						 echo $row['foods'].",. ";
					 }
				 }	
				 
	 }

	 echo "<a class='btn btn-outline-dark my-2 my-sm-0 plus' href='./view/add_syn.php'><i class='fa fa-plus-circle' aria-hidden='true'></i></a></h2>";
	 echo "<h2>Antonyms :  ";

	 $in_qry = "SELECT * from word_tbl inner join pivot_tbl on word_tbl.id = pivot_tbl.word_id WHERE pivot_tbl.`type` = 'atn' AND pivot_tbl.parent_id = $id";
	 if($in_res = mysqli_query($conn, $in_qry)){
		 if(mysqli_num_rows($in_res) > 0){
 
			 while($row = mysqli_fetch_array($in_res)){
				 echo $row['foods'].",. ";
			 }
		 }	
		 
}
echo "<a class='btn btn-outline-dark my-2 my-sm-0 plus' href='./view/add_atn.php'><i class='fa fa-plus-circle' aria-hidden='true'></i></a></h2>";
echo "</div>";  

echo "<div class='words'>
<h2>Commets : </h2>
<span><form method='' action='./php/add_cmt.php'><input type='text' name='cmt' placeholder='Enter your comments'> &nbsp;<button
		type='submit' name='submit'>POST</button></form></span>"; 

$cmt_qry = "SELECT * from word_tbl inner join cmt_tbl on word_tbl.id = cmt_tbl.parent_id WHERE word_tbl.id = $id";
if($cmt_res = mysqli_query($conn, $cmt_qry)){
	if(mysqli_num_rows($cmt_res) > 0){
		?>


	    <?php

		while($row = mysqli_fetch_array($cmt_res)){
			?>


	    <?php echo "<span><i class='fa fa-comments-o'></i> ".$row['comments']."<br></span>"; }?>



	    <?php
		echo "</div>";	
		
	}	
	
}



}

	?>

	    <script>
	    $(".chosen").chosen();

	    function la(src) {
	        window.location = src;
	    }
	    </script>

	</body>

	</html>