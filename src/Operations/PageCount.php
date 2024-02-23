<?php

declare(strict_types=1);

namespace Tripleseat\Operations;

use Tripleseat\Services\Service;

/**
 * @mixin Service
 */
trait PageCount {

  /**
   * Get page count.
   *
   * @return int
   *   The page count.
   *
   * @throws \Tripleseat\Exceptions\HttpException
   */
  public function count(): int {
    return $this->client->pageCount($this->path());
  }
  
}