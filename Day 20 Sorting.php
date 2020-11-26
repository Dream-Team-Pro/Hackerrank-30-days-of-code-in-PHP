<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle, "%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);
// Write Your Code Here

$numberOfSwaps = 0;
for ($i = 0; $i < count($a); $i++ ) {
    for($j = 0; $j < count($a) - 1 ; $j++) {
        if($a[$j] > $a[$j + 1]) {
            $temp=$a[$j];
            $a[$j]=$a[$j+1];
            $a[$j+1]=$temp;
            $numberOfSwaps ++;
        } 
    } 
}
     if ($numberOfSwaps > 0) {
        echo "Array is sorted in " . $numberOfSwaps . " swaps." . "\n";
        echo "First Element: " .  $a[0] . "\n";
        echo "Last Element: " .  end($a) . "\n";
    } else {
        echo "Array is sorted in 0 swaps." . "\n";
        echo "First Element: " .  $a[0] . "\n";
        echo "Last Element: " .  end($a) . "\n";        
    }             
 
?>
