<?php


// CALL PROJECTS
function get_projets()
{
    global $bdd;

    $req = $bdd->prepare('SELECT nom, date_chantier FROM chantier ORDER BY date_chantier');
    $req->execute();
    $projets = $req->fetchAll();


    return $projets;
}





 ?>
