<?php

class Modele {
    static public function getCartes($f3) {
        $base_de_donnees = $f3->get('base_de_donnees');
        $cartes = new DB\SQL\Mapper($base_de_donnees,'CarteGraphique');
        return $cartes;
    }
}