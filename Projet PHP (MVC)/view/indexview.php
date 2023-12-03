<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Ma Barre de Menu</title>
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

        <h1>Liste de mes bières</h1>






        <table class="table table-bordered">




            <thead>


                <tr>


                    <th>ID Article</th>


                    <th>Nom Article</th>


                    <th>Prix Article</th>


                    <th>Volume</th>


                    <th>Titrage</th>


                    <th>ID Marque</th>


                    <th>ID Couleur</th>


                    <th>ID Type</th>


                </tr>


            </thead>


            <tbody>

                <?php
                foreach ($articles as $article) {
                ?>


                    <tr>



                        <td>
                            <?php echo ucwords($article["ID_ARTICLE"]) ?>
                        </td>

                        <td>
                            <?php echo ucwords($article["NOM_ARTICLE"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($article["PRIX_ACHAT"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($article["VOLUME"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($article["TITRAGE"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($article["NOM_MARQUE"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($article["NOM_COULEUR"]) ?>
                        </td>
                        <td>
                            <?php echo ucwords($article["NOM_TYPE"]) ?>
                        </td>
                    </tr>
                <?php  } ?>
            </tbody>

        </table>






</body>

</html>