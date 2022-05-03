<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<?php
$welcome="Welcome to associative arrays in  PHP. ";
 echo "<h5>".$welcome. "</h5>";
$friends = array("Hatim", "Jabir", "Kaniz", "Liton");
echo "<br>";
echo "<p>" .$friends[0]."</p>";
echo "<p>" .$friends[1]."</p>";
echo "<p>" .$friends[2]."</p>";
//Associative arrays
$favFood = array("Al-Amin"=>"Beef Biriyani", "Sadia"=>"Pasta", "Khayrul"=>"Halim", "Amin"=>"Burger");
echo $favFood['Al-Amin'];
echo "<br>";
echo $favFood['Sadia'];
foreach ($favFood as $key => $value) {
    echo "<br> Favourite food of $key is $value";
}


?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
