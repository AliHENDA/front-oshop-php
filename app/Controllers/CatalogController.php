<?php

class CatalogController {
    public function categoryAction() {
        $this->show('category');
    }

    private function show($viewName, $viewData = []) {
    // $viewData est disponible dans chaque fichier de vue
        require_once __DIR__ . '/../views/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/footer.tpl.php';
    }

}