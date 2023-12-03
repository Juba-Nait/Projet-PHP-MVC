<!DOCTYPE html>
<html lang="en">

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
    <h1>Biere blonde</h1>
    <div class="row">
      <div class="col-md-4">
        <img src="../images/Biere blonde.png" alt="Biere Blonde" class="img-fluid">
      </div>
      <div class="col-md-8">
        <h2>Description</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed lorem mi.
          Curabitur non odio eget metus iaculis congue at quis tellus. Fusce facilisis,
          nisi a congue lacinia, dui metus luctus ipsum, non ultrices risus risus a nulla.
          Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
          Nulla facilisi. Integer condimentum lobortis neque, ac pharetra enim dignissim nec.
          Suspendisse potenti. Donec feugiat nisi eu mauris convallis, ac laoreet erat placerat.
        </p>
        <p>
          Suspendisse potenti. Nullam sagittis lectus ipsum, ac imperdiet ex mollis id.
          Sed sed diam libero. Aliquam aliquet, felis at tempor varius, turpis urna aliquet purus,
          eget viverra ex turpis non mauris. Pellentesque in lobortis ligula. Praesent viverra
          metus et mauris aliquam finibus. Integer eget velit sed ligula tempor faucibus.
        </p>
      </div>
    </div>
  </div>

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
      foreach ($colorBlondes as $article) {
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


  <?php
  foreach ($colorBlondes as $article) {
  ?>

  <?php var_dump($article["NOM_ARTICLE"]) . '<br>';
  } ?>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>