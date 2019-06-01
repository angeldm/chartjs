<?php

namespace Angeldm\ChartJS\Chart;

use Angeldm\ChartJS\Chart;
use Angeldm\ChartJS\ChartInterface;
use Angeldm\ChartJS\DataSet\PolarAreaDataSet;
use Angeldm\ChartJS\Options\PolarAreaOptions;

/**
 * Class PolarArea
 * @package Angeldm\ChartJS\Chart
 *
 * @method PolarAreaDataSet createDataSet
 * @method PolarAreaOptions options
 */
class PolarArea extends Chart implements ChartInterface
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'polarArea';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => PolarAreaDataSet::class,
        'options' => PolarAreaOptions::class,
    ];
}
