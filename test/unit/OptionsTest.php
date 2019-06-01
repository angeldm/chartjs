<?php

namespace Test;

use Angeldm\ChartJS\Options;
use Angeldm\ChartJS\Options\Layout;
use Angeldm\ChartJS\Options\Title;
use Angeldm\ChartJS\Options\Animation;
use Angeldm\ChartJS\Options\Hover;
use Angeldm\ChartJS\Options\Scales;
use Angeldm\ChartJS\Options\Tooltips;
use Angeldm\ChartJS\Options\Legend;

/**
 * Class OptionsTest
 * @package Test
 */
class OptionsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var Options $options
     */
    private $options;

    /**
     * @var array
     */
    private $empty_options = [];

    /**
     *
     */
    public function setUp() :void
    {
        $this->options = new Options();
    }

    /**
     *
     */
    public function testTitle()
    {
        $title = $this->options->getTitle();
        self::assertInstanceOf(Title::class, $title);
    }

    /**
     *
     */
    public function testLayout()
    {
        $layout = $this->options->getLayout();
        self::assertInstanceOf(Layout::class, $layout);
    }

    /**
     *
     */
    public function testAnimation()
    {
        $animation = $this->options->getAnimation();
        self::assertInstanceOf(Animation::class, $animation);
    }

    /**
     *
     */
    public function testHover()
    {
        $hover = $this->options->getHover();
        self::assertInstanceOf(Hover::class, $hover);
    }

    /**
     *
     */
    public function testScales()
    {
        $scales = $this->options->getScales();
        self::assertInstanceOf(Scales::class, $scales);
    }

    /**
     *
     */
    public function testLagend()
    {
        $legend = $this->options->getLegend();
        self::assertInstanceOf(Legend::class, $legend);
    }

    /**
     *
     */
    public function testTooltips()
    {
        $tooltips = $this->options->getTooltips();
        self::assertInstanceOf(Tooltips::class, $tooltips);
    }

    /**
     *
     */
    public function testJsonSerialize()
    {
        $expected = $this->empty_options;
        $result   = json_decode($this->options->jsonSerialize(), true);
        self::assertEquals($expected, $result);
    }
}
