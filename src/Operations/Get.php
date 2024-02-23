<?php namespace FelixFever\Operations;

use FelixFever\Services\Service;

/**
 * @mixin Service
 */
trait Get
{

    public function get(int $id)
    {
        $response = $this->client->get(
            $this->path($id)
        );

        return $this->payloadToObject($response);
    }

}