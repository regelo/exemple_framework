<?php

class Controleur {
    static public function afficherPrincipale($f3) {
        // Va chercher les données du Modèle.
        require 'modele.php';
        $table_cartegraphique = Modele::getCartes($f3);
        $cartes = $table_cartegraphique->find();

        // Prépare les données du Modèle et les transmets à la Vue.
        $f3->set('cartes', $cartes);
        echo Template::instance()->render('vueprincipale.html');
    }

    static public function afficherCarte($f3) {
        // Optient le numéro de la carte l'URL
        $numero_de_carte = $f3->get('PARAMS.numero');

        // Va chercher les données du Modèle.
        require 'modele.php';
        $table_cartegraphique = Modele::getCartes($f3);
        $table_cartegraphique->load(array('Id=?', $numero_de_carte));

        if ($table_cartegraphique->dry()) {
            // Le ID fourni n'est pas bon.
            // On redirige vers une erreur 404.
            $f3->error(404);
        }
        else {
            // Le ID fourni est bon.
            // Envoie les données du Modèle à la Vue.
            $f3->set('la_carte', $table_cartegraphique);
            echo Template::instance()->render('vuecarte.html');
        }
    }

    static public function modifierCarte($f3) {
        // Optient les informations du formulaire.
        $numero_de_carte = $f3->get('POST.carteid');
        $nouvelle_description = $f3->get('POST.description');

        // Obtient l'objet permettant de manipuler la base de données.
        require 'modele.php';
        $table_cartegraphique = Modele::getCartes($f3);
        $table_cartegraphique->load(array('Id=?', $numero_de_carte));

        if ($table_cartegraphique->dry()) {
            echo 'ID du formulaire incorrect';
        }
        else {
            // On modifie la description
            $table_cartegraphique->Description = $nouvelle_description;
            $table_cartegraphique->save();

            // On recharge la table où on se trouve en ce moment.
            $f3->set('la_carte', $table_cartegraphique);
            echo Template::instance()->render('vuecarte.html');
        }
    }
}


