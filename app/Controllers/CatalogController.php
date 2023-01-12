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
    $absoluteURL = $_SERVER['BASE_URI'];
    // $viewData est disponible dans chaque fichier de vue
    require_once __DIR__ . '/../views/header.tpl.php';
    require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
    require_once __DIR__ . '/../views/footer.tpl.php';
  }
}