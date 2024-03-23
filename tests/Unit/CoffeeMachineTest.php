<?php

use App\Models\CoffeeMachine;
use PHPUnit\Framework\TestCase;

class CoffeeMachineTest extends TestCase
{
    public function testMakeCoffee(): void
    {

        $machine = new CoffeeMachine(1000);

        $this->assertTrue($machine->makeCoffee(500));
    }
    public function testGetCoffee(): void
    {

        $machine = new CoffeeMachine(1000);

        $machine->makeCoffee(500);

        $this->assertEquals(500, $machine->getCoffee());
    }
    public function testMakeTea(): void
    {

        $machine = new CoffeeMachine(1000);

        $this->assertFalse($machine->makeTea(100));
    }
    public function testGetTea(): void
    {
        $machine = new CoffeeMachine(1000);

        $machine->makeTea(100);

        $this->assertEquals(0, $machine->getTea());
    }
}
