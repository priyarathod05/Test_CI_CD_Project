<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testAddition()
    {
        $this->assertEquals(2 + 2, 4);
    }

    public function testStringEquality()
    {
        $this->assertSame('Hello', 'Hello');
    }
}
