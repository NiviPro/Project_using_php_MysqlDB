<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Image to Database Using PHP and MySQL</title>
</head>
<body>

<center>
<h1>Upload Image to Database Using PHP and MySQL</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
<label for="file">Choose Your Profile Pic:</label>
<input type="file" id="file" name="image">
<label for="name">Name:</label>
<input type="text" id="name" name="name">
<label for="desig">Designation</label>
<input type="text" id="desig" name="desig">
<input type="submit" name="submit">
</form>
</center>
    
</body>
</html>