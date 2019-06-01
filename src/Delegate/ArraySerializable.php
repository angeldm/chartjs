<?php

namespace Angeldm\ChartJS\Delegate;

use Zend\Json\Expr;

/**
 * Class ArraySerializable
 * @package Angeldm\ChartJS\Model
 */
trait ArraySerializable
{
    /**
     * Will loop through class properties and try and assign their values to an array of data that will be returned.
     *
     * @return array
     * @throws \ReflectionException
     * @throws \Zend_Reflection_Exception
     */
    public function getArrayCopy()
    {
        $data            = [];
        $properties      = get_object_vars($this);
        $reflectionClass = new \Zend\Code\Reflection\ClassReflection($this);
        foreach ($properties as $property => $value) {
            // Skip property if it is not accessible
            if (! $reflectionClass->hasProperty($property)) {
                continue;
            }

            // Only process properties that aren't null
            if (! is_null($value)) {
                // Gather phpdoc from property
                $phpDoc = $reflectionClass->getProperty($property)->getDocBlock();
                $type   = $phpDoc->getTag('var')->getName();
                $object = false;

                // Prepend 'get' to the getter method.
                $getter = 'get' . ucfirst($property);
                if (is_object($value) && ! $this->$property instanceof Expr) {
                    $object = true;
                }

                // Determine whether the getter method is equal to the property name or is prepended by 'is' or 'get'
                if (strcmp($type, 'bool') === 0 || strcmp($type, 'boolean') === 0) {
                    // Prepend 'is' to the getter method
                    $getter = 'is' . ucfirst($property);
                } elseif (method_exists($this, $property) && is_object($value)) {
                    // The getter method is equal to the property name and the value is an actual object
                    $getter = $property;
                    $object = true;
                }

                // Abort if the method does not exist
                if (! method_exists($this, $getter)) {
                    continue;
                }

                // Assign the contents of the property to the data array
                $data[ $property ] = $object ? $this->$getter()->getArrayCopy() : $this->$getter();
            }
        }

        return $data;
    }
}
