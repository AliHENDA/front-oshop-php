<?php

class Type extends CoreModel{

      /* --------------- GETTERS / SETTERS ------------------- */


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