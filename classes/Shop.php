<?php
namespace MallSystem; //Namespace

abstract class Shop { //Abstraction
    protected $name; //Encapsulation + protected access specifier
    private $owner;  //Encapsulation + private access specifier

    public function __construct($name, $owner) { //Constructor
        $this->name = $name;
        $this->setOwner($owner); //Setter
    }

    abstract public function getInfo(); //Abstract Method (Abstraction)

    public function getName() {//Getter
        return $this->name;
    }

    public function setOwner($owner) { //Setter
        $this->owner = $owner;
    }

    public function getOwner() {       //Getter
        return $this->owner;
    }
}
