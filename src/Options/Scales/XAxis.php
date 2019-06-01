<?php

namespace Angeldm\ChartJS\Options\Scales;

use Angeldm\ChartJS\Options\Scale;
use Zend\Json\Json;

/**
 * Class XAxis
 * @package Angeldm\ChartJS\Options\Scales
 */
class XAxis extends Scale
{
    /**
     * @var float
     */
    private $categoryPercentage;

    /**
     * @var float
     */
    private $barPercentage;

    /**
     * @return float
     */
    public function getCategoryPercentage()
    {
        return $this->categoryPercentage;
    }

    /**
     * @param float $categoryPercentage
     *
     * @return $this
     */
    public function setCategoryPercentage($categoryPercentage)
    {
        $this->categoryPercentage = floatval($categoryPercentage);

        return $this;
    }

    /**
     * @return float
     */
    public function getBarPercentage()
    {
        return $this->barPercentage;
    }

    /**
     * @param float $barPercentage
     *
     * @return $this
     */
    public function setBarPercentage($barPercentage)
    {
        $this->barPercentage = floatval($barPercentage);

        return $this;
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
