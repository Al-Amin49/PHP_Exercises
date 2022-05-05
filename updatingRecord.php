<?php

//Connecting to the database
$servername="localhost";
$username="root";
$password="";
$database="contactus";
//create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successful
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
 echo "Connection was successful";
}
$sql = "SELECT * FROM `contact` WHERE `name`='Rayhan'";
$result = mysqli_query($conn, $sql);

//usage of WHERE clause to fetch data from the database.
$num= mysqli_num_rows($result);
echo "<br>";
echo $num." records found in the database<br>";
echo "<br>";
//Display the rows returned by the sql query.
$no=1;//ata dewa hoyese serially show korar jonno
if($num>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "<br>";
    echo $no." Hello ". $row['name'] ." Your email is ".$row['email'] ." your concern section info is here " .$row['concern']." Date you submitted ". $row['date'];
    echo "<br>";
    $no++;
    }
}

//Usage of WHERE clause to Update data.
 $sql = "UPDATE `contact` SET `name` = 'Jackie' WHERE `contact`.`sno` = 6";
 $result= mysqli_query($conn, $sql);

 echo var_dump($result);
 $aff= mysqli_affected_rows($conn); //koyta row update hoyse seta dekabe
 echo "<br>Number of affected rows $aff <br>";
 
 if($result){
     echo "We Updated the record successfully.";
 }
 else{
     echo "We could not updated the record successfully.";
 }




?>