<?php

namespace Test;

use Angeldm\ChartJS\Chart\Bar;
use Angeldm\ChartJS\Chart\Bubble;
use Angeldm\ChartJS\Chart\Doughnut;
use Angeldm\ChartJS\Chart\HorizontalBar;
use Angeldm\ChartJS\Chart\Line;
use Angeldm\ChartJS\Chart\Pie;
use Angeldm\ChartJS\Chart\PolarArea;
use Angeldm\ChartJS\Chart\Radar;
use Angeldm\ChartJS\ChartInterface;
use Angeldm\ChartJS\Factory;

/**
 * Class FactoryTest
 * @package Test
 */
class FactoryTest extends \PHPUnit\Framework\TestCase
{
    /**
     *
     */
    public function testFactory()
    {
        $factory = new Factory();

        $this->assertInstanceOf(Factory::class, $factory, 'Factory is correct class');
    }

    /**
     *
     */
    public function testBar()
    {
        $factory = new Factory();
        $chart   = $factory->create($factory::BAR);

        $this->assertInstanceOf(ChartInterface::class, $chart, 'The correct interface has been implemented');
        $this->assertInstanceOf(Bar::class, $chart, 'The correct class has been created');
    }

    /**
     *
     */
    public function testBubble()
    {
        $factory = new Factory();
        $chart   = $factory->create($factory::BUBBLE);

        $this->assertInstanceOf(ChartInterface::class, $chart, 'The correct interface has been implemented');
        $this->assertInstanceOf(Bubble::class, $chart, 'The correct class has been created');
    }

    /**
     *
     */
    public function testDoughnut()
    {
        $factory = new Factory();
        $chart   = $factory->create($factory::DOUGHNUT);

        $this->assertInstanceOf(ChartInterface::class, $chart, 'The correct interface has been implemented');
        $this->assertInstanceOf(Pie::class, $chart, 'The correct class has been extended');
        $this->assertInstanceOf(Doughnut::class, $chart, 'The correct class has been created');
    }

    /**
     *
     */
    public function testHorizontalBar()
    {
        $factory = new Factory();
        $chart   = $factory->create($factory::HORIZONTAL_BAR);

        $this->assertInstanceOf(ChartInterface::class, $chart, 'The correct interface has been implemented');
        $this->assertInstanceOf(Bar::class, $chart, 'The correct class has been extended');
        $this->assertInstanceOf(HorizontalBar::class, $chart, 'The correct class has been created');
    }

    /**
     *
     */
    public function testLine()
    {
        $factory = new Factory();
        $chart   = $factory->create($factory::LINE);

        $this->assertInstanceOf(ChartInterface::class, $chart, 'The correct interface has been implemented');
        $this->assertInstanceOf(Line::class, $chart, 'The correct class has been created');
    }

    /**
     *
     */
    public function testPie()
    {
        $factory = new Factory();
        $chart   = $factory->create($factory::PIE);

        $this->assertInstanceOf(ChartInterface::class, $chart, 'The correct interface has been implemented');
        $this->assertInstanceOf(Pie::class, $chart, 'The correct class has been created');
    }

    /**
     *
     */
    public function testPolarArea()
    {
        $factory = new Factory();
        $chart   = $factory->create($factory::POLAR_AREA);

        $this->assertInstanceOf(ChartInterface::class, $chart, 'The correct interface has been implemented');
        $this->assertInstanceOf(PolarArea::class, $chart, 'The correct class has been created');
    }

    /**
     *
     */
    public function testRadar()
    {
        $factory = new Factory();
        $chart   = $factory->create($factory::RADAR);

        $this->assertInstanceOf(ChartInterface::class, $chart, 'The correct interface has been implemented');
        $this->assertInstanceOf(Radar::class, $chart, 'The correct class has been created');
    }

    /**
     *
     */
    public function testNonExisting()
    {
        $factory = new Factory();
        $this->expectException(\InvalidArgumentException::class);

        $factory->create('foo');
    }
}
