<?php namespace FelixFever\Operations;

use Generator;
use FelixFever\Services\Service;

/**
 * @mixin Service
 */
trait All
{

    public function all(): Generator
    {
        $data = $this->client->get($this->path());

        if (!is_iterable($data)) {
            yield $data;
        }

        foreach ($data as $result) {
            yield $this->payloadToObject($result);
        }
    }

}