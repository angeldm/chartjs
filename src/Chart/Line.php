<?php

namespace Angeldm\ChartJS\Chart;

use Angeldm\ChartJS\Chart;
use Angeldm\ChartJS\DataSet\LineDataSet;
use Angeldm\ChartJS\Options\LineOptions;

/**
 * Class Line
 * @package Angeldm\ChartJS\Chart
 * @method LineDataSet createDataSet()
 */
class Line extends Chart
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'line';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => LineDataSet::class,
        'options' => LineOptions::class,
    ];
}
