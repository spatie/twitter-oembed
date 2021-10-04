<?php

namespace Spatie\TwitterOEmbed;

use GuzzleHttp\Client;

class TwitterOEmbed
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
        $this->parser = new Parser();
    }

    public function embed(string $url): Tweet
    {
        $response = $this->client->get(
            'https://publish.twitter.com/oembed',
            ['query' => ['url' => $url]],
        );

        return $this->parser->parse(
            json_decode($response->getBody(), true)
        );
    }
}
