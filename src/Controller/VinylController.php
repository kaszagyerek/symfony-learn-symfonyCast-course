<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class VinylController extends  AbstractController
{
    #[Route('/')]
    public function homepage() :Response
    {

        $alma = [
          ['type' => 'nagy' , 'size' => 10 , 'owner' => 'KS'  ] ,
          ['type' => 'nagy' , 'size' => 20 , 'owner' => 'KS'  ] ,
          ['type' => 'nagy' , 'size' => 30 , 'owner' => 'KS'  ] ,
          ['type' => 'nagy' , 'size' => 40 , 'owner' => 'KS'  ] ,
          ['type' => 'nagy' , 'size' => 50 , 'owner' => 'KS'  ] ,
          ['type' => 'nagy' , 'size' => 60 , 'owner' => 'KS'  ]
        ];
        return $this->render('vinyl/homepage.html.twig',[
            'title' => 'KS ESZ L',
            'szamok' => $alma
        ]);

    }

    #[Route('/browse/{slug}')]
    public function browse($slug = null) :Response
    {
        return new Response('Beaks   ' . $slug);
    }
}