<?php
namespace MallSystem;

require_once 'Shop.php';


class FoodCourt extends Shop { //Inheritance
    private $cuisineType;

    public function __construct($name, $owner, $cuisineType) { //Constructor
        parent::__construct($name, $owner); //Calling parent constructor
        $this->cuisineType = $cuisineType;
    }

    public function getInfo() { //Polymorphism
        return "Food: {$this->name}, Special: {$this->cuisineType}, Owner: " . $this->getOwner();
    }
    
}
