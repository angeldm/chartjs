<?php

namespace Angeldm\ChartJS;

use Angeldm\ChartJS\Collection\ArrayAccess;
use Zend\Json\Json;

/**
 * Class DataSetCollection
 * @package Angeldm\ChartJS
 */
class DataSetCollection extends ArrayAccess implements \JsonSerializable
{
    /**
     * @return array
     * @throws \ReflectionException
     * @throws \ReflectionException
     */
    public function getArrayCopy()
    {
        $rows   = [];
        foreach ($this->data as $row) {
            /** @var DataSet $row */
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
        return Json::encode($this->getArrayCopy());
    }
}
