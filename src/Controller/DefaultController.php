<?php
// src/Controller/WildController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

Class DefaultController extends AbstractController
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
}