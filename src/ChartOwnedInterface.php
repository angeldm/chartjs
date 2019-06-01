<?php

namespace Angeldm\ChartJS;

/**
 * Class DataSet
 * @package Angeldm\ChartJS
 */
interface ChartOwnedInterface
{
    /**
     * @param ChartInterface $chart
     *
     * @return $this
     */
    public function setOwner(ChartInterface $chart);

    /**
     * @return ChartInterface
     */
    public function owner();
}
