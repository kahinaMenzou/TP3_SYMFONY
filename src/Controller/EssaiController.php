<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EssaiController extends AbstractController
{
    /**
     * @Route("/essai", name="essai")
     */
    public function index()
    {
        return $this->render('essai/index.html.twig', [
            'controller_name' => 'EssaiController',
        ]);
    }
}
