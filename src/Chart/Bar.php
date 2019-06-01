<?php

namespace Angeldm\ChartJS\Chart;

use Angeldm\ChartJS\Chart;
use Angeldm\ChartJS\DataSet\BarDataSet;
use Angeldm\ChartJS\Options\BarOptions;

/**
 * Class Bar
 * @package Angeldm\ChartJS\Chart
 *
 * @method BarDataSet createDataSet
 * @method BarOptions options
 */
class Bar extends Chart
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'bar';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => BarDataSet::class,
        'options' => BarOptions::class,
    ];
}
