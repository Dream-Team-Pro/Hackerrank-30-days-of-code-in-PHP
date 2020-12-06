<?php
$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $t);

for ($t_itr = 0; $t_itr < $t; $t_itr++) {
    fscanf($stdin, "%[^\n]", $nk_temp);
    $nk = explode(' ', $nk_temp);
    $n = intval($nk[0]);
    $k = intval($nk[1]);
    if( (($k-1)|$k) <= $n ) echo $k-1 . "\n";
    else echo $k-2 . "\n";    
}

fclose($stdin);
