<?php

namespace Angeldm\ChartJS\DataSet;

use Angeldm\ChartJS\DataSet;

/**
 * Class BubbleDataSet
 *
 * @package Angeldm\ChartJS\DataSet
 */
class BubbleDataSet extends DataSet
{
    /**
     * @var string
     */
    protected $pointStyle;

    /**
     * @var int
     */
    protected $radius;

    /**
     * @return string
     */
    public function getPointStyle()
    {
        return $this->pointStyle;
    }

    /**
     * @param string $pointStyle
     *
     * @return \Angeldm\ChartJS\DataSet\BubbleDataSet
     */
    public function setPointStyle($pointStyle)
    {
        $this->pointStyle = $pointStyle;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     *
     * @return \Angeldm\ChartJS\DataSet\BubbleDataSet
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;

        return $this;
    }
}
