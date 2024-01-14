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
        return $this->render('diop/index.html.twig', [
            'controller_name' => 'DiopController',
        ]);
    }
}
