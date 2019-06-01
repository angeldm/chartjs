<?php

namespace Angeldm\ChartJS\Collection;


use Zend\Json\Json;

/**
 * Class Data
 * @package Angeldm\ChartJS\Collection
 */
class Data extends ArrayAccess implements \JsonSerializable
{
    /**
     * @return string
     */
    public function jsonSerialize()
    {
        return Json::encode($this->data);
    }
}
