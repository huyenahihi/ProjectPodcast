<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebController extends AbstractController
{
     
    #[Route('/signin', name: 'signin')]
    public function signin(): Response
    {
        return $this->render('WebUser/signin.html.twig');
    }

    #[Route('/signup', name: 'signup')]
    public function signup(): Response
    {
        return $this->render('WebUser/signup.html.twig');
    }
     
    #[Route('/homepage', name: 'homepage')]
    public function homepage(): Response
    {
        return $this->render('WebUser/homepage.html.twig');
    }
    #[Route('/blog', name: 'blog')]
    public function blog(): Response
    {
        return $this->render('WebUser/blog.html.twig');
    }
    #[Route('/podcast', name: 'podcast')]
    public function podcast(): Response
    {
        return $this->render('WebUser/podcast.html.twig');
    }
    #[Route('/courses', name: 'courses')]
    public function courses(): Response
    {
        return $this->render('WebUser/courses.html.twig');
    }
    #[Route('/blog_detail', name: 'blog_detail')]
    public function blog_detail(): Response
    {
        return $this->render('WebUser/blog_detail.html.twig');
    }
    #[Route('/blog_title', name: 'blog_title')]
    public function blog_title(): Response
    {
        return $this->render('WebUser/blog_title.html.twig');
    }
}
