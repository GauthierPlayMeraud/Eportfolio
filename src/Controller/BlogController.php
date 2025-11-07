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
    Public function home() : response
    {
       return $this->render('blog/home.html.twig',[
                'title' => "Bienvenue a L'IUT",
                'age' => 31
    ]);
    }

    #[Route('/blog/page1.html.twig', name: 'app_blog')]
    public function page1(): Response
    {
        return $this->render('blog/page1.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
