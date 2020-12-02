<?php
class Node{
    public $data;
    public $next;
    function __construct($d)
    {
        $this->data = $d;
        $this->next = NULL;
    }
}
class Solution{

	function removeDuplicates($head){
        //Write your code here
        $current = $head;
        while( !is_null($current) && !is_null($current->next) ) {
            while( !is_null($current->next) && $current->data == $current->next->data) {
                $current->next = $current->next->next;
            }
            $current = $current->next;
        }
        return $head;
    }

    function insert($head,$data){