<?php

// Etablir la connexion à la base de donnée
require_once('connexionBDD.php');
function CrudArticle()
{
    $response = getPDO()->prepare(
        'SELECT * FROM article a
            INNER JOIN marque m ON m.ID_MARQUE = a.ID_MARQUE
            INNER JOIN couleur c ON c.ID_COULEUR = a.ID_COULEUR
            INNER JOIN typebiere t ON t.ID_TYPE = a.ID_TYPE'
    );

    $response->execute();
    return $response->fetchAll(PDO::FETCH_ASSOC);
}
