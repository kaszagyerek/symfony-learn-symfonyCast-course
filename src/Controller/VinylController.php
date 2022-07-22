<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController
{
    #[Route('/')]
    public function homepage() :Response
    {
        return new Response('Title: Ks and Esz');
    }

    #[Route('/browse/{slug}')]
    public function browse($slug = null) :Response
    {
        return new Response('Beaks   ' . $slug);
    }
}