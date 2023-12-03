<?php

// Fonction pour renvoyer une instance d'objet PDO connecté à votre base de données
function getPDO()
{
    $host = 'localhost';
    $dbname = 'sdbm_v2';
    $username = 'root';
    $password = '';

    $dsn = "mysql:host=$host;dbname=$dbname";

    try {
        $bdd = new PDO($dsn, $username, $password);
    } catch (Exception $error) {
        die('Une erreur s\'est produite lors de la connexion à votre base de données : ' . $error->getMessage());
    }

    return $bdd;
}
