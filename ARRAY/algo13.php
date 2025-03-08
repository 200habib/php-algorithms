<?php

// "What is the largest number in nums?".

$E = [10, 5, 8];
$l = 0;
for ($i=0; $i<count($E); $i++) {
    
	if ($l < $E[$i]) {
	$l = $E[$i];	
echo $l . "\n";
}
echo "finale: " . $l . "\n";

}
