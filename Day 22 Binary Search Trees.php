<?php
class Node{
    public $left,$right;
    public $data;
    function __construct($data)
    {
        $this->left=$this->right=null;
        $this->data = $data;
    }
}
class Solution{
    public function insert($root,$data){
        if($root==null){
            return new Node($data);
        }
        else{
            if($data<=$root->data){
                $cur=$this->insert($root->left,$data);
                $root->left=$cur;
            }
            else{
                $cur=$this->insert($root->right,$data);
                $root->right=$cur;
            }
            return $root;
        }
    }

    public function getHeight($root) {
        $heightLeft = 0;
        $heightRight = 0;

        if ($root->left != null) {
            $heightLeft = $this->getHeight($root->left) + 1;
        }
        if ($root->right != null) {
            $heightRight = $this->getHeight($root->right) + 1;
        }
        if($heightLeft > $heightRight) {
            return $heightLeft;
        } else {
            return $heightRight;
        }
    }

}//End of Solution