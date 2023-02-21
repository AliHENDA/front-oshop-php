<?php

class Guerrier extends Personnage{
  private $pointsArmure = 50;

  public function __construct($nouvelleIcone) {
    parent::__construct($nouvelleIcone);
    $this->pointsDeVie += 25;
  }

  public function foncerDansLeTas() {
    echo $this->icone . " : Baaaaaaston!! 💪<br>";
    return random_int(30,60);
  }
}