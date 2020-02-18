<?php

namespace App\Controller;

use App\Repository\BoekRepository;
use App\Repository\ReviewRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(BoekRepository $boeksrepository, ReviewRepository $reviewRepository)
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'boeks' => $boeksrepository->findAll(),
            'reviews' => $reviewRepository->findAll()
        ]);
    }
}
