<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <title>ADD YOUR WORDS</title>

    <style>
    /* .form-check{
         padding-bottom: 20px;
        } */
    </style>
</head>

<body>

    <div class="container">
        <form action="../php/add_syn.php" method="post" class="login-email" enctype="multipart/form-data">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">ADD YOUR WORDS</p>
            <div class="input-group">
                <input type="text" name="name" placeholder="Synonym" required>
            </div>
            <div class="input-group">
                <input type="file" name="img" required>
            </div>
            <!-- <div class="input-group">
                <input type="number" name="app" required>
            </div> -->
            <div class="input-group">
                <button name="submit" class="btn">Add</button>
            </div>

        </form>
    </div>
</body>

</html>