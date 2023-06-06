<?php

namespace Oshop\Models;

use Oshop\Utils\Database;
use \PDO;

class Product extends CoreModel {
  // Merci Caroline pour le copié collé!!
  private $description;
  private $picture;
  private $price;
  private $rate;
  private $status;
  private $brand_id;
  private $category_id;
  private $type_id;


  /**
   * Get the value of description
   */ 
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set the value of description
   *
   * @return  self
   */ 
  public function setDescription($description)
  {
    $this->description = $description;

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
   * Get the value of price
   */ 
  public function getPrice()
  {
    return $this->price;
  }

  /**
   * Set the value of price
   *
   * @return  self
   */ 
  public function setPrice($price)
  {
    $this->price = $price;

    return $this;
  }

  /**
   * Get the value of rate
   */ 
  public function getRate()
  {
    return $this->rate;
  }

  /**
   * Set the value of rate
   *
   * @return  self
   */ 
  public function setRate($rate)
  {
    $this->rate = $rate;

    return $this;
  }

  /**
   * Get the value of status
   */ 
  public function getStatus()
  {
    return $this->status;
  }

  /**
   * Set the value of status
   *
   * @return  self
   */ 
  public function setStatus($status)
  {
    $this->status = $status;

    return $this;
  }

  /**
   * Get the value of brand_id
   */ 
  public function getBrand_id()
  {
    return $this->brand_id;
  }

  /**
   * Set the value of brand_id
   *
   * @return  self
   */ 
  public function setBrand_id($brand_id)
  {
    $this->brand_id = $brand_id;

    return $this;
  }

  /**
   * Get the value of category_id
   */ 
  public function getCategory_id()
  {
    return $this->category_id;
  }

  /**
   * Set the value of category_id
   *
   * @return  self
   */ 
  public function setCategory_id($category_id)
  {
    $this->category_id = $category_id;

    return $this;
  }

  /**
   * Get the value of type_id
   */ 
  public function getType_id()
  {
    return $this->type_id;
  }

  /**
   * Set the value of type_id
   *
   * @return  self
   */ 
  public function setType_id($type_id)
  {
    $this->type_id = $type_id;

    return $this;
  }

  /**
   * Récupérer la liste de tous les produits
   *
   * @return Product[]
   */
  public function findAll() {
    // On récupère la connexion PDO
    $databaseDbConnection = Database::getPDO();

    // On crée notre requête SQL
    $sql = 'SELECT * FROM `product`';

    // On exécute notre requête
    $pdoStatement = $databaseDbConnection->query($sql);

    // On récupère les données retournées par la BDD
    $productList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, __CLASS__);

    return $productList;
  }

  /**
   * Récupérer un produit spécifique
   *
   * @param int $product_id
   * @return Product
   */
  public static function find($product_id) {

    // On récupère la connexion PDO
    $databaseDbConnection = Database::getPDO();

    // On crée notre requête SQL
    $sql = 'SELECT * FROM `product` WHERE `id` =' . $product_id;

    // On exécute notre requête
    $pdoStatement = $databaseDbConnection->query($sql);

    // On récupère les données retournées par la BDD
    $product = $pdoStatement->fetchObject(__CLASS__);

    return $product;

  }

   /**
     * retrieves all products with the given category
     *
     * @param int $categoryId
     * @return Product[]
     */
    public static function findAllByCategoryId($categoryId)
    {
        $sql = '
        SELECT *
        FROM `product`
        WHERE `category_id` = ' . $categoryId;

        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, __CLASS__);

        return $products;
    }

    /**
     * retrieves all products with the given brand
     *
     * @param int $brandId
     * @return Product[]
     */
    public static function findAllByBrandId($brandId)
    {
        $pdo = Database::getPDO();

        $sql = '
            SELECT *
            FROM `product`
            WHERE `brand_id` = ' . $brandId;

        $pdoStatement = $pdo->query($sql);
        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, __CLASS__);

        return $products;
    }


    /**
     * retrieves all products with the given type
     *
     * @param int $typeId
     * @return Product[]
     */
    public static function findAllByTypeId($typeId)
    {
        $pdo = Database::getPDO();

        $sql = '
            SELECT *
            FROM `product`
            WHERE `type_id` = ' . $typeId;

        $pdoStatement = $pdo->query($sql);
        $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, __CLASS__);

        return $products;
    }
  
}