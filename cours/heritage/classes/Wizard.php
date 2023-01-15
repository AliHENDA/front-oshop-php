<?php

class Wizard extends Character {
    private $Mana = 50;
  
    public function lancerUnSort() {
      echo $this->icone . ' : Brûlez flammes doudounes !!! 🔥<br>';
  
      return random_int(30,60);
    }
}