<?php
require_once "connexionBDD.php";

function CrudSelectcolor()
{
    $response = getPDO()->prepare(
        'SELECT * FROM couleur '
    );

    $response->execute();
    return $response->fetchAll(PDO::FETCH_ASSOC);
}

//$Nom_Couleur = $_POST["nomCouleur"];

function CrudAddcolor()
{


    $response = getPDO()->prepare("INSERT INTO couleur (ID_COULEUR, NOM_COULEUR) VALUES (:ID_COULEUR, :NOM_COULEUR)");
    $response->bindParam(':ID_COULEUR', $id);
    $response->bindParam(':NOM_COULEUR', $Nom_Couleur);
    $Nom_Couleur = $_POST['nomCouleur'];

    $id = $_POST['id_couleur'];




    $response->execute();
    //return $response->fetchAll(PDO::FETCH_ASSOC);
    /*
    try {
        $bdd = getPDO();
        $result = $bdd->query($response);
        if ($result) {
            echo "L'article a été ajouté avec succès. ";
        } else {
            echo "Erreur lors de l'ajout de l'article : " . $bdd->errorInfo()[2];
        }
    } catch (PDOException $e) {
        echo 'Erreur de connexion : ' . $e->getMessage();
    }
    */
}

function modifier_color()
{
    $newColor = $_POST['nomCouleur'];
    $id = $_POST['id_couleur'];

    $stmt = getPDO()->prepare("UPDATE couleur SET NOM_COULEUR = :nouvelle_couleur WHERE ID_COULEUR = :id");
    $stmt->execute([':nouvelle_couleur' => $newColor, ':id' => $id]);
}

function supprimer_color()
{
    $newColor = $_POST['nomCouleur'];
    $id = $_POST['id_couleur'];

    $stmt = getPDO()->prepare("DELETE FROM couleur WHERE ID_COULEUR = :id_couleur");
    $stmt->execute([':id_couleur' => $id]);
}
