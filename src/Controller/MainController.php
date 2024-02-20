<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('main/home.html.twig', [
            'titre' => 'Home',
        ]);
    }
    #[Route('/about-us', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('main/about.html.twig', [
            'titre' => 'About Us',
        ]);
    }
   
}
