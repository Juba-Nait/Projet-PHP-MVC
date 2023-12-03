<?php
require_once "../model/CrudColor.php";


if (isset($_POST["Bouton_ajouter"])) {
    $Addcolor = CrudAddcolor();
    $couleurs = CrudSelectcolor();
    echo "votre couleur a été ajoutée";
}


if (isset($_POST["Bouton_modifier"])) {
    $modifier_color = modifier_color();
    $couleurs = CrudSelectcolor();
    echo "votre couleur a été modifiée";
}

if (isset($_POST["Bouton_supprimer"])) {
    $supprimer_color = supprimer_color();
    $couleurs = CrudSelectcolor();
    echo "votre couleur a été supprimée";
}

$couleurs = CrudSelectcolor();

include "../view/Crudcolor.php";
