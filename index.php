<?php
require_once 'classes/Shop.php';
require_once 'classes/FoodCourt.php';
require_once 'classes/Customer.php';
require_once 'classes/Mall.php';

//namespace
use MallSystem\FoodCourt; 
use MallSystem\Customer;
use MallSystem\Mall;

//Object Creation (classes & objects)
$customer = new Customer("vikram", "vikki");
echo "Customer: " . $customer->getFullName() . "<br><br>";

//Object Creation + Inheritance + Polymorphism
$foodShop = new FoodCourt("Biriyani", "Guru", "Madhurai Special");
echo $foodShop->getInfo() . "<br><br>";

// Static Method with counting shops
Mall::addShop();
Mall::addShop();
Mall::addShop();

echo "Total Shops: " . Mall::getTotalShops() . "<br><br>";

//Simulated Method Overloading
echo "Mall Hours on Saturday: " . Mall::openHours("Weekend") . "<br>";
//Static Method without parameters
echo "Mall Hours on Sunday: " . Mall::openHours("Weekend") . "<br><br>";
//Static Method with default parameter
echo "Mall Hours on Monday: " . Mall::openHours() . "<br>";
echo "Mall Hours on Friday: " . Mall::openHours() . "<br>";