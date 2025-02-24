<?php
$A = [2, 4, 6];  
$Ac = [1, 3, 5];  

$probA = count($A) / 6;   
$probAc = 1 - $probA;     

echo "P(A) = $probA\n";
echo "P(Ac) = $probAc\n";

$dado = rand(1, 6);
echo "The dice rolled: $dado\n";

if (in_array($dado, $A)) {
    echo "$dado belongs to A (even number).\n";
} else {
    echo "$dado belongs to Ac (odd number).\n";
}
?>

