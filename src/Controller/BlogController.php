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

    #[Route('/blog/page1', name: 'app_blog_page1')]
    public function page1(): Response
    {
        return $this->render('blog/page1.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
}
