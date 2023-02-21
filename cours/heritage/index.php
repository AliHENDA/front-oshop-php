<?php

require __DIR__ . '/classes/Personnage.php';
require __DIR__ . '/classes/Guerrier.php';
require __DIR__ . '/classes/Mage.php';

// Je crée un objet $josie qui est une instance de la classe Personnage
// Comme des valeurs sont définies par défaut dans cette classe, 
// Josie a au moment de sa création une icône vide et 100 points de vie
/*
$josie = new Personnage;

$josie->icone = '😊';

echo $josie->icone;

echo $josie->getPointsDeVie();
*/

$guerrier = new Guerrier('⚔️');
$mage = new Mage('🧙‍♂️');

while(true) {
  echo '<br>-------- Tour du Mage ---------<br>';
  $degats = $mage->lancerUnSort();
  $guerrier->recevoirDesDegats($degats);

  echo '<br>-------- Tour du Guerrier ---------<br>';
  $degats = $guerrier->foncerDansLeTas();
  $mage->recevoirDesDegats($degats);

}