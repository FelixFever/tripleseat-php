<?php namespace FelixFever\Tripleseat\Services;

use FelixFever\Tripleseat\Operations;

/**
 * A booking represents block of time for an event or multiple events. Bookings
 * can have multiple events.
 *
 * @url https://support.tripleseat.com/hc/en-us/articles/212528827-Bookings-API
 */
class Booking extends Service
{
    public const PATH = "bookings";
    public const OBJECT_KEY = "booking";

    use Operations\AllPaged;
    use Operations\PageCount;
    use Operations\SearchPaged;
    use Operations\Get;
    use Operations\Create;
    use Operations\Update;
    use Operations\Delete;
}