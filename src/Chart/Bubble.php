<?php

namespace Angeldm\ChartJS\Chart;

use Angeldm\ChartJS\Chart;
use Angeldm\ChartJS\DataSet\BubbleDataSet;
use Angeldm\ChartJS\Options\BubbleOptions;

/**
 * Class Bubble
 * @package Angeldm\ChartJS\Chart
 *
 * @method BubbleDataSet createDataSet
 * @method BubbleOptions options
 */
class Bubble extends Chart
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'bubble';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => BubbleDataSet::class,
        'options' => BubbleOptions::class,
    ];
}
