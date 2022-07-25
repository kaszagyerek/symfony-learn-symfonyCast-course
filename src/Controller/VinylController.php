<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;


class VinylController extends  AbstractController
{
    #[Route('/' , name: 'app_homepage')]
    public function homepage() :Response
    {

        $alma = [
          ['type' => 'nagy' , 'size' => 10 , 'owner' => 'KS'  ] ,
          ['type' => 'kis' , 'size' => 20 , 'owner' => 'KSd'  ] ,
          ['type' => 'orias' , 'size' => 30 , 'owner' => 'KSa'  ] ,
          ['type' => 'pici' , 'size' => 40 , 'owner' => 'KdS'  ] ,
          ['type' => 'kozpes' , 'size' => 50 , 'owner' => 'KaS'  ] ,
          ['type' => 'elmegy' , 'size' => 60 , 'owner' => 'aKS'  ]
        ];

        return $this->render('vinyl/homepage.html.twig',[
            'title' => 'KS ESZ L',
            'szamok' => $alma
        ]);

    }

    #[Route('/browse/{slug}', name:'app_browse')]
    public function browse($slug = null) :Response
    {
        $genre = $slug ? u(str_replace('-',' ', $slug))->title(true) : null;
        return $this->render('vinyl/browse.html.twig',[
            'genre' => $genre,
        ]);
    }
}