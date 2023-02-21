<?php

namespace Oshop\Controllers;

use Oshop\Models\Product;
use Oshop\Models\Brand;
use Oshop\Models\Type;
use Oshop\Models\Category;

class CoreController {
  protected function show($viewName, $viewData = []) {
    // Brutal et à ne pas réutiliser à l'avenir sauf en cas de force majeure
    // Ou de disparition du f0f
    // On utilise le mot clé global, grâce à ça on rend accessible dans la fonction
    // une variable à laquelle la fonction n'aurait pas accès normalement
    // En gros = Global outrepasse la portée de la variable
    global $router;

    $absoluteURL = $_SERVER['BASE_URI'];

      $brandModel = new Brand();
      $allBrands = $brandModel->getAllBrandsAssoc();

      $typeModel = new Type();
      $allTypes = $typeModel->getAllTypesAssoc();

      $categoryModel = new Category();
      $allCategories = $categoryModel->getAllCategoriesAssoc();


        extract($viewData);
    /*
    dump($viewData);
    die;
    */

    // https://www.php.net/manual/en/function.extract.php
    // Avec extract, je récupère les indexs en tant que variables,
    // par exemple $viewData['product'] devient $product
    extract($viewData);

    // $viewData est disponible dans chaque fichier de vue
    require_once __DIR__ . '/../views/header.tpl.php';
    require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
    require_once __DIR__ . '/../views/footer.tpl.php';
  }
}