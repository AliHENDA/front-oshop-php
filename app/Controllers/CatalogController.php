<?php

class CatalogController {
  public function categoryAction($params) {
    $categoryId = $params['id'];
    $this->show('category', ['category_id' => $categoryId]);
  }

  public function typeAction($params) {
    $typeId = $params['id'];
    $this->show('type', ['type_id' => $typeId]);
  }

  public function brandAction($params) {
    $brandId = $params['id'];
    $this->show('brand', ['brand_id' => $brandId]);
  }

  public function productAction($params) {
    $brandId = $params['id'];
    $this->show('product', ['product_id' => $brandId]);
  }


  private function show($viewName, $viewData = []) {
     // Brutal et à ne pas réutiliser à l'avenir sauf en cas de force majeure
    // Ou de disparition du f0f
    // On utilise le mot clé global, grâce à ça on rend accessible dans la fonction
    // une variable à laquelle la fonction n'aurait pas accès normalement
    // En gros = Global outrepasse la portée de la variable
    global $router;
    
    $absoluteURL = $_SERVER['BASE_URI'];

     // Comme je veux afficher les marques sur le header
    // Et que le header est appelé sur TOUTES les pages
    // Alors je récupère la liste des marques ici
    $brandObject = new Brand;
    $brands = $brandObject->findAll();

    // $viewData est disponible dans chaque fichier de vue
    require_once __DIR__ . '/../views/header.tpl.php';
    require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
    require_once __DIR__ . '/../views/footer.tpl.php';
  }
}