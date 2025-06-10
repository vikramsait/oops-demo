<?php
namespace MallSystem;

class Mall {
    public static $totalShops = 0; //Static Property

    public static function addShop() { //Static Method
        self::$totalShops++;           //Accessing static property
    }

    public static function getTotalShops() { //Static Method
        return self::$totalShops;
    }

    //Simulated Method Overloading using default parameter
    public static function openHours($day = "Weekday") {
        if ($day === "Weekend") {
            return "10 AM to 11 PM";
        }
        return "10 AM to 9 PM";
    }
}
