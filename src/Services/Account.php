<?php namespace FelixFever\Tripleseat\Services;

use FelixFever\Tripleseat\Operations;

class Account extends Service
{
    public const PATH = "accounts";
    public const OBJECT_KEY = "account";

    use Operations\AllPaged;
    use Operations\PageCount;
    use Operations\SearchPaged;
    use Operations\Get;
    use Operations\Create;
    use Operations\Update;
    use Operations\Delete;
}