<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    #[Route('/blog/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('blog/home.html.twig', [
        ]);
    }

    #[Route('/blog/sae1-01', name: 'app_sae101')]
    public function sae101(): Response
    {
        return $this->render('blog/sae1.01.html.twig', [
        ]);
    }

    #[Route('/blog/sae1-02', name: 'app_sae102')]
    public function sae102(): Response
    {
        return $this->render('blog/sae1.02.html.twig', [
        ]);
    }

    #[Route('/blog/sae1-03', name: 'app_sae103')]
    public function sae103(): Response
    {
        return $this->render('blog/sae1.03.html.twig', [
        ]);
    }

    #[Route('/blog/sae1-04', name: 'app_sae104')]
    public function sae104(): Response
    {
        return $this->render('blog/sae1.04.html.twig', [
        ]);
    }

    #[Route('/blog/sae1-05', name: 'app_sae105')]
    public function sae105(): Response
    {
        return $this->render('blog/sae1.05.html.twig', [
        ]);
    }


}
