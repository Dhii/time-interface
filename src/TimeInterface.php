<?php

namespace RebelCode\Time;

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
     * @return int An integer timestamp - the number of seconds since unix epoch.
     */
    public function getTimestamp();
}
