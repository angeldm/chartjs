<?php

namespace Angeldm\ChartJS\Options;

use Angeldm\ChartJS\ArraySerializableInterface;
use Angeldm\ChartJS\Delegate\ArraySerializable;
use Angeldm\ChartJS\Options\Scales\XAxis;
use Angeldm\ChartJS\Options\Scales\XAxisCollection;
use Angeldm\ChartJS\Options\Scales\YAxis;
use Angeldm\ChartJS\Options\Scales\YAxisCollection;
use Zend\Json\Json;

/**
 * Class Scales
 * @package Angeldm\ChartJS\Options
 */
class Scales implements ArraySerializableInterface, \JsonSerializable
{
    use ArraySerializable;

    /**
     * @var XAxisCollection
     */
    private $xAxes;

    /**
     * @var YAxisCollection
     */
    private $yAxes;

    /**
     * @return XAxis
     */
    public function createXAxis()
    {
        return new XAxis();
    }

    /**
     * @return YAxis
     */
    public function createYAxis()
    {
        return new YAxis();
    }

    /**
     * @return XAxisCollection
     */
    public function getXAxes()
    {
        if (is_null($this->xAxes)) {
            $this->xAxes = new XAxisCollection();
        }

        return $this->xAxes;
    }

    /**
     * @return YAxisCollection
     */
    public function getYAxes()
    {
        if (is_null($this->yAxes)) {
            $this->yAxes = new YAxisCollection();
        }

        return $this->yAxes;
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
