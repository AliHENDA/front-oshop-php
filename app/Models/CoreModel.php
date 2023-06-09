<?php

namespace Oshop\Models;

class CoreModel {

  /* --------------- PROPRIETES ------------------- */
  protected $id;
  protected $name;
  protected $created_at;
  protected $updated_at;

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