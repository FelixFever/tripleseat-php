<?php namespace FelixFever\Tripleseat\Operations;

use Generator;
use FelixFever\Tripleseat\Services\Service;
use FelixFever\Tripleseat\Exceptions\HttpException;

/**
 * @mixin Service
 */
trait AllPaged
{

  /**
   * @throws HttpException
   */
  public function all(int $fromPage = 1, int $untilPage = PHP_INT_MAX): Generator
    {
        return $this->client->getPaged($this->path(), [], $fromPage, $untilPage);
    }

}