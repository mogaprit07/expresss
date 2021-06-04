<?php
//Numerical Array
//Method 1
$a[0] = 10;
$a[1] = 20;
$a[2] = 20.50;
$a[3] = "C";
$a[4] = "4";
//Method 2 //Index Dynamic Array
$a[] = 10;
$a[] = 20;
$a[] = 20.50;
$a[] = "C";
$a[] = "4";

//Method 3 create an array
$a = array(10,20,30,"c","c++",10.50,"php");

//Print Array Value
echo $a[3];

//Print Whole Array
for($i=0;$i<count($a);$i++){
    echo "<br/>".$a[$i];
}

//3 Inbuilt Function toDebug an Array
echo "<pre>";
print_r($a);
echo "<pre>";
var_dump($a);
echo "<pre>";

//sum array
$a = array(1,3,5,7,9);
echo array_sum($a);
?>

<?php
//product array
$a = array(1,3,5,7);
echo array_product($a);




