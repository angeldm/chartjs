<?php

namespace Angeldm\ChartJS;

use Angeldm\ChartJS\Delegate\ArraySerializable;
use Angeldm\ChartJS\Options\Animation;
use Angeldm\ChartJS\Options\Hover;
use Angeldm\ChartJS\Options\Layout;
use Angeldm\ChartJS\Options\Legend;
use Angeldm\ChartJS\Options\Scales;
use Angeldm\ChartJS\Options\Title;
use Angeldm\ChartJS\Options\Tooltips;
use Zend\Json\Json;

/**
 * Class Options
 * @package Angeldm\ChartJS
 */
class Options implements ChartOwnedInterface, ArraySerializableInterface, \JsonSerializable
{
    use ChartOwned;
    use ArraySerializable;

    /**
     * @var Layout
     */
    protected $layout;

    /**
     * @var Title
     */
    protected $title;

    /**
     * @var Hover
     */
    protected $hover;

    /**
     * @var Scales
     */
    protected $scales;

    /**
     * @var Animation
     */
    protected $animation;

    /**
     * @var Legend
     */
    protected $legend;

    /**
     * @var Tooltips
     */
    protected $tooltips;

    /**
     * @return Layout
     */
    public function getLayout()
    {
        if (is_null($this->layout)) {
            $this->layout   = new Layout();
        }

        return $this->layout;
    }

    /**
     * @return Title
     */
    public function getTitle()
    {
        if (is_null($this->title)) {
            $this->title = new Title();
        }

        return $this->title;
    }

    /**
     * @return Hover
     */
    public function getHover()
    {
        if (is_null($this->hover)) {
            $this->hover = new Hover();
        }

        return $this->hover;
    }

    /**
     * @return Scales
     */
    public function getScales()
    {
        if (is_null($this->scales)) {
            $this->scales = new Scales();
        }

        return $this->scales;
    }

    /**
     * @return Animation
     */
    public function getAnimation()
    {
        if (is_null($this->animation)) {
            $this->animation = new Animation();
        }

        return $this->animation;
    }

    /**
     * @return Legend
     */
    public function getLegend()
    {
        if (is_null($this->legend)) {
            $this->legend = new Legend();
        }

        return $this->legend;
    }

    /**
     * @return Tooltips
     */
    public function getTooltips()
    {
        if (is_null($this->tooltips)) {
            $this->tooltips = new Tooltips();
        }

        return $this->tooltips;
    }

    /**
     * @return string
     * @throws \ReflectionException
     * @throws \ReflectionException
     */
    public function jsonSerialize()
    {
        return Json::encode($this->getArrayCopy(), false, [ 'enableJsonExprFinder' => true ]);
    }
}
