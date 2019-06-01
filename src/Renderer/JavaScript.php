<?php

namespace Angeldm\ChartJS\Renderer;

/**
 * Class JavaScript
 * @package Angeldm\ChartJS\Renderer
 */
class JavaScript extends Renderer
{
    /**
     * Renders the necessary JavaScript for the chart to function in the frontend.
     *
     * @param int|null $flags
     *
     * @return string
     * @throws \ReflectionException
     * @throws \ReflectionException
     */
    public function render($flags = null)
    {
        $script = [];

        // First, setup the canvas context
        $script[] = "var ctx = document.getElementById( \"{$this->chart->getId()}\" ).getContext( \"2d\" );";

        // Now, setup the chart instance
        $jsonRenderer = new Json($this->chart);
        $json         = $jsonRenderer->render($flags);
        $script[]     = "var chart = new Chart( ctx, {$json} );";

        // Return the script
        return "\nwindow.onload=(function(oldLoad){return function(){\n"
            . "if( oldLoad ) oldLoad();\n"
            . implode("\n", $script) . "\n"
            . "}})(window.onload);\n";
    }
}
