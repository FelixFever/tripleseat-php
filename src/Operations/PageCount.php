<?php

declare(strict_types=1);

namespace FelixFever\Tripleseat\Operations;

use FelixFever\Tripleseat\Services\Service;

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
  public function pageCount(): int {
    return $this->client->pageCount($this->path());
  }
  
}