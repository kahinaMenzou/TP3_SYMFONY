<?php

namespace App\Controller;
use App\Entity\Theses;
use App\Entity\Doctorale;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ThesesController extends AbstractController
{
    /**
     * @Route("/theses", name="theses")
     */
    public function index()
    
        {
            $entityManager = $this->getDoctrine()->getManager();
            $DoctoraleRepository=$entityManager->getRepository(Doctorale::class);
            $doctorale =$DoctoraleRepository -> findAll();
            if (empty ($doctorale)){
            //ajout des ecoles
            $doctorale = new doctorale();
            $doctorale->setLien('lien');
            $doctorale1 = new doctorale();
            $doctorale1->setLien('lien');
            $doctorale2 = new doctorale();
            $doctorale2->setLien('lien');
            $theses = new theses();
            $theses->setTitre('Recherche développeur.');
            $theses->setPhrasedaccroche('Recherche développeur1.');
            $theses->setDescription('la description.');
            $theses->setEmail('kkkkkhhhhhhhhh');
            $theses->setDoctorale($doctorale);
            //on fait le lien entre doctrine et l'objet

            $entityManager->persist($theses);
            //pour remplir la base de données 

            $theses1 = new theses();
            $theses1->setTitre('gloglo.');
            $theses1->setPhrasedaccroche('Rhhhhhhhh.');
            $theses1->setDescription('la description.');
            $theses1->setEmail('kkkkkhhhhhhhhh');
            //on fait le lien entre doctrine et l'objet
            $entityManager->persist($theses1);
            //pour remplir la base de données 
            $entityManager->flush();
            }
            return $this->render('theses/index.html.twig', [
                'theses' =>$ThesesRepository ->findAll(),

            ]);
        }
        }