<?php
echo "Welcome to Multidimensional arrays in PHP";
$multiDim= array(
    array(2,4,3,7),
    array(1,0,9,5),
    array(5, 2, 6, 9),
    array(4,8,6,7)
);
echo "<br>";
for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}
// echo $multiDim[0][0];
// echo $multiDim[0][1];
// echo $multiDim[0][2];
// echo $multiDim[0][3];
// echo"<br>";

//Three dimensional
$threeDim = array(
    array(
        array('Sadal Aam', 'Pakal Amm', 'Kothiya Aam', 'Sinduriya Aam'),
        array('Pakal kohanda', 'Kach kohanda', 'Gol kohanda', 'Pichakal kohanda'),
    ),
    array(
        array('Sadal angur', 'Bandhiya angur', 'Niman angur', 'Kharab angur'),
        array('Lamhar lauki', 'Chot lauki', 'Golki laudi', 'Jabar wala lauki'),
    ),
    array(
        array('Apple', 'Lal Apple', 'Kasatal Apple', 'Kanch Apple'),
        array('Safedka nenuaa', 'Karika nenuaa', 'Taja nenuaa', 'Basiya nenuaa'),
    ),
);

foreach($threeDim as $value){
    foreach($value as $value2){
        foreach($value2 as $value3){

            echo "| $value3";
        }
        echo "<br>";
    }
    echo "<br>";
}

?>
