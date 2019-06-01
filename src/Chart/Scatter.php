<?php

namespace Angeldm\ChartJS\Chart;

use Angeldm\ChartJS\Chart;
use Angeldm\ChartJS\DataSet\ScatterDataSet;
use Angeldm\ChartJS\Options\ScatterOptions;

/**
 * Class Scatter
 *
 * @package Angeldm\ChartJS\Chart
 *
 * @method ScatterDataSet createDataSet
 * @method ScatterOptions options
 */
class Scatter extends Chart
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'scatter';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => ScatterDataSet::class,
        'options' => ScatterOptions::class,
    ];
}
