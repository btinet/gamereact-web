<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'app_')]
class AppController extends AbstractController
{

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('landing/index.html.twig', []);
    }

    #[Route('/referenzen', name: 'references')]
    public function references(): Response
    {
        return $this->render('legal/references.html.twig', []);
    }

    #[Route('/impressum', name: 'imprint')]
    public function imprint(): Response
    {
        return $this->render('legal/imprint.html.twig', []);
    }

    #[Route('/datenschutz', name: 'privacy')]
    public function privacy(): Response
    {
        return $this->render('legal/privacy.html.twig', []);
    }

    #[Route('/kontakt', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('legal/contact.html.twig', []);
    }

}
