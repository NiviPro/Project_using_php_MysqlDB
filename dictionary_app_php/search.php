<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!--hosted libraries-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.5/chosen.jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.5/chosen.min.css">
     <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <!--chosen cdnjs-->
    <title>Document</title>
</head>



<body>

    

    <select name="food_items" class="chosen" onchange="la(this.value)">
        <option disabled selected>Enter Your Words...  !</option>
        <?php
            
            
            include "./assets/php/config.php";

            if (!$conn) {
                die("<script>alert('Connection Failed.')</script>");
            }
            
            $qry="Select * from word_tbl";
            $rslt=mysqli_query($conn,$qry);
            if ($rslt) {
                while($row=mysqli_fetch_array($rslt))
                {
                    echo '<option value="'.$row["foods"].'">'.$row["foods"].'</option>';
                }
            }
        ?>
    </select>

    <script>
    $(".chosen").chosen();

    function la(src) {
        window.location = src;
    }
    </script>
</body>

</html>