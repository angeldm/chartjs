<?php

namespace Angeldm\ChartJS;

use Angeldm\ChartJS\Collection\ArrayAccess;
use Zend\Json\Json;

/**
 * Class LabelsCollection
 * @package Angeldm\ChartJS
 */
class LabelsCollection extends ArrayAccess implements \JsonSerializable
{
    /**
     * return string
     */
    public function jsonSerialize()
    {
        return Json::encode($this->data);
    }
}
