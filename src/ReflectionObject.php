<?php

namespace BestServedCold\Reflection;

/**
 * Class ReflectionObject
 *
 * @package   BestServedCold\PhalueObjects\Utility\Reflection
 * @author    Adam Lewis <adam.lewis@bestservedcold.com>
 * @copyright Copyright (c) 2015 Best Served Cold Media Limited
 * @license   http://http://opensource.org/licenses/GPL-3.0 GPL License
 * @link      http://bestservedcold.com
 * @since     1.0.0
 * @version   1.0.0
 */
class ReflectionObject extends AbstractReflection implements ReflectionInterface
{
    /**
     * @param object $object
     */
    public function __construct($object)
    {
        $this->object = $object;
        $this->class = (string) get_class($object);
    }
}
