# Projet _Dans les "shoe"_

## Description du projet

Un client veut créer un site de e-commerce, en l'occurence une boutique en ligne de chaussures.  
Le site va probablement s'appeller _Dans les "shoe"_, mais le nom de code du projet est pour l'instant : **oShop**.

Oui, il y a déjà beaucoup de concurrence sur le marché, mais le client est en fait un groupement de plusieurs marques de chaussures qui ne sont pas encore présentes sur internet. Et ces marques ne souhaitent pas dépendre d'une autre société pour la distribution, telle que [Sarenza](https://fr.wikipedia.org/wiki/Sarenza) ou un de ses concurrents.

## Brief client

> Ce brief sera utilisé pour définir les différentes étapes et tâches nécessaires à la conception et à la réalisation du projet.

### Sur toutes les pages

Navigation principale : 

- Retour à l'accueil.
- Les catégories.
- Les types de produits.
- Les marques.

En bas de chaque page, il y aura :

- Le nom de la boutique.
- Le slogan.
- Les liens vers les les réseaux sociaux.
- La mise en avant du fait que livraison et retours sont gratuits, que les clients ont 30 jours pour renvoyer leur produit, que les internautes peuvent contacter notre service client au 01 02 03 04 05 de 8h à 19h, du lundi au vendredi.
- Un formulaire d'inscription à la newsletter.

### Catalogue

Voici le contenu du site prévu pour l'instant :

- Une page d'accueil (avec 5 catégories mises en avant).
- Une page des produits pour chaque catégorie (Détente, En ville, Au travail).
  - Une pagination sera présente.
  - La possibilité de filtrer par nom, note, ou prix.
- Une page produit.
- Une page des produits pour chaque type de produits (Chaussons, Escarpins, Talons aiguilles).
- Une page des produits pour chaque marque.

### Panier d'achat

_Sortie de ce brief pour des raisons de lisibilité._

### Commande

_Sortie de ce brief pour des raisons de lisibilité._

### Back-office

Zone réservée aux administrateurs _métier_ et techniques du site.

- L'accès à cette zone nécessite de se connecter avec son compte
- Les échanges entre le navigateur et le serveur Web sont chiffrés par soucis de confidentialité & sécurité
- Gestion des catégories (liste, ajout, modification, suppression)
- Gestion des produits (liste, ajout, modification, suppression)
- Gestion des types de produits (liste, ajout, modification, suppression)
- Gestion des marques (liste, ajout, modification, suppression)
- Gestion des commandes (liste + changement du statut payé-envoyé-annulé-retourné)
- Gestion des 5 catégories en page d'accueil
- Gestion des utilisateurs du back-office
  - 2 types d'utilisateurs :
    - `catalog manager` pouvant gérer les données sur les produits du site (y compris catégories, types et marque)
    - `admin` pouvant, en plus de ce que peut faire un `catalog manager`, modifier le statut des commandes et créer des utilisateurs

## Documents techniques

- [User stories](docs/user_stories.md)
- [Product backlog](docs/product_backlog.md)
- [Intégration HTML/CSS](docs/html-css/)

