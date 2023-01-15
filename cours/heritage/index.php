<?php

require __DIR__ . '/classes/Character.php';
require __DIR__ . '/classes/Warrior.php';
require __DIR__ . '/classes/Wizard.php';

// Je crée un objet $josie qui est une instance de la classe Personnage
// Comme des valeurs sont définies par défaut dans cette classe, 
// Josie a au moment de sa création une icône vide et 100 points de vie
/*$josie = new Character;

$josie->icone = '😊';

echo $josie->icone;

echo $josie->lives;  */
/*
$bob = new Warrior;

$degatsInfliges = $bob->foncerDansLeTas();

echo $degatsInfliges;

$dalf = new Wizard;
$degatsInfliges = $dalf->lancerUnSort();
echo $degatsInfliges; */

$warrior = new Warrior('⚔️');
$wizard = new Wizard('🧙‍♂️');

while(true) {
    echo '<br>-------- Tour du Mage ---------<br>';
    $degats = $wizard->lancerUnSort();
    $warrior->recevoirDesDegats($degats);
  
    echo '<br>-------- Tour du Guerrier ---------<br>';
    $degats = $warrior->foncerDansLeTas();
    $wizard->recevoirDesDegats($degats);
  
  }