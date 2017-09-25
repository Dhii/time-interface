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
     * @return int The duration of the interval, as an integer number of seconds.
     */
    public function getDuration();
}
