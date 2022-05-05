<?php
//Connecting to the database

$servername="localhost";
$username="root";
$password="";
$database="firstMysql";
//create a connection
$conn = mysqli_connect($servername,$username,$password,$database);

//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}


//Variables to inserted to the table
$order_id=4;
$name="SamSung note Galaxy";
$quantity=1;
$price=32999;

//sql query to be executed
$sql= "INSERT INTO `produc` (`order_id`, `name`, `quantity`, `price`)
 VALUES('$order_id','$name','$quantity','$price')";
 $result= mysqli_query($conn,$sql);

 //Add a new product to the product table in the Database
 if($result){
    echo "The table has benn inserted successfully!<br>";
}
else{
    echo "The table has not inserted successfully because of this error ---->". mysqli_error($conn);
}

?>
