<?php

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$nbin = decbin($n);
$i = 0;
$count = 0;
$max = 0;
for($i = 0; $i < strlen($nbin); $i++) {
    if($nbin[$i] == 1) {
        $count++;
        if($count > $max) $max = $count;
        continue;
    }
    $count = 0;
}
echo $max;

fclose($stdin);
