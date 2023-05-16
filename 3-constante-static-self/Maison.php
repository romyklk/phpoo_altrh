<?php

class Maison
{
    private static $nbPiece = 7;
    private static $espaceTerrain = "500m²";
    public $couleur = "blanc";
    const HAUTEUR = "10m"; // Une constante de classe est déclarée avec le mot-clé const. Elle est forcément public et static. 
    private $nbPorte = 10;

    public static function getNbPiece()
    {
        return self::$nbPiece;
    }

    public function getNbPorte()
    {
        return $this->nbPorte;
    }

    public static function getEspaceTerrain()
    {
        return self::$espaceTerrain;
    }
}

// 1 - Afficher le nombre de pièces de la maison
echo "La maison a " . Maison::getNbPiece() . " pièces.<br>";

// 2 - Quelle est la superficie du terrain ?
echo "La superficie du terrain est :" . Maison::getEspaceTerrain() . "<br>";

// 3 - Afficher la hauteur de la maison

echo "La hauteur de la maison est : " . Maison::HAUTEUR . "<br>";

// 4 - Créer un objet issu de la classe Maison 

$mamaison = new Maison;

// 5 - Quelle est la couleur de la maison  que vous avez créé ?
echo "La couleur de la maison est :" . $mamaison->couleur . "<br>";

// 6 - Combien y a-t-il de portes dans la maison que vous avez créé ?

echo "Le nombre de portes dans la maison est : " . $mamaison->getNbPorte() . " portes<br>";

/* 
//!\\ A Savoir :
 * Est-ce que ma propriété est static ?
    **Si oui (self:: ou nom de la classe::)
        **Est-ce-que je suis à l'intérieur de la classe ?
            ***Si oui (self::)
                ***Je peux accéder à une propriété static avec self::
            ***Sinon (nom de la classe::)
                ***Je peux accéder à une propriété static avec le nom de la classe::

 * Est-ce que ma propriété est non static ?
    **Si oui ($this-> ou nom de l'objet->)
        **Est-ce-que je suis à l'intérieur de la classe ?
            ***Si oui ($this->)
                ***Je peux accéder à une propriété non static avec $this->
            ***Sinon (nom de l'objet->)
                ***Je peux accéder à une propriété non static avec le nom de l'objet->
   
*/