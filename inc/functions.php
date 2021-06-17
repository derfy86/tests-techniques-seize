<?php
/*
 * Ce fichier contient les fonctions développées spécifiquement pour cet exercice
 */

/*
 * Fonction pour récupérer en template PHP éxécuté
 ---------------------------------------------------------------------------- */
function get_include_contents($filename) {
  if ( is_file($filename) ) :
    ob_start();
    include $filename;
    return ob_get_clean();
  endif;
  return false;
}
