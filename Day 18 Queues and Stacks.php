<?php

class Solution {
    // Write your code here
    private $stack = [];
    private $queue = [];
    function pushCharacter ($ch) {
        array_push($this->stack, $ch);
    }
    function enqueueCharacter ($ch) {
        array_push($this->queue, $ch);
    }
    function popCharacter () {
        return array_pop($this->stack);
    }
    function dequeueCharacter () {
        return array_shift($this->queue);
    }    
    
}