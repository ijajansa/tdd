<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\StringCalculator;

class StringCalculatorTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_check_zero()
    {
        $calculator = new StringCalculator();
        $result = $calculator->add("");
        $this->assertEquals(0, $result);
    }
}
