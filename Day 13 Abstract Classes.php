<?php
abstract class Book
{
    
    protected $title;
    protected  $author;
    
     function __construct($t,$a){
        $this->title=$t;
        $this->author=$a;
    }
    abstract protected function display();
}

//Write MyBook class
class Mybook extends Book 
{
    protected $price;
    function __construct($title, $author, $price) {
    parent::__construct(trim($title), trim($author));
    $this->price = $price;
    }

    function Display() {
        echo 'Title: ' . $this->title . "\n";
        echo 'Author: ' . $this->author . "\n";
        echo 'Price: ' . $this->price;
    }
    
}
