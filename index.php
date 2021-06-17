<?php
// Chargement des fichiers traitement
require_once(dirname(__FILE__) . "/inc/functions.php");
?>

<html>
  <head>
    <title>Mon formulaire de test</title>
    <link rel="stylesheet" type="text/css" media="screen" href="assets/styles.scss">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/reset.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  </head>
  <body>
  <div class="all">
    <header>
      <div class="header__container">
        <img class="rocket" alt="" src="./img/rocket.svg"/>
        <nav class="nav__bar">
          <ul class="list">
            <li class="list__detail">SERVICES</li>
            <li class="list__detail">PROJETS</li>
            <li class="list__detail">EQUIPE</li>
            <li class="list__detail select">CONTACT</li>
          </ul>
        </nav>
      </div>
    </header>
    <main>
      <div id="modal" class="modal">
        <?php
        echo get_include_contents( dirname(__FILE__) . "/templates/result.php" );
        ?>
      </div>
      <div class="container--center">
        <img class="picture-left" alt="" src="./img/ariane.jpg"/>
        <div id="container" class="container__inside--right">
          <?php
          // Charge la variable
          $GLOBALS["agence"] = "Seize";
          echo get_include_contents( dirname(__FILE__) . "/templates/form.php" );
          ?>
        </div>
      </div>
    </main>
  </div>
    <script type="text/javascript" src="assets/scripts.js"></script>
  </body>
</html>
