<?php

class person {
    protected $firstName, $lastName, $id;
    
    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }
    
    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}
class Student extends person {
    private $testScores;
  
    /*	
    *   Class Constructor
    *   
    *   Parameters:
    *   firstName - A string denoting the Person's first name.
    *   lastName - A string denoting the Person's last name.
    *   id - An integer denoting the Person's ID number.
    *   scores - An array of integers denoting the Person's test scores.
    */
    // Write your constructor here
public function __construct($first_name, $last_name, $identification, $scores) {
        parent::__construct($first_name, $last_name, $identification);
        $this->testScores = $scores;
}
    /*	
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    // Write your function here

    function calculate() {
        $average = array_sum($this->testScores) / count($this->testScores);
        if( $average >= 90 ) return 'O';
        if( $average >= 80 ) return 'E';
        if( $average >= 70 ) return 'A';
        if( $average >= 55 ) return 'P';
        if( $average >= 40 ) return 'D';
        return 'T';
    }
}

