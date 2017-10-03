<?php

namespace RebelCode\Time;

use Traversable;

/**
 * Represents a set of times, recurring at regular intervals, over a specific time period.
 *
 * @since [*next-version*]
 */
interface RecurringTimeInterface extends
    PeriodAwareInterface,
    IntervalAwareInterface,
    Traversable
{
}
