<?php

namespace Angeldm\ChartJS;

/**
 * Interface ChartInterface
 * @package Angeldm\ChartJS
 */
interface ChartInterface
{
    /**
     * @return Options
     */
    public function options();

    /**
     * @return DataSet
     */
    public function createDataSet();

    /**
     * @param DataSet $dataSet
     *
     * @return $this
     */
    public function addDataSet(DataSet $dataSet);

    /**
     * @param $offset
     *
     * @return DataSet
     */
    public function getDataSet($offset);

    /**
     * @return CollectionInterface
     */
    public function dataSets();

    /**
     * @return string
     */
    public function render();
}
