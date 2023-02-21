<?php

namespace Oshop\Controllers;

use Oshop\Models\Brand;
use Oshop\Models\Product;
use Oshop\Models\Category;
use Oshop\Models\Type;

class MainController extends CoreController {
  public function homeAction() {
    

    // récupérer les données nécessaire à l'affichage de la page
    $categoryObject = new Category;
    $categoriesHomePage = $categoryObject->getHomePageCategories();

    $this->show('home', [
      'categoriesHomePage' => $categoriesHomePage
      ]
    );
  }

  public function legalNoticeAction() {
    $this->show('legal_notice');
  }

  public function pageNotFound() {
    header("HTTP/1.1 404 Not Found");
    $this->show('404');
  }

  public function testAction() {
    echo '--------PRODUCT:---------';

    $productObject =  new Product;
    $allProducts = $productObject->findAll();
    dump($allProducts);

    echo '-----------------';

    $oneProduct = $productObject->find(1);
    dump($oneProduct);

    echo '--------TYPE:---------';
    /* Test de Flavien:*/

    $typeObject = new Type;
    $allTypes = $typeObject->findAll();
    dump($allTypes);

    echo '-----------------';

    $oneType = $typeObject->find(4);
    dump($oneType);

    echo '--------CATEGORY:---------';
    /* Test de David: */
    $categoryObject = new Category;

    $allCategories = $categoryObject->findAll();
    dump($allCategories);

    echo '-----------------';

    $oneCategory = $categoryObject->find(4);
    dump($oneCategory);

    echo '--------BRAND:---------';
    // Je crée mon objet Brand
    $brandObject = new Brand;

    // J'enregistre les résultats du findAll dans une variable
    $allBrands = $brandObject->findAll();
    // Je dump les résultats du findAll
    dump($allBrands);

    echo '-----------------';

    // j'enregistre le résultat du find sur la Brand qui a l'id 4 dans une variable
    $oneBrand = $brandObject->find(4);
    // Je dump les résultats du find
    dump($oneBrand);
  }
}