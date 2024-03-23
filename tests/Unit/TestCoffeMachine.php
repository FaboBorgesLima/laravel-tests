<?php

namespace Tests\Unit;

use App\Models\CoffeeMachine;
use PHPUnit\Framework\TestCase;

class CoffeeMachineTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function makeCoffee(): void
    {
        $this->assertSame("100 ml of coffee", CoffeeMachine::makeCoffee(100));
    }

    public function makeTea(): void
    {
        $this->assertSame("100 ml of tea", CoffeeMachine::makeTea(100), "im a coffee machine");
    }
}
