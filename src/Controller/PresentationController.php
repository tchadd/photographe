<?php

namespace App\Controller;

use App\Repository\PresentationRepository; // Import the PresentationRepository class
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PresentationController extends AbstractController
{
    #[Route('/presentation', name: 'app_presentation')]
    public function index(PresentationRepository $manage): Response
    {
        $Presentation = $manage->findAll(); // Call the findAll() method from the PresentationRepository class
        return $this->render('presentation/index.html.twig', [
            'presentation' => $Presentation
        ]);
    }
}
  

  

