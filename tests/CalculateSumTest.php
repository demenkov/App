<?php

namespace App\tests;

use App\src\CalculateSum;
use PHPUnit\Framework\TestCase;

class CalculateSumTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testAdd($a, $b, $c)
    {
        $this->assertEquals($c, $a + $b);
    }

    public function provider()
    {
        return array(
            array(2, 1, 1),
            array(-2, -1, -1),
            array(0, null, null),
            array(20, '10', '10')
        );
    }
}


