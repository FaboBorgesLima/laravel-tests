<?php

namespace Tests\Unit;

use App\Models\CoffeeMachine;
use PHPUnit\Framework\TestCase;

class CoffeeMachineTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testCoffeeMachine(): void
    {
        $this->assertSame("100 ml de cafe", CoffeeMachine::makeCoffee(100));
    }
}
