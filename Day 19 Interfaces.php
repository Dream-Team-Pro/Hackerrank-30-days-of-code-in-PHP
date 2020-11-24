<?php
interface AdvancedArithmetic{
    public function divisorSum($n);
}

/*
 * Write your code here
 */
class Calculator implements AdvancedArithmetic {
    function divisorSum($n) {
        $sum = 0;
        for($i=1; $i <= $n; $i++) {
            if( $n % $i == 0 ) $sum+=$i;
        }
        return $sum;
    }
}