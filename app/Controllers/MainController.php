<?php

class MainController {
  public function homeAction() {
    $this->show('home');
  }

  public function legalNoticeAction() {
    
    $this->show('legal-notice');
  }
  public function cgvAction() {
    
    $this->show('cgv');
  }

  public function pageNotFound() {
    header("HTTP/1.1 404 Not Found");
    $this->show('404');
  }

  public function testAction() {
   // Je crée mon objet product
   $productObject = new Product;

   // J'enregistre les résultats du findAll dans une variable
   $allproducts = $productObject->findAll();
   // Je dump les résultats du findAll
   dump($allproducts);

   echo '-----------------';

   // j'enregistre le résultat du find sur la Category qui a l'id 4 dans une variable
   $oneProduct = $productObject->find(4);
   // Je dump les résultats du find
   dump($oneProduct);

  }


  //pourquoi private? car cette method n'est appelée qu'à l'intérieur de MainController
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