<?php

namespace Angeldm\ChartJS;

/**
 * Interface CollectionInterface
 */
interface CollectionInterface
{
    /**
     * @param mixed $value
     *
     * @return $this
     */
    public function append($value);

    /**
     * @param mixed $value
     *
     * @return $this
     */
    public function prepend($value);
}
