<?php

namespace Dhii\Time;

/**
 * Something that is aware of, and can provide, an interval.
 *
 * @since [*next-version*]
 */
interface IntervalAwareInterface
{
    /**
     * Retrieves the interval associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return IntervalInterface The interval.
     */
    public function getInterval();
}
