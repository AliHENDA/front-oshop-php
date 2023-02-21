# Héritage & Visibilité

## Visibilité

La visibilité n'a rien à voir avec la sécurité réseau et système, c'est surtout une sécurité pour prévenir des âneries que vous ou vos collègues pouvez faire en travaillant sur le code.

Par exemple, si une propriété ne doit pas être modifiée dans certaines situations, il ne faut surtout pas qu'elle soit en public, il faut surtout que son setter contienne ces vérifications, et le fait de passer par une propriété private, évite qu'on écrive directement une mauvaise valeur dedans.

### Public

Open bar, tout le monde fait ce qu'il veut, le fichier est accessible de partout.

`J'ai laissé la maison ouverte (portes et fenêtres)`

=> A éviter autant que possible

### Private

Hyper sécurisé, seul le code de la classe peut y accéder (en lecture et en écriture). 
On peut créer des getters & setters (publics) pour donner les accès en lecture et en écriture.

`J'ai fermé à double tour toutes les portes et j'ai barricadé les fenêtres`

### Protected

Sécurisé, MAIS accessible au sein de sa propre famille (les enfants ont accès aux éléments protected de leur parent).

Accessible depuis le code interne à la classe MAIS aussi aux enfants et parents de la classe. 
Peuvent être appelées dans du code interne à la classe et du code interne à la classe des enfants.

Le mot de Google :
"protected" est similaire à "private" en ce sens qu'il permet de restreindre l'accès aux membres d'une classe, mais il permet également de les rendre accessibles aux classes héritées. Cela signifie qu'une méthode ou une propriété déclarée comme "protected" peut être surchargée (overridden) dans une classe enfant.

`J'ai fermé à double tour et fermé les fenêtres. Mais j'ai donné des doubles des clés à chaque membre de ma famille`


## Héritage

En héritage on a une notion de parent et d'enfant. 

La classe qui va permettre d'hériter des éléments (propriétés ou méthodes) est appelée classe mère.

La ou les classes qui vont hériter de ces éléments (donc des propriétés ou méthodes de la classe mère) sont appelées des classes filles ou enfants.

Le mot d'Aleth:
C'est comme pour les vrais enfants et parents : le parent donne son patrimoine génétique à son enfant. Mais il n'a pas tout le patrimoine génétique de l'enfant, parce que l'enfant a des "choses" qui lui sont ajoutées (comme le patrimoine génétique de l'autre parent)

En utilisant le mot clé `extends` on peut dire qu'une classe hérite d'une autre, donc qu'elle devient son enfant.

Exemple : class Guerrier extends Personnage
=> La classe Guerrier devient enfant de la classe parent Personnage

### Surcharge:

On peut surcharger une méthode, c'est à dire la réécrire par dessus celle du parent.
Pour surcharger une méthode: elle doit avoir le même nom et la même visibilité.

# Mémo rapide héritage

- une classe ne peut hériter que d'une seule classe
- elle hérite alors de toutes ses méthodes et propriétés (comme un gros copier-coller)
- c'est tout :boom:

## Exemple

```php
<?php

class Computer {
    protected $processor;
    protected $hardDisk;
    protected $ram;
    protected $operatingSystem;
    // [...]
}
```

```php
<?php

class Laptop extends Computer {
    // Adding properties to Computer properties
    protected $screenSize;
    // [...]

    // Adding methods to Computer methods
    // [...]
}
```

```php
<?php

class Server extends Computer {
    // Adding properties to Computer properties
    protected $units;
    // [...]

    // Adding methods to Computer methods
    // [...]
}
```

`Laptop` et `Server` sont des classes "enfants" de `Computer`. Elles héritent donc de ses propriétés et méthodes.
Mais l'intérêt est d'ajouter des propriétés et/ou méthodes spécifiques à `Laptop` et spécifiques à `Server`.