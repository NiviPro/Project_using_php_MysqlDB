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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Document</title>

    <style>
    body {
        width: 100%;
        min-height: 100vh;
        background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(./img/BG.jpg);
        background-position: center;
        background-size: cover;
    }

    .bg-light {
        background-color: #adb5bdd4 !important;
    }

    .btn-outline-dark {
        color: #111;
    }

    .chosen-container {
        width: 350px !important;
    }

    .chosen-single {
        padding: 10px 0 30px 10px !important;
    }

    .chosen-single div {
        padding: 10px 0 10px 0;
    }

    #search {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 90vh;
    }

    .navbar-brand,
    .btn-outline-dark {
        font-family: 'Gideon Roman', cursive;
        font-weight: 600;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">WORDSWORLD</a>
        <div>

            <a class="btn btn-outline-dark my-2 my-sm-0" href="../index.php">LOGIN</a>

            <a class="btn btn-outline-dark my-2 my-sm-0" href="./view/register.php">REGISTER</a>

        </div>
    </nav>
    <div id="search">
        <select name="food_items" class="chosen" onchange="la(this.value)">
            <option disabled selected>Search Your Words... !</option>
            <?php
            
            
            include "./php/config.php";

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
    <script>
    $(".chosen").chosen();

    function la(src) {
        window.location = src;
    }
    </script>

</body>

</html>