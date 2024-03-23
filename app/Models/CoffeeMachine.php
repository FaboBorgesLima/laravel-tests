<?php

namespace App\Models;

class CoffeeMachine
{
    public static function makeCoffee(int $amount): string
    {

        return "$amount ml of coffee";
    }
    public static function makeTea(int $amount): string
    {

        return "im not a tea pot";
    }
}
