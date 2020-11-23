<?php 

// Write your code here

    function __construct($array) {
        $this->elements = $array;
    }
    
    public function ComputeDifference() {
        $max = 1;
        $min = 100;
        foreach($this->elements as $num) {
            if( $num > $max ) $max = $num;
            if( $num < $min ) $min = $num;
        }
        $this->maximumDifference = $max - $min;
    }