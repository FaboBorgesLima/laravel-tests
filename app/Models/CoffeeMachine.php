<?php

namespace App\Models;

use function Laravel\Prompts\error;

class CoffeeMachine
{
    private int $max_volume = 0;
    private int $coffee = 0;

    public function __construct(int $max_volume = 0)
    {
        $this->max_volume = $max_volume;
    }

    public function makeCoffee(int $amount): bool
    {

        if ($this->coffee == $this->max_volume) {
            return false;
        }

        $this->coffee += $amount;

        if ($this->max_volume < $this->coffee) {
            $this->coffee = $this->max_volume;
        }

        return true;
    }

    public function getCoffee(): int
    {
        return $this->coffee;
    }

    public function makeTea(int $amount): bool
    {

        return false;
    }

    public function getTea(): int
    {
        return 0;
    }
}
