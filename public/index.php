<?php

// Chargement des dépendances via autoload de composer:
require __DIR__ . '/../vendor/autoload.php';

// Inclut la classe qui permet de se connecter à PDO
// Et la rend accessible dans les autres fichiers
require __DIR__ . '/../app/Utils/Database.php';
require __DIR__ . '/../app/Models/CoreModel.php';
require __DIR__ . '/../app/Models/Brand.php';
require __DIR__ . '/../app/Models/Category.php';
require __DIR__ . '/../app/Models/Type.php';
require __DIR__ . '/../app/Models/Product.php';

require __DIR__ . '/../app/Controllers/MainController.php';
require __DIR__ . '/../app/Controllers/CatalogController.php';

// Tableau des routes

/*
L'analogie de David:
Le $routes c'est comme un portier à l'entrée d'un bâtiment qui te dit, pour aller à l'étage (method), prend l'ascenseur (controller)

L'analogie de Flavien:
En gros le gps affiche plusieurs chemin
*/

// Préparation d'Altorouter
$router = new AltoRouter();

// Définition de la racine de notre projet (path racine)
// Eviter absolument tout caractère spécial ou espace dans les noms des dossiers
$router->setBasePath($_SERVER['BASE_URI']);

$router->map(
  'GET', // La méthode HTTP autorisée par cette route
  '/', // La partie d'URL (après la racine du site / basepath) qui correspond à la page demandée
  [
    'controller' => 'MainController',
    'method' => 'homeAction',
  ], // Les informations qu'on va utiliser pour la route
  'home' // Identifiant unique pour cette route / param optionnel
);

$router->map(
  'GET',
  '/mentions-legales',
  [
    'controller' => 'MainController',
    'method' => 'legalNoticeAction',
  ], 
  'legal-notice'
);
$router->map(
  'GET',
  '/conditions-generales-de-vente',
  [
    'controller' => 'MainController',
    'method' => 'cgvAction',
  ], 
  'cgv'
);



$router->map(
  'GET',
  '/catalogue/categorie/[i:id]',
  [
    'controller' => 'CatalogController',
    'method' => 'categoryAction',
  ],
  'category' 
);

$router->map(
  'GET', 
  '/catalogue/type/[i:id]',
  [
    'controller' => 'CatalogController',
    'method' => 'typeAction',
  ], 
  'type'
);

$router->map(
  'GET', 
  '/catalogue/marque/[i:id]',
  [
    'controller' => 'CatalogController',
    'method' => 'brandAction',
  ], 
  'brand' 
);
$router->map(
  'GET', 
  '/catalogue/produit/[i:id]',
  [
    'controller' => 'CatalogController',
    'method' => 'productAction',
  ], 
  'product' 
);

//test
$router->map(
  'GET',
  '/test',
  [
    'controller' => 'MainController',
    'method' => 'testAction',
  ], 
  'test'
);

$match = $router->match();

/*
dump($match);
exit;
*/

// Quand on dump $match, on remarque:
// Si la route à laquelle j'essaie d'accéder existe: 
// On reçoit un tableau avec les informations à utiliser pour la route
// Un index "target": qui va contenir les informations à utiliser pour la route
// Un index "params": SI un paramètre variable est renseigné (https://altorouter.com/usage/mapping-routes.html), on récupère un tableau qui contient en index le nom du paramètre, et en valeur sa valeur 
// Si on a pas de paramètres variables dans l'url, on reçoit un tableau vide dans "params"
// Un index "name": qui va contenir le nom de la route

// Si par contre la route à laquelle j'essaie d'accéder n'existe pas: 
// $match vaut false

if ($match !== false) {
  // On récupère le tableau correspondant à la route recherchée
  $routeInfos = $match['target'];

  // On récupère dans ce tableau le contrôleur à utiliser et la méthode à appeler
  $controllerToUse = $routeInfos['controller'];
  $method = $routeInfos['method'];
  $urlParams = $match['params'];

  // On crée une nouvelle instance de notre contrôleur qu'on stocke dans une variable (C'est un objet)
  $controller = new $controllerToUse();
  // $controller = new MainController();

  // On prend l'objet contrôleur créé et on on exécute la méthode dessus
  $controller->$method($urlParams);
  // $controller->homeAction();
} else {
  $controller = new MainController();
  $controller->pageNotFound();
}