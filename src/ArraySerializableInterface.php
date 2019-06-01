<?php

namespace Angeldm\ChartJS;

/**
 * Interface ArraySerializableInterface
 * @package Angeldm\ChartJS
 */
interface ArraySerializableInterface
{
    /**
     * Should return an array containing all values.
     *
     * @return array
     */
    public function getArrayCopy();
}
