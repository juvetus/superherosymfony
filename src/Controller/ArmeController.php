<?php

namespace App\Controller;

use App\Entity\Arme;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArmeController extends AbstractController
{
    /**
     * @Route("/arme", name="armes")
     */
    public function index()
    {
        return $this->render('arme/index.html.twig', [
            
        ]);
    }

    /**
     * @Route("/armes", name="armes")
     */
    public function armes()
    {
        Arme ::createArme();
        
        return $this->render('arme/armes.html.twig', [
            'games' => Arme::$armes,
        ]);
    }

    /**
     * @Route("/armes{nom}", name="afficher_arme")
     */
    public function afficherArme($nom)

    {
        Arme ::createArme();
        $arme = Arme::getArmePrNom($nom);
        return $this->render('arme/arme.html.twig', [
            'arme' => $arme,
        ]);
    }

   
}
