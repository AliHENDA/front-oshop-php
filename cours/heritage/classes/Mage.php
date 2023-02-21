<?php

class Mage extends Personnage {
  private $pointsDeMana = 50;

  public function lancerUnSort() {
    echo $this->icone . ' : Brûlez flammes doudounes !!! 🔥<br>';

    return random_int(30,60);
  }
}