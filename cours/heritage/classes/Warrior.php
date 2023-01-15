<?php

class Warrior extends Character{
    private $Armor = 50;

    public function __construct($nouvelleIcone){
        parent::__construct($nouvelleIcone);
        $this->lives += 25;
    }
  
    public function foncerDansLeTas() {
      echo $this->icone . " : Baaaaaaston!! 💪<br>";
      return random_int(30,60);
    }
    
}