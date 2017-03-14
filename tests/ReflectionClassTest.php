<?php

namespace BestServedCold\Reflection;

class ReflectionClassTest extends TestCase
{
    public $reflection;
    public $reflectionStatic;
    public $publicProperty;
    public static $publicStaticProperty;
    protected $protectedProperty;
    protected static $protectedStaticProperty;
    private $privateProperty;
    private static $privateStaticProperty;

    public function setUp()
    {
        parent::setUp();
        $this->publicProperty = 1;
        self::$publicStaticProperty = 2;
        $this->protectedProperty = 3;
        self::$protectedStaticProperty = 4;
        $this->privateProperty = 5;
        self::$privateStaticProperty = 6;

    }

    public function testGetProperty()
    {
        self::assertSame(self::$publicStaticProperty,
            (new ReflectionClass(__CLASS__))->publicStaticProperty);
        self::assertSame(self::$protectedStaticProperty,
            (new ReflectionClass(__CLASS__))->protectedStaticProperty);
        self::assertSame(self::$privateStaticProperty,
            (new ReflectionClass(__CLASS__))->privateStaticProperty);
    }

    public function testSetProperty()
    {
        $reflection = new ReflectionClass(__CLASS__);
        $reflection->publicStaticProperty = 5;
        self::assertSame(5, self::$publicStaticProperty);
        $reflection->protectedStaticProperty = 5;
        self::assertSame(5, self::$protectedStaticProperty);
        $reflection->privateStaticProperty = 5;
        self::assertSame(5, self::$privateStaticProperty);
    }

    public function publicMethod($number)
    {
        return $number + 1;
    }

    protected function protectedMethod($number)
    {
        return $number + 2;
    }

    private function privateMethod($number)
    {
        return $number + 3;
    }

    public static function publicStaticMethod($number)
    {
        return $number + 4;
    }

    protected static function protectedStaticMethod($number)
    {
        return $number + 5;
    }

    private static function privateStaticMethod($number)
    {
        return $number + 6;
    }

    public function testCallMethod()
    {
        self::assertSame(
            5,
            (new ReflectionClass(__CLASS__))->publicStaticMethod(1)
        );
        self::assertSame(
            6,
            (new ReflectionClass(__CLASS__))->protectedStaticMethod(1)
        );
        self::assertSame(
            7,
            (new ReflectionClass(__CLASS__))->privateStaticMethod(1)
        );
    }
}
