<?php

namespace Angeldm\ChartJS\Options\Scales;

use  Angeldm\ChartJS\Collection\ArrayAccess;
use Zend\Json\Json;

/**
 * Class XAxisCollection
 * @package Angeldm\ChartJS\Collection
 */
class XAxisCollection extends ArrayAccess implements \JsonSerializable
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
            /** @var XAxis $row */
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
