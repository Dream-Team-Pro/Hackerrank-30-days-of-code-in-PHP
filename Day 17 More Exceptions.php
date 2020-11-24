<?php
//Enter your code here
class Calculator {
    function power($n,$p) {
        if( $n<0 || $p<0 ) {
            throw new Exception("n and p should be non-negative");
        }
        return pow($n, $p);
    }
}