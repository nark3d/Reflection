<?php

require_once(__DIR__ . '/../vendor/autoload.php');
require_once('./ExampleClass.php');

use BestServedCold\Reflection\ReflectionClass;
use BestServedCold\Reflection\ReflectionObject;

$reflectionClass = new ReflectionClass(ExampleClass::class);

echo $reflectionClass->protectedStaticProperty . PHP_EOL;
echo $reflectionClass->privateStaticProperty . PHP_EOL;
echo $reflectionClass->protectedStaticMethod(2) . PHP_EOL;
echo $reflectionClass->privateStaticMethod(4) . PHP_EOL;

$reflectionObject = new ReflectionObject(new Exampleclass);

echo $reflectionObject->protectedProperty . PHP_EOL;
echo $reflectionObject->privateProperty . PHP_EOL;
echo $reflectionObject->protectedMethod(2) . PHP_EOL;
echo $reflectionObject->privateMethod(4) . PHP_EOL;
