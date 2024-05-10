<?php

namespace App\Tests;

use App\Controller\PokemonController;
use App\Services\PokemonService;
use PHPUnit\Framework\TestCase;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PokemonTest extends WebTestCase
{
    public function testListAll(): void
    {
        $client = static::createClient();

        // Request a specific page
        $crawler = $client->request('GET', '/pokemon');

        // Validate a successful response and some content
        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(200);
        $this->assertAnySelectorTextContains('td', 'hgss4-1');
        $this->assertPageTitleSame('Pokemon list!');
    }

    public function testShowPokemon(): void
    {
        $client = static::createClient();

        // Request a specific page
        $crawler = $client->request('GET', '/pokemon/show/hgss4-1');

       // Validate a successful response and some content
        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(200);
        $this->assertAnySelectorTextContains('td', 'hgss4-1');
        $this->assertPageTitleSame('Pokemon Aggron');
    }
}
