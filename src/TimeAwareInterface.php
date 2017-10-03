<?php

namespace RebelCode\Time;

/**
 * Something that is aware of, and can provide, a time object.
 *
 * @since [*next-version*]
 */
interface TimeAwareInterface
{
    /**
     * Retrieves the time object associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return TimeInterface The time object.
     */
    public function getTime();
}
