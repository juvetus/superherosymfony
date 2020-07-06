<?php
namespace App\Entity;


class Arme {
    public $nom;
    public $caract;
    public $degat;

    public static $armes= [];

    public function __construct($nom, $caract, $degat)
    {
        $this->nom = $nom;
        $this->caract = $caract;
        $this->degat = $degat;

        self ::$armes [] = $this;
    }

    public static function createArme(){
        $a1 = new Arme('epee', "Une superbe épée tranchante", 10);
        $a2 = new Arme('hache', "Une arme ou un outil", 15);
        $a3 = new Arme('arc', "Une arme à distance", 7);
    }

    public static function getArmePrNom($nom){
        foreach(self ::$armes as $arme){
           if (strtolower($arme->nom) === $nom){
               return $arme;
           }
        }

    }
}

