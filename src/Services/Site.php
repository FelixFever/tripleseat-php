<?php namespace FelixFever\Services;

use FelixFever\Operations;

/**
 * A site represents a group of venues. Sites can have multiple locations.
 * Currently we do not allow creating, updating, or deleting sites via our API.
 *
 * @url https://support.tripleseat.com/hc/en-us/articles/212912147-Sites-API
 */
class Site extends Service
{
    public const PATH = "sites";
    public const OBJECT_KEY = "site";

    use Operations\All;
}