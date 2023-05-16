<?php

class Vehicule 
{
    // Une propriété statique est une propriété de classe. C'est à dire qu'elle appartient à la classe et non à l'objet.
    // La propriété static est représentée par self:: à l'intérieur de la classe et par le nom de la classe à l'extérieur de la classe.
    // Une propriété static peut être privée, protégée ou publique.
    //Une changement de valeur d'une propriété static est répercuté sur tous les objets de la classe.
    private static $marque="BMW";
    private $modele = "Serie 1";
    private static $couleur = "Noir";

    public function getMarque()
    {
        return self::$marque;
    }

    public function setMarque($m)
    {
        self::$marque = $m;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function setModele($m)
    {
        $this->modele = $m;
    }

    public static function getCouleur()
    {
        return self::$couleur;
    }

    public static function setCouleur($c)
    {
        self::$couleur = $c;
    }
}

$vehicule1 = new Vehicule;
var_dump($vehicule1); //On remarque le dump sur l'objet vehicule1 affiche que la propriété $modele car $marque et $couleur sont des propriétés static et donc appartiennent à la classe et non à l'objet.Donc on ne peut pas les afficher sur l'objet.

echo "Le véhicule 1 est de marque " . $vehicule1->getMarque() . " de modèle " . $vehicule1->getModele() . " et sa couleur est " . $vehicule1->getCouleur() . " .<br>";

$vehicule2 = new Vehicule;

echo "Le vehicule 2 est de marque " . $vehicule2->getMarque() . " de modèle " . $vehicule2->getModele() . " et sa couleur est " . $vehicule2->getCouleur() . " .<br>";

$vehicule3 = new Vehicule;
//Changement de couleur pour le vehicule3
$vehicule3->setCouleur("Rouge");

echo "Le vehicule 3 est de marque " . $vehicule3->getMarque() . " de modèle " . $vehicule3->getModele() . " et sa couleur est <span style='color:red';>" . $vehicule3->getCouleur() . "</span> .<br>";

// Puisse la propriété $couleur est static, le changement de couleur pour le vehicule3 est répercuté sur tous les objets de la classe.

$vehicule4 = new Vehicule;
echo "Le vehicule 4 est de marque " . $vehicule4->getMarque() . " de modèle " . $vehicule4->getModele() . " et sa couleur est " . $vehicule4->getCouleur() . " .<br>";

echo "Le véhicule 1 est de marque " . $vehicule1->getMarque() . " de modèle " . $vehicule1->getModele() . " et sa couleur est " . $vehicule1->getCouleur() . " .<br>";

$vehicule5 = new Vehicule;
// Changer la marque pour le vehicule5
$vehicule5->setMarque("Mercedes");

// Faire appel au vehicule2
echo "Le vehicule 2 est de marque " . $vehicule2->getMarque() . " de modèle " . $vehicule2->getModele() . " et sa couleur est " . Vehicule::getCouleur() . " .<br>";

/* 

$this->element : fait appel à un élément d'un objet à l'intérieur de la classe.
$objet->element : fait appel à un élément d'un objet à l'extérieur de la classe.

class::element : fait appel à un élément d'une classe à l'extérieur de la classe.
self::element : fait appel à un élément d'une classe à l'intérieur de la classe.

*/