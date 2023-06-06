<?php

namespace Oshop\Models;

use Oshop\Utils\Database;
use \PDO;

class Type extends CoreModel {

  /**
   * Récupérer la liste de tous les types
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
    $typesList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, __CLASS__);

    return $typesList;
  }

  /**
   * Récupérer un type spécifique
   *
   * @param int $type_id
   * @return Type
   */
  public static function find($type_id) {

    // On récupère la connexion PDO
    $databaseDbConnection = Database::getPDO();

    // On crée notre requête SQL
    $sql = 'SELECT * FROM `type` WHERE `id` =' . $type_id;

    // On exécute notre requête
    $pdoStatement = $databaseDbConnection->query($sql);

    // On récupère les données retournées par la BDD
    $type = $pdoStatement->fetchObject(__CLASS__);

    return $type;
  }

  public static function getAllTypesAssoc() {
    $pdo = Database::getPDO();

    $sql = "SELECT `id`, `name` FROM `type`";

    $pdoStatement = $pdo->query($sql);

    // Je veux récupérer la première colonne (les ids) en tant qu'indexs dans mon tableau associatif
    // Et la seconde en tant que valeur
    $result = $pdoStatement->fetchAll(PDO::FETCH_KEY_PAIR);

    return $result;
}
}