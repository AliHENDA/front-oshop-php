<?php

class Category extends CoreModel{
  private $subtitle;
  private $picture;
  private $home_order;


    // Question à se poser pour savoir si je mets un setter:
  // Est-ce que j'ai l'intention d'autoriser la modification de ce champ?
  // Quesiont à se poser pour savoir si je mets un getter:
  // Est-ce que j'ai l'intention de récupérer ces informations pour m'en servir OU les afficher ?


   /**
   * Get the value of subtitle
   */ 
  public function getSubtitle()
  {
    return $this->subtitle;
  }

  /**
   * Set the value of subtitle
   *
   * @return  self
   */ 
  public function setSubtitle($subtitle)
  {
    $this->subtitle = $subtitle;

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
   * Set the value of home_order
   *
   * @return  self
   */ 
  public function setHome_order($home_order)
  {
    $this->home_order = $home_order;

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
     // __CLASS__ correspond au nom de la classe en cours d'utilisation (donc ici __CLASS__ = 'Category')
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