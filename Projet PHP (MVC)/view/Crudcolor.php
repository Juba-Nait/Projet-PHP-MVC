<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Bieres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>



    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Ma Brasserie</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../controller/index.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/colorBlonde.php">Bière Blonde</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/colorBrune.php">Bière Brune</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/colorBlanche.php">Bière Blanche</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/colorAmbree.php">Bière Ambrée</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/Crudcolor.php">Crud couleur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../controller/CrudArticle.php">Crud article</a>
                </li>
            </ul>
        </div>
    </nav>


    <style>
        body {
            background-color: #F8F8E7;
            /* le background de la page  */
        }
    </style>

    <div class="container">
        <h1>Ajouter une couleur de bière</h1>

        <!-- Formulaire d'ajout -->
        <form method="POST">
            <div class="form-group">
                <label for="nom">Nom de la couleur :</label>
                <input type="text" class="form-control" id="nom" name="nomCouleur" required>
            </div>
            <div class="form-group">
                <label for="nom">id de la couleur :</label>
                <input type="text" class="form-control" id="nom" name="id_couleur" required>
            </div>
            <button type="submit" name="Bouton_ajouter" class="btn btn-primary">Ajouter</button>
            <button type="submit" name="Bouton_modifier" class="btn btn-primary">Modifier</button>
            <button type="submit" name="Bouton_supprimer" class="btn btn-primary">Supprimer</button>
        </form>
    </div>

    <h5>Ma partie CRUD simple</h5>

    <?php
    foreach ($couleurs as $couleur) {
    ?>
    <?php echo $couleur["NOM_COULEUR"] . '<br>';
    } ?>




</body>

</html>