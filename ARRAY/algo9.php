<?php

//             1
//          3     5
//       7     9    11
//   13    15    17    19
//21    23    25    27    29
$n = 5;
$p = [1, 3 , 5];
if ($n == 1) {
$h = 7;
} else if ($n == 2) {
$h = 7;

} else {
$sum = - $p[0] + $p[1] + $p[2] . "\n"; 

for ($i = 1; $i < 3; $i ++) {

 if ($i == 1) { 

$m =$sum +2;	

$array1 = [$p[1], $sum, $m] ;

echo "Valore quando i < 1: ";
var_dump($array1); 
echo "\n";

}else {

$m = $sum +2;

}
	

}
}
