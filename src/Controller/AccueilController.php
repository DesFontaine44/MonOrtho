<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('accueil/index.html.twig', [
            'controller_name' => 'AccueilController',
        ]);
    }
    
    /**
     * @Route("/cabinet", name="cabinet")
     */
    public function cabinet()
    {
        return $this->render('cabinet/cabinet.html.twig');
    }

    /**
     * @Route("/monprofil", name="monprofil")
     */
    public function monprofil()
    {
        return $this->render('monprofil/monprofil.html.twig');
    }

    /**
     * @Route("/dossiermedical", name="dossiermedical")
     */
    public function dossiermedical()
    {
        return $this->render('dossiermedical/dossiermedical.html.twig');
    }

    /**
     * @Route("/parametres", name="parametres")
     */
    public function parametres()
    {
        return $this->render('parametres/parametres.html.twig');
    }
}
