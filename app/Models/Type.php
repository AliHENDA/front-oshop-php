<?php

class Type {
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
   * Récupérer la liste de toutes les types de produit
   *
   * @return Type[]
   */
  public function findAll() {
    // On récupère la connexion PDO
    $databaseDbConnection = Database::getPDO();

    // On crée notre requête SQL
    $sql = 'SELECT * FROM `type`';

    // On exécute notre requête
    $pdoStatement = $databaseDbConnection->query($sql);

    // On récupère les données retournées par la BDD
    $typeList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Type');

    return $typeList;
  }

  /**
   * Récupérer une marque spécifique
   *
   * @param int $type_id
   * @return Type
   */
  public function find($type_id) {
    // On récupère la connexion PDO
    $databaseDbConnection = Database::getPDO();

    // On crée notre requête SQL
    $sql = 'SELECT * FROM `type` WHERE `id`=' . $type_id;

    // On exécute notre requête
    $pdoStatement = $databaseDbConnection->query($sql);

    // On récupère les données retournées par la BDD
    $type = $pdoStatement->fetchObject(__CLASS__);

    return $type;
  }
    
}