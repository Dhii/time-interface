<?php

namespace RebelCode\Time;

/**
 * Something that represents a fixed amount of time.
 *
 * @since [*next-version*]
 */
interface IntervalInterface
{
    /**
     * Retrieves the duration of the interval.
     *
     * @since [*next-version*]
     *
     * @return int The number of seconds in the interval.
     */
    public function getDuration();
}
