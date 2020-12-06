<?php

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);

$rows = [];
for ($N_itr = 0; $N_itr < $N; $N_itr++) {
    fscanf($stdin, "%[^\n]", $firstNameEmailID_temp);
    $firstNameEmailID = explode(' ', $firstNameEmailID_temp);
    $firstName = $firstNameEmailID[0];
    $emailID = $firstNameEmailID[1];
    if(preg_match('/^[a-z]{1,20}$/',$firstName)<1) continue;
    if(preg_match('/^[a-z\.@]{1,50}@gmail.com$/',$emailID)<1) continue;
    $rows[] = ['firstName'=>$firstName,'emailID'=>$emailID];    
}
fclose($stdin);

usort($rows, function($a,$b) {
   return $a['firstName'] > $b['firstName']; 
});
foreach($rows as $row) {
    echo $row['firstName'] . "\n";
}