<?php

namespace BestServedCold\Reflection;

class ReflectionObjectTest extends TestCase
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
        self::assertSame(
            $this->publicProperty,
            (new ReflectionObject($this))->publicProperty
        );
        self::assertSame(
            $this->protectedProperty,
            (new ReflectionObject($this))->protectedProperty
        );
        self::assertSame(
            $this->privateProperty,
            (new ReflectionObject($this))->privateProperty
        );
    }

    public function testSetProperty()
    {
        $reflection = new ReflectionObject($this);
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
        self::assertSame(2, (new ReflectionObject($this))->publicMethod(1));
        self::assertSame(3, (new ReflectionObject($this))->protectedMethod(1));
        self::assertSame(4, (new ReflectionObject($this))->privateMethod(1));
    }
}
