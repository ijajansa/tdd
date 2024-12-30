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
    public function test_single_number()
    {
        $calculator = new StringCalculator();
        $result = $calculator->add("1");
        $this->assertEquals(1, $result);
    }
    public function test_negative()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("negative numbers not allowed: -1,-2");
        $calculator = new StringCalculator();
        $calculator->add("-1,-2,3");
    }
    public function test_two_numbers()
    {
        $calculator = new StringCalculator();
        $result = $calculator->add("1,2");
        $this->assertEquals(3, $result);
    }
    public function test_new_line_delimeter()
    {
        $calculator = new StringCalculator();
        $result = $calculator->add("1\n2,3");
        $this->assertEquals(6, $result);
    }
    public function test_custom_delimiters()
    {
        $calculator = new StringCalculator();
        $result = $calculator->add("//;\n1;2");
        $this->assertEquals(3, $result);
    }
}
