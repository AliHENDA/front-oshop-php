<?php

// Chargement des dépendances via autoload de composer :
require __DIR__ . '/../vendor/autoload.php';


require __DIR__ . '/../app/Controllers/MainController.php';
require __DIR__ . '/../app/Controllers/CatalogController.php';

$pageToDisplay = '/';

if(isset($_GET['page'])) {
  $pageToDisplay = $_GET['page'];
}

// Tableau des routes
$routes = [
  '/' => [
    'controller' => 'MainController',
    'method' => 'homeAction',
  ],
  '/catalogue/categorie' => [
    'controller' => 'CatalogController',
    'method' => 'categoryAction',
  ]
];

if (isset($routes[$pageToDisplay])) {
  // On récupère le tableau correspondant à la route recherchée
  $routeInfos = $routes[$pageToDisplay];

  // On récupère dans ce tableau le contrôleur à utiliser et la méthode à appeler
  $controllerToUse = $routeInfos['controller'];
  $method = $routeInfos['method'];

  // On crée une nouvelle instance de notre contrôleur qu'on stocke dans une variable (C'est un objet)
  $controller = new $controllerToUse();
  // $controller = new MainController();

  // On prend l'objet contrôleur créé et on on exécute la méthode dessus
  $controller->$method();
  // $controller->homeAction();
} else {
  $controller = new MainController();
  $controller->pageNotFound();
}