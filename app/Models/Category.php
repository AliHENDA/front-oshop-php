<?php

namespace Oshop\Models;

use Oshop\Utils\Database;
use \PDO;

class Category extends CoreModel {
  // Merci Mégane pour le copié-collé !
  private $subtitle;
  private $picture;
  private $home_order;

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

  /**
   * Récupérer la liste de toutes les catégories
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
    $categoriesList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, __CLASS__);

    return $categoriesList;
  }

  /**
   * Récupérer une catégorie spécifique
   *
   * @param int $category_id
   * @return Category
   */
  public static function find($category_id) {

    // On récupère la connexion PDO
    $databaseDbConnection = Database::getPDO();

    // On crée notre requête SQL
    $sql = 'SELECT * FROM `category` WHERE `id` =' . $category_id;

    // On exécute notre requête
    $pdoStatement = $databaseDbConnection->query($sql);

    // On récupère les données retournées par la BDD
    $category = $pdoStatement->fetchObject(__CLASS__);

    return $category;
  }

  public function getAllCategoriesAssoc() {
    $pdo = Database::getPDO();

    $sql = "SELECT `id`, `name` FROM `category`";

    $pdoStatement = $pdo->query($sql);

    // Je veux récupérer la première colonne (les ids) en tant qu'indexs dans mon tableau associatif
    // Et la seconde en tant que valeur
    $result = $pdoStatement->fetchAll(PDO::FETCH_KEY_PAIR);

    return $result;
}

public function getHomePageCategories() {
    $databaseDbConnection = Database::getPDO();

    $sql = "SELECT * FROM `category` 
            WHERE `home_order` > 0 
            ORDER BY `home_order` ASC
            LIMIT 5";
            
    $pdoStatement = $databaseDbConnection->query($sql);
    $result = $pdoStatement->fetchAll(PDO::FETCH_CLASS, __CLASS__);

    return $result;
}
}