<?php

namespace RebelCode\Time;

/**
 * Something that is aware of, and can provide, a period.
 *
 * @since [*next-version*]
 */
interface PeriodAwareInterface
{
    /**
     * Retrieves the period associated with this instance.
     *
     * @since [*next-version*]
     *
     * @return PeriodInterface The period.
     */
    public function getPeriod();
}
