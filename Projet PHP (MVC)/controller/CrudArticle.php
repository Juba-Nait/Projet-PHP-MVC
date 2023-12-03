<?php
require_once "../model/CrudArticle.php";
//$ReadArticles = ReadArticle();
if (isset($_POST["Bouton_lire"])) {
    $ReadArticles = ReadArticle();
    echo "votre ligne a été lue";
}

if (isset($_POST["Bouton_ajouter_Article"])) {
    $CrudAddArticle = CrudAddArticle();
    $ReadArticles = ReadArticle();
    echo "votre article a été ajouté";
}

if (isset($_POST["Bouton_modifier_Article"])) {
    $Crud_modifier_Article =  Crud_modifier_Article();
    $ReadArticles = ReadArticle();
    echo "votre article a été modifié";
}

if (isset($_POST["Bouton_supprimer_Article"])) {
    $Crud_supprimer_Article = Crud_supprimer_Article();
    $ReadArticles = ReadArticle();
    echo "votre article a été supprimé";
}


include "../view/CrudArticle.php";
