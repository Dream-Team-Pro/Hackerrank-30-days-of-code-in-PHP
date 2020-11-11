<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Declare second integer, double, and String variables.
$i2 = fgets($handle);
$d2 = fgets ($handle);
$s2 = fgets ($handle);
// Read and save an integer, double, and String to your variables.
echo $i + $i2 . "\n";
echo number_format(($d + $d2), 1) . "\n";
echo $s . $s2 . "\n";

// Print the sum of both integer variables on a new line.

// Print the sum of the double variables on a new line.

// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.

fclose($handle);