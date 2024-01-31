<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;     

class DiopController extends AbstractController
{
    #[Route('/diop', name: 'app_diop')]
    public function Diop(): Response
    {
        return $this->render('diop/accueil.html.twig', [
            'controller_name' => 'DiopController',
        ]);
    }
    #[Route('/accueil', name: 'accueil')]
    public function accueil(): Response
    {
        return $this->render('diop/accueil.html.twig', [
            'controller_name' => 'DiopController',
        ]);
    }
    #[Route('/A propos de moi', name: 'A propos de moi')]
    public function A_propos_de_moi(): Response
    {
        return $this->render('diop/A propos de moi.html.twig', [
            'controller_name' => 'DiopController',
        ]);
    }
    #[Route('/cv', name: 'cv')]
    public function cv(): Response
    {
        return $this->render('diop/cv.html.twig', [
            'controller_name' => 'DiopController',
        ]);
    }
    #[Route('/portfolio', name: 'portfolio')]
    public function porfolio(): Response
    {
        return $this->render('diop/portfolio.html.twig', [
            'controller_name' => 'DiopController',
        ]);
    }
   
}