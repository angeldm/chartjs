<?php

namespace Angeldm\ChartJS\Chart;

use Angeldm\ChartJS\Chart;
use Angeldm\ChartJS\ChartInterface;
use Angeldm\ChartJS\DataSet\RadarDataSet;
use Angeldm\ChartJS\Options\RadarOptions;

/**
 * Class Radar
 * @package Angeldm\ChartJS\Chart
 *
 * @method RadarDataSet createDataSet
 * @method RadarOptions options
 */
class Radar extends Chart implements ChartInterface
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'radar';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => RadarDataSet::class,
        'options' => RadarOptions::class,
    ];
}
