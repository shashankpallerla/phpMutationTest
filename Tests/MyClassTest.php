<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Classes\MyClass;

class MyClassTest extends TestCase
{
    private $instance;

    protected function setUp()
    {
        $this->instance = new MyClass();
    }

    public function testgetGradeOne()
    {
        $this->assertEquals('A',$this->instance->getGrade(95),'A if above 90');
    }

    public function testgetGradeTwo()
    {
        $this->assertEquals('C',$this->instance->getGrade(50),'C if below 70');
    }

    public function testGetValueOne()
    {
        $this->assertEquals(10,$this->instance->getValue(11),'10 if above 10');
    }

    public function testGetValueTwo()
    {
        $this->assertEquals(1,$this->instance->getValue(5),'1 if below 5');
    }


}
