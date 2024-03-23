<?php

namespace App\Models;

class CoffeeMachine
{
    public static function makeCoffee(int $amount): string
    {

        return "$amount ml de cafe";
    }
}
