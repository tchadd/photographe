<?php

namespace App\Controller;

use App\Repository\PrestationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PrestationsController extends AbstractController
{
    #[Route('/prestations', name: 'app_prestations')]
    public function index(PrestationsRepository $manager): Response
    {
        $prestations = $manager->findAll();
        return $this->render('prestations/index.html.twig', [
            'prestations' => $prestations
        ]);
    }
}
