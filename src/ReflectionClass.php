<?php

namespace BestServedCold\Reflection;

/**
 * Class ReflectionClass
 *
 * @package   BestServedCold\PhalueObjects\Utility\Reflection
 * @author    Adam Lewis <adam.lewis@bestservedcold.com>
 * @copyright Copyright (c) 2015 Best Served Cold Media Limited
 * @license   http://http://opensource.org/licenses/GPL-3.0 GPL License
 * @link      http://bestservedcold.com
 * @version   1.0.0
 */
class ReflectionClass extends AbstractReflection implements ReflectionInterface
{
    /**
     * @param $class
     */
    public function __construct($class)
    {
        $this->class = (string) $class;
    }
}
