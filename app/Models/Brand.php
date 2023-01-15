<?php

class Brand extends CoreModel{
  /* --------------- PROPRIETES ------------------- */

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