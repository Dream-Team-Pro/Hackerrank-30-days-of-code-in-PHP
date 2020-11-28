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

	public function levelOrder($root){
      //Write your code here
      $arr = array();

        $arr[] = $root;
        while(!empty($arr)) {
            $node = array_shift($arr);
            if(!empty($node->left)) {
                $arr[] = $node->left;
            }
            if(!empty($node->right)) {
                $arr[] = $node->right;
            }
            echo $node->data." ";
        }      
    }

}//End of Solution