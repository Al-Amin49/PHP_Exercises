<?php

$t= date("H");
if($t<"10"){
    echo "Have a good morning";
}
else if($t<"20"){
    echo "Have a good day";
}
else {
    echo "Have a good night";
}
echo "\n";
$num=11;
if($num%2==0){
    echo "even";
}
else {
    echo "odd";
}



?>