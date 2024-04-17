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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Document</title>
</head>



<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">WORDSWORLD</a>

    <div id="search">
        <select name="food_items" class="chosen" onchange="la(this.value)">
            <option disabled selected>Search Your Words... !</option>
        </select>
    </div>


    <div>

        <a class="btn btn-outline-dark my-2 my-sm-0 plus" href="./view/insert.php"><i class="fa fa-plus-circle"
                aria-hidden="true"></i></a>

        <a class="btn btn-outline-dark my-2 my-sm-0" href="./logout.php">LOGOUT</a>

        <a class="btn btn-outline-dark my-2 my-sm-0" href="./view/register.php">REGISTER</a>

    </div>
</nav>

<body>

</body>
<script>
$(".chosen").chosen();

function la(src) {
    window.location = src;
}
</script>

</html>