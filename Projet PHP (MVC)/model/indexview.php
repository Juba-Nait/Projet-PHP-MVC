<?php
require_once "connexionBDD.php";
function ColorAmbree()
{
    $response = getPDO()->prepare(
        "SELECT * FROM article a
            INNER JOIN marque m ON m.ID_MARQUE = a.ID_MARQUE
            INNER JOIN couleur c ON c.ID_COULEUR = a.ID_COULEUR
            INNER JOIN typebiere t ON t.ID_TYPE = a.ID_TYPE
            WHERE c.NOM_COULEUR = 'Ambree'"
    );

    $response->execute();
    return $response->fetchAll(PDO::FETCH_ASSOC);
}
