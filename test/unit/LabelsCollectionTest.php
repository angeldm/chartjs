<?php

namespace Test;

use Angeldm\ChartJS\LabelsCollection;

/**
 * Class LabelsCollectionTest
 * @package Test
 */
class LabelsCollectionTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var  LabelsCollection
     */
    private $labelsCollectionEmpty;

    /**
     * @var  LabelsCollection
     */
    private $labelsCollection;

    /**
     * @var array
     */
    private $labelsArray = [ 'startingLabel', 'label1', 'label2', 'endLabel' ];

    /**
     *
     */
    public function setUp() :void
    {
        $this->labelsCollectionEmpty = new LabelsCollection();
        $this->labelsCollection      = new LabelsCollection($this->labelsArray);
    }

    /**
     *
     */
    public function testJsonSerializeEmpty()
    {
        $expected = '[]';
        $result   = $this->labelsCollectionEmpty->jsonSerialize();
        self::assertSame($expected, $result);
    }

    /**
     *
     */
    public function testJsonSerialize()
    {
        $expected = "[\"" . implode("\",\"", $this->labelsArray) . "\"]";
        $result   = $this->labelsCollection->jsonSerialize();
        self::assertSame($expected, $result);
    }
}
