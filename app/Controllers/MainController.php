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

  //pourquoi private? car cette method n'est appelée qu'à l'intérieur de MainController
  private function show($viewName, $viewData = []) {
    // $viewData est disponible dans chaque fichier de vue
    require_once __DIR__ . '/../views/header.tpl.php';
    require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
    require_once __DIR__ . '/../views/footer.tpl.php';
  }
}