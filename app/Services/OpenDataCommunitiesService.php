<?php

namespace App\Services;

use GuzzleHttp\Client;

class OpenDataCommunitiesService
{
    public function go(array $data)
    {
        $response = (new Client([
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Basic '.base64_encode(env('OPEN_DATA_COMMUNITIES_EMAIL') . ':' . env('OPEN_DATA_COMMUNITIES_KEY')),
                ]
        ]))->get('https://epc.opendatacommunities.org/api/v1/domestic/search?' . http_build_query(array_filter($data)));

        return json_decode($response->getBody()->getContents(), true) ?? [];
    }

}
