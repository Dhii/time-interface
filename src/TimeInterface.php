<?php

namespace Dhii\Time;

/**
 * Something that represents a point in time.
 *
 * @since [*next-version*]
 */
interface TimeInterface
{
    /**
     * Retrieves the timestamp.
     *
     * @since [*next-version*]
     *
     * @return int The number of seconds since Unix epoch.
     */
    public function getTimestamp();
}
