<?php namespace FelixFever\Tripleseat\Services;

use Generator;
use FelixFever\Tripleseat\Exceptions\HttpException;
use FelixFever\Tripleseat\Operations;

/**
 * A lead represents a prospective person or interested party. Leads can be
 * converted into Accounts/Contacts and Events.
 *
 * @url https://support.tripleseat.com/hc/en-us/articles/212528787-Leads-API
 * @url https://support.tripleseat.com/hc/en-us/articles/205161948-Lead-Form-API-endpoint
 */
class Lead extends Service
{
    public const PATH = "leads";
    public const OBJECT_KEY = "lead";

    use Operations\AllPaged;
    use Operations\PageCount;
    use Operations\SearchPaged;
    use Operations\Get;
    use Operations\Delete;

   /**
    * @throws HttpException
    */
    public function create(array $payload)
    {
        $payload = $this->objectToPayload($payload);

        $response = $this->client->post(
            'leads/create.js',
            $payload,
            ['public_key' => $this->client->getAuth('public_key')]
        );

        if (isset($response['errors'])) {
            throw new HttpException(422, $response['errors']);
        }

        return $response;
    }

    /**
     * @throws HttpException
     */
    public function forms(): Generator
    {
        $data = $this->client->get(
            'lead_forms.json',
            ['public_key' => $this->client->getAuth('public_key')]
        );

        if (!is_iterable($data)) {
            yield $data;
        }

        foreach ($data as $result) {
            yield $result['lead_form'];
        }
    }
}