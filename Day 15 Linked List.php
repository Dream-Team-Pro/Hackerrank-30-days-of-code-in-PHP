<?php

    function insert($head,$data){
      //complete this method
        $newNode = new Node($data);
        if(is_null($head)) {
            return $newNode;
        }
        $node = $head;
        while(!is_null($node->next)) {
            $node = $node->next;
        }
        $node->next = $newNode;
        return $head;      
    }

