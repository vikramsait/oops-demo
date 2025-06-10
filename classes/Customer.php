<?php
namespace MallSystem;

class Customer { 
    private $firstName; //Encapsulation
    private $lastName;  //Encapsulation

    public function __construct($first, $last) { //Constructor
        $this->firstName = $first;
        $this->lastName = $last;
    }

    public function getFullName() { //Getter
        return $this->firstName . " " . $this->lastName;
    }

    public function setFirstName($name) { //Setter
        $this->firstName = $name;
    }
}
