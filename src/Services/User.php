<?php namespace FelixFever\Services;

use FelixFever\Operations;

/**
 * A user is a person who can log into your Tripleseat account.
 *
 * @url https://support.tripleseat.com/hc/en-us/articles/212567567-Users-API
 */
class User extends Service
{
    public const PATH = "users";
    public const OBJECT_KEY = "user";

    use Operations\AllPaged;
    use Operations\PageCount;
    use Operations\SearchPaged;
    use Operations\Get;
}