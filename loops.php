
<?php
//factorial
echo "-----For loop";
echo"<br>";
$fact=1;
for($x=1; $x<=10; $x++){
    $fact=$fact*$x; 
    echo "The number is: $fact\n";
}
//Sum of numbers
$sum=$i=0;
while($i<=10){
    $sum= $sum+$i;
     $i++;
}
echo "The Sum is $sum\n";
echo"<br>";
echo"-------foreach loop";
echo"<br>";

//foreach loop

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) 
{
  echo "$value\n";
}
$age=array("Al-Amin"=>"22", "Shakib"=>"26", "Jami"=>"19");
foreach($age as $x=>$value)
{
    echo "$x = $value\n";
}

//While loop
echo"<br>";
echo"-------while loop";
echo"<br>";
$i = 0; 
while($i<5){
    echo "The value of i is ";
    echo $i+1;
    echo "<br>";
    $i+=1; 
}

?>