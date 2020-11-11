<?php

// Complete the solve function below.
function solve($meal_cost, $tip_percent, $tax_percent) {
$tip_percent = $meal_cost * 0.2;
$tax_percent = $meal_cost * 0.08;
$totalcost = floor($meal_cost + $tip_percent + $tax_percent);
echo $totalcost;
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%lf\n", $meal_cost);

fscanf($stdin, "%d\n", $tip_percent);

fscanf($stdin, "%d\n", $tax_percent);

solve($meal_cost, $tip_percent, $tax_percent);

fclose($stdin);
