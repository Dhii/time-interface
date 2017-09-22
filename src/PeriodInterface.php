<?php

namespace RebelCode\Time;

/**
 * Something that represents a period of time.
 *
 * @since [*next-version*]
 */
interface PeriodInterface
{
    /**
     * Retrieves the start time for this period.
     *
     * @since [*next-version*]
     *
     * @return TimeInterface The start time.
     */
    public function getStart();

    /**
     * Retrieves the end time for this period.
     *
     * @since [*next-version*]
     *
     * @return TimeInterface The end time.
     */
    public function getEnd();

    /**
     * Retrieves the duration of this period.
     *
     * @since [*next-version*]
     *
     * @return int The duration of the period as an integer number of seconds.
     */
    public function getDuration();
}
