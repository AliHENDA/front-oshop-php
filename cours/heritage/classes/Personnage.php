<?php

class Personnage {
  protected $icone = '';
  protected $pointsDeVie = 100;

  // Le constructeur est exécuté au moment de l'instanciation d'un objet
  // C'est à dire, tout simplement, quand on fait un new
  public function __construct($nouvelleIcone) {
    $this->icone = $nouvelleIcone;
  }

  /* Rappel getters setters: 
    Getter => accès en LECTURE
    Setter => accès en écriture
  */

  private function mourir() {
    die($this->icone . ' : AaaaaaaAaaaargh !! ⚰️⚰️⚰️<br>');
  }

  public function recevoirDesDegats($degatsRecus) {
    echo $this->icone . ' : Mais AaAAieuh! J\'ai pris ' . $degatsRecus . 'points de dégats! 🩸<br>';

    $this->pointsDeVie -= $degatsRecus;

    // Si les points de vie du personnage sont à 0 ou en dessous, il est mort
    if($this->pointsDeVie <= 0) {
      $this->mourir();
    }
  }

}
