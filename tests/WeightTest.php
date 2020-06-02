<?php

namespace Sidis405\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Sidis405\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kgs_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
