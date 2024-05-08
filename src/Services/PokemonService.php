<?php

namespace App\Services;


use Symfony\Contracts\HttpClient\HttpClientInterface;

class PokemonService
{
    private $url = 'https://api.pokemontcg.io/v2/cards/';

    public function __construct(
        private HttpClientInterface $client,
    )
    {
    }

    public function getAll($page = null)
    {
        $response = $this->client->request('GET', ($page) ? $this->url.'?page='.$page : $this->url);

        $statusCode = $response->getStatusCode();
        if ($statusCode != 200) {
            return ['error' => 'Check the api url or the api may be offline'];
        }
        //$content = $response->getContent();
        return $response->toArray();

    }

    public function findOne(string $id)
    {

    }
}