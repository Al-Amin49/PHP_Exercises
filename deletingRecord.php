<?php
//connectiong to the database 
$servername="localhost";
$username="root";
$password="";
$database="contactus";
//Crea a connection 
$conn = mysqli_connect($servername,$username,$password,$database);

//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect:". mysqli_connect_error());
}
else{
    echo "Connection was successfull.";
}
$sql= "DELETE FROM `contact` WHERE `name` = 'Rayhan2' LIMIT 2";
$result=mysqli_query($conn, $sql);
$aff=mysqli_affected_rows($conn);
echo"<br>Number of affected rows $aff <br>";
if($result){
    echo"<br>";
    echo "Deleted Successfully";
}
else {
 
    "Not Deleted Successfully";
}

?>