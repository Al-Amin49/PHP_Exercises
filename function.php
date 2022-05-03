<?php
//Sum
function sum($num1, $num2)
{
   $summation =$num1+$num2;
    return $summation; 
}
$result = sum(10,10);
echo "The sum is: $result\n";
//multiplication table
$n=5;
for($i=1;$i<=10;$i++){
    echo " $n*$i"."=".$n*$i."\n";
}
//factorial 
function factorial($n)
{
    $fact=1;
    for($i=1;$i<=5;$i++){
        $fact=$fact*$i;
    }
   
    return $fact;
}
$result= factorial(5);
echo "The factorial is ".$result;


?>