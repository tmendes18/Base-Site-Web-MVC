<?php
function getPage($db){

 $lesPages['accueil'] = "actionAccueil";

if ($db!=null){
 if(isset($_GET['page'])){
 // Nous mettons dans la variable $page, la valeur qui a été passée dans le lien
 $page = $_GET['page']; }
 else{
 // S'il n'y a rien en mémoire, nous lui donnons la valeur « accueil » afin de lui afficher une page
 //par défaut
 $page = 'accueil';
 }
 if (!isset($lesPages[$page])){
 // Nous rentrons ici si cela n'existe pas, ainsi nous redirigeons l'utilisateur sur la page d'accueil
 $page = 'accueil';
 }
}
else{
 // Si $db est null (vous pouver crée une page de mintenance)
 $contenu = 'actionAccueil';
}
// La fonction envoie le contenu
return $contenu;
}

?>
