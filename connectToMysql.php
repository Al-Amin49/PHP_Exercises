<?php
echo "Welcome to the stage where we are ready to get connected to a database.<br>";
/*ways to connect to a MySQL Database

1. MySQLi extension (MySQL improve extension)
2. PDO-Php data object(has two part 1.Procedural 2.Object-Oriented)
Procedural (function use hoy)
Object-oriented-- class and object

*mysql use korle mysqli extension use kora tik hobe
*/
//Connecting to the database
$servername="localhost";
$username="root";
$password="";

//Creat a connection 
$conn= mysqli_connect($servername,$username,$password);
//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: " .mysqli_connect_error());
}
else{
    echo "Connection was successful.";
}

//akane else na dile o kaj hobe
?>