<?php
/* initialisation des fichiers TWIG */
require_once '../src/lib/vendor/autoload.php';
require_once '../src/config/parametres.php';
require_once '../src/app/connexion.php';
require_once '../src/config/routing.php';
require_once '../src/modele/_classes.php';
require_once '../src/controleur/_controleurs.php';
$loader = new Twig_Loader_Filesystem('../src/vue/');
$twig = new Twig_Environment($loader, array());
$twig->addExtension(new Twig_Extensions_Extension_Text());
$db = connect($config);
$contenu = getPage($db);
// Exécution de la fonction souhaitée
$contenu($twig,$db);

?>
