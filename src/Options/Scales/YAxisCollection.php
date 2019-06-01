<?php

namespace Angeldm\ChartJS\Options\Scales;

use  Angeldm\ChartJS\Collection\ArrayAccess;
use Zend\Json\Json;

/**
 * Class YAxisCollection
 * @package Angeldm\ChartJS\Collection
 */
class YAxisCollection extends ArrayAccess implements \JsonSerializable
{
    /**
     * @return array
     * @throws \ReflectionException
     * @throws \ReflectionException
     */
    public function getArrayCopy()
    {
        $rows = [];
        foreach ($this->data as $row) {
            /** @var YAxis $row */
            $rows[] = $row->getArrayCopy();
        }

        return $rows;
    }

    /**
     * @return string
     * @throws \ReflectionException
     * @throws \ReflectionException
     */
    public function jsonSerialize()
    {
        return Json::encode($this->getArrayCopy(), false, [ 'enableJsonExprFinder' => true ]);
    }
}
