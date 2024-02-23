<?php namespace FelixFever\Tripleseat\Operations;

use Generator;
use FelixFever\Tripleseat\Services\Service;
use FelixFever\Tripleseat\Exceptions\HttpException;

/**
 * @mixin Service
 */
trait All
{

  /**
   * @throws HttpException
   */
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