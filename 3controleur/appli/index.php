<?php

require '../../1modele/appli/req.php';
require "../../1modele/connexion_sql.php";


$projets = get_projets();


foreach($projets as $cle => $projet)
{

    $projets[$cle]['nom'] = htmlspecialchars($projet['nom']);
    $projets[$cle]['date_chantier'] = htmlspecialchars($projet['date_chantier']);

}



include_once('../../1vue/appli/index.php'); ?>
