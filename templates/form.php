<?php
/*
 * Template d'accueil
 */
?>

<h1>Bienvenue sur le test de l'agence <?= $GLOBALS["agence"]; ?></h1>

<h2 id="errorLine" >Veuillez compléter le formulaire suivant :</h2>

<form id="form" name="form" method="post" action="">
  <div id="return"></div>

  <div class="field">
    <label for="nom">Votre nom</label>
    <input id="nom" name="nom" type="text" placeholder="Votre nom" />
  </div>

  <div class="field">
    <label for="prenom">Votre prénom</label>
    <input id="prenom" name="prenom" type="text" placeholder="Votre prénom" />
  </div>

  <div class="field">
    <label for="tel">Votre téléphone</label>
    <input id="tel" name="tel" type="tel" placeholder="Votre numéro de téléphone" />
  </div>

  <div class="field">
    <label for="email">Votre email</label>
    <input id="email" name="email" type="email" placeholder="Votre email" />
  </div>

  <input type="submit" name="submit" value="VALIDER" />
</form>
