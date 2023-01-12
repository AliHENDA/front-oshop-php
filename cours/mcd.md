# Base de données oShop

## Définition des éléments à recenser

### Entités & Propriétés

- Catégorie / category
  - Nom de catégorie / name
- Type de produit / type
  - Nom de type de produit / name
- Marque / brand
  - Nom de la marque / name
- Produit / product
  - Nom de produit / name
  - Prix / price
  - Note / rate
  - Description / description
  - Image / picture

### MCD (avec cardinalités)

https://www.mocodo.net/

BRAND: brand code, brand name, footer order
made, 0N BRAND, 11 PRODUCT
PRODUCT: product code, product name, description, picture, price, rate, status
is tagged as, 01 PRODUCT, 0N CATEGORY
CATEGORY: category code, category name, subtitle, picture, home order

TYPE: type code, type name, footer order
is a, 0N TYPE, 11 PRODUCT

## Dictionnaire de données


## Produits (`product`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de notre produit|
|name|VARCHAR(64)|NOT NULL|Le nom du produit|
|description|TEXT|NULL|La description du produit|
|picture|VARCHAR(128)|NULL|L'URL de l'image du produit|
|price|DECIMAL(10,2)|NOT NULL, DEFAULT 0|Le prix du produit|
|rate|TINYINT(1)|NOT NULL, DEFAULT 0|L'avis sur le produit, de 1 à 5|
|status|TINYINT(1)|NOT NULL, DEFAULT 0|Le statut du produit (1=dispo, 2=pas dispo)|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date de création du produit|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour du produit|
|brand|entity|NOT NULL|La marque (autre entité) du produit|
|category|entity|NULL|La catégorie (autre entité) du produit|
|type|entity|NOT NULL|Le type (autre entité) du produit|

## Catégories (`category`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de la catégorie|
|name|VARCHAR(64)|NOT NULL|Le nom de la catégorie|
|subtitle|VARCHAR(64)|NULL|Le sous-titre/slogan de la catégorie|
|picture|VARCHAR(128)|NULL|L'URL de l'image de la catégorie (utilisée en home, par exemple)|
|home_order|TINYINT(1)|NOT NULL, DEFAULT 0|L'ordre d'affichage de la catégorie sur la home (0=pas affichée en home)|
|created_at|TIMESTAMP|DEFAULT CURRENT_TIMESTAMP|La date de création de la catégorie|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour de la catégorie|

## Marque (`brand`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de la marque|
|name|VARCHAR(64)|NOT NULL|Le nom de la marque|
|footer_order|TINYINT(1)|NOT NULL, DEFAULT 0|L'ordre d'affichage de la marque dans le footer (0=pas affichée dans le footer)|
|created_at|TIMESTAMP|DEFAULT CURRENT_TIMESTAMP|La date de création de la marque|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour de la marque|

## Type de produit (`type`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du type|
|name|VARCHAR(64)|NOT NULL|Le nom du type|
|footer_order|TINYINT(1)|NOT NULL, DEFAULT 0|L'ordre d'affichage du type dans le footer (0=pas affichée dans le footer)|
|created_at|TIMESTAMP|DEFAULT CURRENT_TIMESTAMP|La date de création du type|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour du type|