<?php

namespace App\Controller;

use App\Entity\Wish;
use App\Repository\WishRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WishController extends AbstractController
{
    #[Route('/liste', name: 'app_wish_liste')]
    public function liste(WishRepository $repo): Response
    {
        $wishes = $repo->findBy(["isPublished" => true], ["dateCreated" => "DESC"]);
        //$wishes = $repo->findAll();
        return $this->render('wish/liste.html.twig', [
            'titre'=> 'Liste des wishes',
            'wishes' => $wishes,
        ]);
    }

    #[Route('/detail/{id}', name: 'app_wish_detail')]
    public function detail(Wish $wish): Response
    {
        return $this->render('wish/detail.html.twig', [
            'titre' => $wish->getTitle(),
            'wish' => $wish
        ]);
    }
}
