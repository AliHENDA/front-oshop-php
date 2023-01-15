<?php

class CoreModel {

  /* --------------- PROPRIETES ------------------- */
  Protected $id;
  Protected $name;
  Protected $created_at;
  Protected $updated_at;

/* --------------- GETTERS / SETTERS ------------------- */
  /*
  Le tips d'Audric: 
  Utiliser alt + shift et cliquer sur chaque propriété pour placer le curseur dedans.
  Cliquer droit sur un d'elles et insérer les getters & setters
  NE PAS OUBLIER : supprimer les getters et setters qui ne nous intéressent pas, si on a pas fait le tri avant (au moment du positionnement du curseur). Ici on ne veut pas de setters sur id ni sur created_at
  */

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the value of name
   */ 
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set the value of name
   */ 
  public function setName($name)
  {
    $this->name = $name;
  }

  /**
   * Get the value of created_at
   */ 
  public function getCreated_at()
  {
    return $this->created_at;
  }

  /**
   * Get the value of updated_at
   */ 
  public function getUpdated_at()
  {
    return $this->updated_at;
  }

  /**
   * Set the value of updated_at
   */ 
  public function setUpdated_at($updated_at)
  {
    $this->updated_at = $updated_at;
  }
}