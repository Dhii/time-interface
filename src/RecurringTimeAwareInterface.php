<?php

namespace RebelCode\Time;

/**
 * Something that is aware of, and can provide, a recurring time object.
 *
 * @since [*next-version*]
 */
interface RecurringTimeAwareInterface
{
    /**
     * Retrieves the recurring time object associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return RecurringTimeInterface The recurring time object.
     */
    public function getRecurringTime();
}
