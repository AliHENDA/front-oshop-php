# SQL des modèles

https://github.com/O-clock-Newton/S05-E04-challenge-sql-models

## Listing des requêtes à créer

### Header

- La liste de toutes les catégories

```sql
SELECT * FROM `category`;
```

- La liste de tous les types

```sql
SELECT * FROM `type`;
```

- La liste de toutes les marques

```sql
SELECT * FROM `brand`;
```

### Home

- Les 5 catégories mises en avant

```sql
```

### Catégorie

- Les informations d'une catégorie en particulier(#6)

```sql
SELECT * FROM `category` WHERE `id` = 6;
```

- La liste des produits de la catégorie triés par nom croissant

```sql
SELECT * FROM `product` WHERE `category_id` = 6 ORDER BY `name`;
```

- La liste des produits de la catégorie triés par note croissante

```sql
SELECT * FROM `product` WHERE `category_id` = 6 ORDER BY `rate` DESC;
```

- La liste des produits de la catégorie triés par prix croissant

```sql
SELECT * FROM `product` WHERE `category_id` = 6 ORDER BY `price`;
```

### Marque

- Les informations d'une marque en particulier (#8)

```sql
SELECT * FROM `brand` WHERE `id` = 8;
```

- La liste des produits de la marque triés par nom croissant

```sql
SELECT * FROM `product` WHERE `brand_id` = 8 ORDER BY `name`;
```

- La liste des produits de la marque triés par note croissante

```sql
SELECT * FROM `product` WHERE `brand_id` = 8 ORDER BY `rate` DESC;
```

- La liste des produits de la marque triés par prix croissant

```sql
SELECT * FROM `product` WHERE `brand_id` = 8 ORDER BY `price`;
```

### Type

- Les informations d'un type en particulier(#3)

```sql
SELECT * FROM `type` WHERE `id` = 3;
```

- La liste des produits du type triés par nom croissant

```sql
SELECT * FROM `product` WHERE `type_id` = 3 ORDER BY `name`;
```

- La liste des produits du type triés par note croissante

```sql
SELECT * FROM `product` WHERE `type_id` = 3 ORDER BY `rate` DESC;
```

- La liste des produits du type triés par prix croissant

```sql
SELECT * FROM `product` WHERE `type_id` = 3 ORDER BY `price`;
```

### Produit

 Les infos d'un produit en particulier (#1) + son nom de catégorie + son nom de marque

```sql
SELECT p.*, c.`name` AS 'category_name', b.`name` AS 'brand_name'
FROM `product` p
JOIN `category` c
ON p.`category_id` = c.`id`
JOIN `brand` b
ON p.`brand_id` = b.`id`
WHERE p.`id` = 1
```
