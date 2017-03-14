<?php

require_once(__DIR__ . '/../vendor/autoload.php');
require_once('./ExampleClass.php');

use BestServedCold\Reflection\ReflectionClass;
use BestServedCold\Reflection\ReflectionObject;

$reflectionClass = new ReflectionClass(ExampleClass::class);

var_dump($reflectionClass->protectedStaticProperty);
var_dump($reflectionClass->privateStaticProperty);
var_dump($reflectionClass->protectedStaticMethod(2));
var_dump($reflectionClass->privateStaticMethod(4));

$reflectionObject = new ReflectionObject(new Exampleclass);

var_dump($reflectionObject->protectedProperty);
var_dump($reflectionObject->privateProperty);
var_dump($reflectionObject->protectedMethod(2));
var_dump($reflectionObject->privateMethod(4));
