<?php

namespace App\Controller;

use App\Services\PokemonService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PokemonController extends AbstractController
{
    public function __construct(private PokemonService $service)
    {
    }

    #[Route('/pokemon', name: 'app_pokemon', methods: ['GET'])]
    public function index(Request $request): Response
    {
        $allPokemon = $this->service->getAll($request->query->get('page'));

        return $this->render('pokemon/index.html.twig', [
            'pokemons' => $allPokemon["data"],
            'page' => $allPokemon['page'],
        ]);
    }

    #[Route('/pokemon/show/{id}', name: 'app_pokemon_show', methods: ['GET'])]
    public function show(Request $request, $id): Response
    {
        $onePokemon = $this->service->findOne($id);

        return $this->render('pokemon/show.html.twig', [
            'pokemon' => $onePokemon["data"],
        ]);
    }
}
