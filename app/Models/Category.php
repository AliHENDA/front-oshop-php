<?php

class Category{
  private $id;
  private $name;
  private $subtitle;
  private $picture;
  private $home_order;
  private $created_at;
  private $updated_at;

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
   *
   * @return  self
   */ 
  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of picture
   */ 
  public function getPicture()
  {
    return $this->picture;
  }

  /**
   * Set the value of picture
   *
   * @return  self
   */ 
  public function setPicture($picture)
  {
    $this->picture = $picture;

    return $this;
  }

  /**
   * Get the value of home_order
   */ 
  public function getHome_order()
  {
    return $this->home_order;
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
   *
   * @return  self
   */ 
  public function setUpdated_at($updated_at)
  {
    $this->updated_at = $updated_at;

    return $this;
  }

   /* --------------- METHODES ACTIVE RECORD ------------------- */

  /**
   * Récupérer la liste de toutes les types de produit
   *
   * @return Category[]
   */
  public function findAll() {
    // On récupère la connexion PDO
    $databaseDbConnection = Database::getPDO();

    // On crée notre requête SQL
    $sql = 'SELECT * FROM `category`';

    // On exécute notre requête
    $pdoStatement = $databaseDbConnection->query($sql);

    // On récupère les données retournées par la BDD
    $categoryList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'category');

    return $categoryList;
  }

  /**
   * Récupérer une marque spécifique
   *
   * @param int $category_id
   * @return category
   */
  public function find($category_id) {
    // On récupère la connexion PDO
    $databaseDbConnection = Database::getPDO();

    // On crée notre requête SQL
    $sql = 'SELECT * FROM `category` WHERE `id`=' . $category_id;

    // On exécute notre requête
    $pdoStatement = $databaseDbConnection->query($sql);

    // On récupère les données retournées par la BDD
    $category = $pdoStatement->fetchObject(__CLASS__);

    return $category;
  }
  
}