<?php namespace FelixFever\Tripleseat\Operations;

use FelixFever\Tripleseat\Exceptions\HttpException;
use FelixFever\Tripleseat\Services\Service;

/**
 * @mixin Service
 */
trait Update
{

    /**
     * @throws HttpException
     */
    public function update(int $id, array $data)
    {
        $data = $this->objectToPayload($data);

        $response = $this->client->put(
            $this->path($id),
            $data
        );

        return $this->payloadToObject($response);
    }

}