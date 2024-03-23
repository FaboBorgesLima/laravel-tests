<?php

namespace Tests\Unit;

use App\Models\CoffeeMachine;
use PHPUnit\Framework\TestCase;

class CoffeeMachineTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testMakeCoffee(): void
    {
        $this->assertSame("100 ml of coffee", CoffeeMachine::makeCoffee(100));
    }

    public function testMakeTea(): void
    {
        $this->assertSame("im not a tea pot", CoffeeMachine::makeTea(100), "im a coffee machine");
    }
}
