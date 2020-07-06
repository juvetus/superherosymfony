<?php 

namespace App\Entity;

class Personnage {

    public $nom;
    public $age;
    public $sexe;
    public $caract = [];

    public static $personnages=[];

    public function __construct($nom, $age, $sexe, $caract)
    {
            $this->nom = $nom;
            $this->age = $age;
            $this->sexe = $sexe;
            $this->caract = $caract;
            self:: $personnages[] = $this;

        
    }

    public static function createPersonnage (){
        $p = new Personnage("Marc", 25, true, [
            "force" => 3,
             "agi" => 2,
            "intel" => 3

        ]);

        $p2 = new Personnage("Milo", 23, true, [
            "force" => 4,
             "agi" => 5,
            "intel" => 2

        ]);
        $p3 = new Personnage("Tya", 35, false, [
            "force" => 2,
             "agi" => 2,
            "intel" => 5

        ]);
    }

    public static function getPersonnagePrNom($nom){
        foreach(self ::$personnages as $perso){
           if (strtolower($perso->nom) === $nom){
               return $perso;
           }
        }

    }
   

}