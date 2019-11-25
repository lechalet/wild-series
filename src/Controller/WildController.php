<?php
// src/Controller/WildController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

Class WildController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
    */
public function index() :Response
    {
        return $this->render('wild/index.html.twig', [
            'welcome' => 'Bienvenue sur Wild Series',
    ]);
    }

  /**
    * @Route("/wild/show/{slug}", name="wild_show")
   */
  public function show(int $slug): Response
  {
       return $this->render('wild/show.html.twig', ['slug' => $slug]);
  } 
}