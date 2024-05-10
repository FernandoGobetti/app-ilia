<?php

namespace App\Services;


use Symfony\Contracts\HttpClient\HttpClientInterface;
use function Webmozart\Assert\Tests\StaticAnalysis\null;

class PokemonService
{
    private $url = 'https://api.pokemontcg.io/v2/cards/';

    public function __construct(
        private HttpClientInterface $client,
    )
    {
    }

    public function make($page = null, string $id = null): array
    {
        if ($id) {
            $response = $this->client->request('GET', $this->url . $id);
        } else {
            $response = $this->client->request('GET', ($page) ? $this->url . '?page=' . $page : $this->url);
        }

        $statusCode = $response->getStatusCode();
        if ($statusCode != 200) {
            return ['error' => 'Check the api url or the api maybe offline.'];
        }
        return $response->toArray();
    }

    public function getAll($page = null): array
    {
        return $this->make($page);
    }

    public function findOne(string $id): array
    {
        return $this->make(null, $id);
    }
}
