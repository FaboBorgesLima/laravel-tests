<?php

namespace Tests\Unit;

use App\Models\CoffeeMachine;
use PHPUnit\Framework\TestCase;

class CoffeeMachineTeaTest extends TestCase
{
    public function testMakeTea(): void
    {
        $this->assertSame("im not a tea pot", CoffeeMachine::makeTea(100), "im a coffee machine");
    }
}
