<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Doctorale;
class DoctoraleController extends AbstractController
{
    /**
     * @Route("/doctorale", name="doctorale")
     */
    public function index()
    {
        return $this->render('doctorale/index.html.twig', [
            'controller_name' => 'DoctoraleController',
        ]);
    }
}
