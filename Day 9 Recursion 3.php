<?php

// Complete the factorial function below.
$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$result = factorial($n);

function factorial($n) {
    if ($n == 0) return 1;
    return $n * ($n - 1);
}
print factorial($n);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
