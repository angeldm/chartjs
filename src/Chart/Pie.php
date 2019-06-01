<?php

namespace Angeldm\ChartJS\Chart;

use Angeldm\ChartJS\Chart;
use Angeldm\ChartJS\ChartInterface;
use Angeldm\ChartJS\DataSet\PieDataSet;
use Angeldm\ChartJS\Options\PieOptions;

/**
 * Class Pie
 * @package Angeldm\ChartJS\Chart
 *
 * @method PieDataSet createDataSet
 * @method PieOptions options
 */
class Pie extends Chart implements ChartInterface
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'pie';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => PieDataSet::class,
        'options' => PieOptions::class,
    ];
}
