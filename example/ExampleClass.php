<?php

class ExampleClass
{
    protected $protectedProperty = 1;
    protected static $protectedStaticProperty = 2;
    private $privateProperty = 3;
    private static $privateStaticProperty = 4;

    protected function protectedMethod($number)
    {
        return $number + 1;
    }

    private function privateMethod($number)
    {
        return $number + 2;
    }

    protected static function protectedStaticMethod($number)
    {
        return $number + 3;
    }

    private static function privateStaticMethod($number)
    {
        return $number + 4;
    }
}
