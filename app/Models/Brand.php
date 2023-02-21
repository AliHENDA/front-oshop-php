<?php

namespace Oshop\Models;

use Oshop\Utils\Database;
use \PDO;

class Brand extends CoreModel {
  /* --------------- METHODES ACTIVE RECORD ------------------- */

  /**
   * Récupérer la liste de toutes les marques
   *
   * @return Brand[]
   */
  public static function findAll() {
    // On récupère la connexion PDO
    $databaseDbConnection = Database::getPDO();

    // On crée notre requête SQL
    $sql = 'SELECT * FROM `brand`';

    // On exécute notre requête
    $pdoStatement = $databaseDbConnection->query($sql);

    // On récupère les données retournées par la BDD
    $brandList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, __CLASS__);

    return $brandList;
  }

  /**
   * Récupérer une marque spécifique
   *
   * @param int $brand_id
   * @return Brand
   */
  public static function find($brand_id) {
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

  public function getAllBrandsAssoc() {
    $pdo = Database::getPDO();

    $sql = "SELECT `id`, `name` FROM `brand`";

    $pdoStatement = $pdo->query($sql);

    // Je veux récupérer la première colonne (les ids) en tant qu'indexs dans mon tableau associatif
    // Et la seconde en tant que valeur
    $result = $pdoStatement->fetchAll(PDO::FETCH_KEY_PAIR);

    return $result;
}

}