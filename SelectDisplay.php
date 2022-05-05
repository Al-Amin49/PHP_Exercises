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
$sql ="SELECT * FROM `contact`";
$result= mysqli_query($conn,$sql);

//Find the number of records returned

$num= mysqli_num_rows($result);
echo "<br>";
echo $num;
echo "records found in the database";
echo "<br>";
//Display the rows returned by the sql query

if($num>0){
    // $row =mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // $row =mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row =mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row =mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row =mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row =mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row =mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    /*
    Akane upore 7 ta run koray sesherta null dekiyese karon 6 ti serial no ase
    r ny tar jonno. atake oti shohoje while loop er maddome kora jay.
    */
    while ($row =mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo "<br>";
    echo $row['sno']  ." Hello ". $row['name'] ." Your email is ".$row['email'] ." your concern section info is here " .$row['concern']." Date you submitted ". $row['date'];
    echo "<br>";
    }
}



?>