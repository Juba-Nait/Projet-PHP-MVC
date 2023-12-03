<?php

require_once '../model/article.php';  //inclure le fichier

$articles = CrudArticle();

include '../view/indexview.php';
