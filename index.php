<?php

// Nécessaire pour le serveur web de PHP (qui est moins intelligent que Apache).
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"]))
    return false;

// Librairie de F3
$f3 = require('lib/base.php');

// Connexion à la base de données.
$f3->set('base_de_donnees', new DB\SQL('mysql:host=localhost;port=3306;dbname=exempleframework', 'root', ''));

// Routes
require 'controleur.php';
$f3->route('GET /index.php', 'Controleur->afficherPrincipale');
$f3->route('GET /', 'Controleur->afficherPrincipale' );
$f3->route('GET /carte/@numero', 'Controleur->afficherCarte');
$f3->route('POST /modifiercarte', 'Controleur->modifierCarte');

// Lancement de F3
$f3->run();

