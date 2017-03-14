[![Build Status](https://travis-ci.org/nark3d/Reflection.svg?branch=master)](https://travis-ci.org/nark3d/Reflection)
[![Build Status](https://scrutinizer-ci.com/g/nark3d/Reflection/badges/build.png?b=master)](https://scrutinizer-ci.com/g/nark3d/Reflection/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/nark3d/Reflection/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/nark3d/Reflection/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nark3d/Reflection/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nark3d/Reflection/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/4c0863ee-8947-468c-9b7e-165704e98c5f/mini.png)](https://insight.sensiolabs.com/projects/4c0863ee-8947-468c-9b7e-165704e98c5f)
[![Latest Stable Version](https://img.shields.io/packagist/v/best-served-cold/reflection.svg)](https://packagist.org/packages/best-served-cold/reflection)

# Reflection

A simple way of interrogating private methods and properties via overloading.

## Install
```shell
composer require best-served-cold/reflection
```

## Usage 
Take this class:
```php
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
```

### Usage as a class
```php
$reflectionClass = new ReflectionClass(ExampleClass::class);

echo $reflectionClass->protectedStaticProperty . PHP_EOL;
echo $reflectionClass->privateStaticProperty . PHP_EOL;
echo $reflectionClass->protectedStaticMethod(2) . PHP_EOL;
echo $reflectionClass->privateStaticMethod(4) . PHP_EOL;
```

Returns:
```shell
2
4
5
8

```

### Usage as an object

```php
$reflectionObject = new ReflectionObject(new Exampleclass);

echo $reflectionObject->protectedProperty . PHP_EOL;
echo $reflectionObject->privateProperty . PHP_EOL;
echo $reflectionObject->protectedMethod(2) . PHP_EOL;
echo $reflectionObject->privateMethod(4) . PHP_EOL;

```

Returns:
```shell
1
3
3
6
[A
```

