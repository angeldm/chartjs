<?php

namespace Angeldm\ChartJS;

/**
 * Class Factory
 * @package Angeldm\ChartJS
 */
class Factory
{
    const BAR            = 'bar';
    const BUBBLE         = 'bubble';
    const DOUGHNUT       = 'doughnut';
    const HORIZONTAL_BAR = 'horizontalBar';
    const LINE           = 'line';
    const PIE            = 'pie';
    const POLAR_AREA     = 'polarArea';
    const RADAR          = 'radar';
    const SCATTER        = 'scatter';

    /**
     * @param $type
     *
     * @return Chart
     */
    public function create($type)
    {
        $className  = ucfirst($type);
        $namespace  = "\\Angeldm\\ChartJS\\Chart";
        $path       = "{$namespace}\\{$className}";
        if (! class_exists($path)) {
            throw new \InvalidArgumentException("Invalid chart type. {$path} does not exist.");
        }

        return new $path;
    }
}
