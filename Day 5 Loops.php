<?php


$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fclose($stdin);

for ($i = 1; $i < 11; $i++) {
    $result = $n * $i;
    echo "$n x $i = " . $result . "\n";
}

