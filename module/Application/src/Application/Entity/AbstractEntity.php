<?php

namespace Application\Entity;

use Zend\Json\Encoder;

/**
 * Class AbstractEntity
 */
abstract class AbstractEntity
{
    /**
     * @return array
     */
    public function toArray()
    {
        $reflect = new \ReflectionClass($this);
        $props   = $reflect->getProperties();

        $array = [];
        foreach ($props as $prop) {
            $method = 'get' . ucfirst($prop->getName());
            if (!method_exists($this, $method)) continue;

            $value = call_user_func(array($this, $method));
            if (is_object($value) && method_exists($value, 'toArray')) {
                $value = call_user_func(array($value, 'toArray'));
            }
            else if (is_object($value) && method_exists($value, '__toString')) {
                $value = call_user_func(array($value, '__toString'));
            }
            else if ($value instanceof \DateTime) {
                $value = $value->format(\DateTime::ATOM);
            }
            if (is_string($value) || is_numeric($value) || is_bool($value)) {
                $array[$prop->getName()] = $value;
            }
        }
        return $array;
    }

    /**
     * @return string
     */
    public function toJson()
    {
        return Encoder::encode($this->getArray());
    }
}