<?php namespace FelixFever\Tripleseat\Operations;

use FelixFever\Tripleseat\Exceptions\HttpException;
use FelixFever\Tripleseat\Services\Service;

/**
 * @mixin Service
 */
trait Create
{

    /**
     * @throws HttpException
     */
    public function create(array $data)
    {
        $data = $this->objectToPayload($data);

        $response = $this->client->post(
            $this->path(),
            $data
        );

        return $this->payloadToObject($response);
    }

}