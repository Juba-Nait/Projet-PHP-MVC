<?php
ini_set('display_errors', '0');  // afin d'eviter les warning
// Etablir la connexion avec la BDD
require_once('connexionBDD.php');
function ReadArticle()  //Lecture des données
{
    $ID_ARTICLE = $_POST['ID_ARTICLE'];



    $response = getPDO()->prepare(
        'SELECT * FROM article a
            INNER JOIN marque m ON m.ID_MARQUE = a.ID_MARQUE
            INNER JOIN couleur c ON c.ID_COULEUR = a.ID_COULEUR
            INNER JOIN typebiere t ON t.ID_TYPE = a.ID_TYPE
            WHERE a.ID_ARTICLE= :idArticle'
    );
    $response->execute([':idArticle' => $ID_ARTICLE]);
    //([':idArticle' => $ID_ARTICLE]);


    $response->execute();
    return $response->fetchAll(PDO::FETCH_ASSOC);
}

//fonctions modifier/ajouter et supprimer

function CrudAddArticle()
{

    // j'ajoute le post du formulaire à chaque colonne 
    $response = getPDO()->prepare("INSERT INTO article (ID_ARTICLE, NOM_ARTICLE, VOLUME, PRIX_ACHAT, TITRAGE,ID_MARQUE, ID_TYPE, ID_COULEUR)
     VALUES (:ID_ARTICLE, :NOM_ARTICLE, :VOLUME, :PRIX_ACHAT, :TITRAGE, :ID_MARQUE, :ID_TYPE, :ID_COULEUR)");
    $response->bindParam(':ID_ARTICLE', $ID_ARTICLE);
    $response->bindParam(':ID_COULEUR', $ID_COULEUR);
    $response->bindParam(':NOM_ARTICLE', $NOM_ARTICLE);
    $response->bindParam(':VOLUME', $VOLUME);
    $response->bindParam(':PRIX_ACHAT', $PRIX_ACHAT);
    $response->bindParam(':TITRAGE', $TITRAGE);
    $response->bindParam(':ID_MARQUE', $ID_MARQUE);
    $response->bindParam(':ID_TYPE', $ID_TYPE);

    $ID_ARTICLE = $_POST['ID_ARTICLE'];
    $ID_COULEUR = $_POST['ID_COULEUR'];
    $NOM_ARTICLE = $_POST['NOM_ARTICLE'];
    $VOLUME = $_POST['VOLUME'];
    $PRIX_ACHAT = $_POST['PRIX_ACHAT'];
    $TITRAGE = $_POST['TITRAGE'];
    $ID_MARQUE = $_POST['ID_MARQUE'];
    $ID_TYPE = $_POST['ID_TYPE'];





    $response->execute();
}

function Crud_modifier_Article()
{

    $ID_ARTICLE = $_POST['ID_ARTICLE'];
    $ID_COULEUR = $_POST['ID_COULEUR'];
    $NOM_ARTICLE = $_POST['NOM_ARTICLE'];
    $VOLUME = $_POST['VOLUME'];
    $PRIX_ACHAT = $_POST['PRIX_ACHAT'];
    $TITRAGE = $_POST['TITRAGE'];
    $ID_MARQUE = $_POST['ID_MARQUE'];
    $ID_TYPE = $_POST['ID_TYPE'];

    $stmt = getPDO()->prepare(
        "UPDATE article SET NOM_ARTICLE = :NOM_ARTICLE, PRIX_ACHAT = :PRIX_ACHAT, VOLUME = :VOLUME, TITRAGE = :TITRAGE, ID_MARQUE = :ID_MARQUE, ID_COULEUR = :ID_COULEUR, ID_TYPE = :ID_TYPE
            WHERE ID_ARTICLE = :ID_ARTICLE"
    );

    $stmt->bindParam(':ID_ARTICLE', $ID_ARTICLE);
    $stmt->bindParam(':NOM_ARTICLE', $NOM_ARTICLE);
    $stmt->bindParam(':PRIX_ACHAT', $PRIX_ACHAT);
    $stmt->bindParam(':VOLUME', $VOLUME);
    $stmt->bindParam(':TITRAGE', $TITRAGE);
    $stmt->bindParam(':ID_MARQUE', $ID_MARQUE);
    $stmt->bindParam(':ID_COULEUR', $ID_COULEUR);
    $stmt->bindParam(':ID_TYPE', $ID_TYPE);

    $stmt->execute();
}

function Crud_supprimer_Article()
{
    $ID_ARTICLE = $_POST['ID_ARTICLE'];

    $stmt = getPDO()->prepare("DELETE FROM article WHERE ID_ARTICLE = :id_article");
    $stmt->execute([':id_article' => $ID_ARTICLE]);
}
