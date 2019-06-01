<?php

namespace Angeldm\ChartJS\Options;

use Angeldm\ChartJS\ArraySerializableInterface;
use Angeldm\ChartJS\Delegate\ArraySerializable;
use Zend\Json\Expr;
use Zend\Json\Json;

/**
 * Class Hover
 * @package Angeldm\ChartJS\Options
 */
class Hover implements ArraySerializableInterface, \JsonSerializable
{
    use ArraySerializable;

    /**
     * @var string
     */
    private $mode;

    /**
     * @var bool
     */
    private $intersect;

    /**
     * @var int
     */
    private $animationDuration;

    /**
     * @var Expr
     */
    private $onHover;

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = strval($mode);

        return $this;
    }

    /**
     * @return bool
     */
    public function isIntersect()
    {
        return $this->intersect;
    }

    /**
     * @param bool $intersect
     *
     * @return $this
     */
    public function setIntersect($intersect)
    {
        $this->intersect = ! ! $intersect;

        return $this;
    }

    /**
     * @return int
     */
    public function getAnimationDuration()
    {
        return $this->animationDuration;
    }

    /**
     * @param int $animationDuration
     *
     * @return $this
     */
    public function setAnimationDuration($animationDuration)
    {
        $this->animationDuration = intval($animationDuration);

        return $this;
    }

    /**
     * @return \Zend\Json\Expr
     */
    public function getOnHover()
    {
        return $this->onHover;
    }

    /**
     * @param Expr $onHover
     *
     * @return $this
     */
    public function setOnHover($onHover)
    {
        $this->onHover = new Expr(strval($onHover));

        return $this;
    }

    /**
     * @return string
     * @throws \ReflectionException
     * @throws \ReflectionException
     */
    public function jsonSerialize()
    {
        return Json::encode($this->getArrayCopy());
    }
}
