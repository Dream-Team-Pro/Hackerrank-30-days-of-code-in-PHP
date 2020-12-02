<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp, '%d %d %d', $actualDay, $actualMonth, $actualYear);
fscanf($_fp, '%d %d %d', $expectedDay, $expectedMonth, $expectedYear);

function fine($actualDay, $actualMonth, $actualYear, $expectedDay, $expectedMonth, $expectedYear) {
    if($actualYear == $expectedYear) {
        if($actualMonth == $expectedMonth) {
            if($actualDay > $expectedDay) {
               return 15*($actualDay - $expectedDay); 
            } else {
                return 0;
            }
        } else if($actualMonth > $expectedMonth) {
            return 500*($actualMonth - $expectedMonth);
        } else {
            return 0;
        }
    } else if($actualYear < $expectedYear) {
        return 0;
    } else {
        return 10000;
    }
}

$fine = fine($actualDay, $actualMonth, $actualYear, $expectedDay, $expectedMonth, $expectedYear);
echo $fine;


?>