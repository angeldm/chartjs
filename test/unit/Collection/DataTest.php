<?php

namespace Collection;

use Angeldm\ChartJS\Collection\Data;

/**
 * Class DataTest
 * @package Collection
 */
class DataTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var  Data
     */
    private $data;

    /**
     *
     */
    public function setUp() :void
    {
        $this->data = new Data();
    }

    /**
     *
     */
    public function testJsonSerializeEmpty()
    {
        $expected = "[]";
        $result   = $this->data->jsonSerialize();
        self::assertSame($expected, $result);
    }
}
