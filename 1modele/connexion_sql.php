<?php

function connect(){

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=chantier;charset=utf8', 'root', 'Paperback1966');
}
        catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
        return $bdd;
}

 ?>
