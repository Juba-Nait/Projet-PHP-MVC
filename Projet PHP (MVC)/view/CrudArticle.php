<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Bieres</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <style>
        body {
            background-color: #F8F8E7;
            /* le background de la page  */
        }
    </style>

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


    <form method="POST" class="container">
        <h1>Liste de mes bières</h1>

        <div class="form-group col-md-1">
            <label for="nom"> id: </label>
            <input type="text" class="form-control" id="nom" name="ID_ARTICLE">
            <button type="submit" name="Bouton_lire" class="btn btn-primary">Lire</button>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nom article</th>



                    <th>Prix Achat</th>


                    <th>Volume</th>


                    <th>Titrage</th>


                    <th>ID Marque</th>


                    <th>ID Type</th>


                    <th>ID Couleur</th>


                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($ReadArticles as $ReadArticle) { ?>

                    <tr>
                        <td>
                            <?php echo ucwords($ReadArticle["NOM_ARTICLE"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($ReadArticle["PRIX_ACHAT"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($ReadArticle["VOLUME"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($ReadArticle["TITRAGE"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($ReadArticle["ID_MARQUE"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($ReadArticle["ID_TYPE"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($ReadArticle["ID_COULEUR"]) ?>
                        </td>
                    </tr>
                <?php } ?>

                <tr>
                    <td>
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="nom" name="NOM_ARTICLE">
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="nom" name="PRIX_ACHAT">
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="nom" name="VOLUME">
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="nom" name="TITRAGE">
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="nom" name="ID_MARQUE">
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="nom" name="ID_TYPE">
                        </div>
                    </td>

                    <td>
                        <div class="form-group">
                            <label for="nom"></label>
                            <input type="text" class="form-control" id="nom" name="ID_COULEUR">
                        </div>
                    </td>



                </tr>
            </tbody>
        </table>

        <td>
            <button type="submit" name="Bouton_ajouter_Article" class="btn btn-primary">Ajouter</button>
            <button type="submit" name="Bouton_modifier_Article" class="btn btn-primary">Modifier</button>
            <button type="submit" name="Bouton_supprimer_Article" class="btn btn-primary">Supprimer</button>
        </td>
    </form>


</body>

</html>