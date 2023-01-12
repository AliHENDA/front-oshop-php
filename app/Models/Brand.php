<?php

class Brand {
  /* --------------- PROPRIETES ------------------- */

  private $id;
  private $name;
  private $created_at;
  private $updated_at;

  /* --------------- GETTERS / SETTERS ------------------- */

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

  /* --------------- METHODES ACTIVE RECORD ------------------- */

  /**
   * Récupérer la liste de toutes les marques
   *
   * @return Brand[]
   */
  public function findAll() {
    // On récupère la connexion PDO
    $databaseDbConnection = Database::getPDO();

    // On crée notre requête SQL
    $sql = 'SELECT * FROM `brand`';

    // On exécute notre requête
    $pdoStatement = $databaseDbConnection->query($sql);

    // On récupère les données retournées par la BDD
    $brandList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Brand');

    return $brandList;
  }

  /**
   * Récupérer une marque spécifique
   *
   * @param int $brand_id
   * @return Brand
   */
  public function find($brand_id) {
    // On récupère la connexion PDO
    $databaseDbConnection = Database::getPDO();

    // On crée notre requête SQL
    $sql = 'SELECT * FROM `brand` WHERE `id`=' . $brand_id;

    // On exécute notre requête
    $pdoStatement = $databaseDbConnection->query($sql);

    // On récupère les données retournées par la BDD
    $brand = $pdoStatement->fetchObject(__CLASS__);

    return $brand;
  }
}