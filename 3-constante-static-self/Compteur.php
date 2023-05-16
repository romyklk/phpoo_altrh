<?php 

class Compteur
{
    public static $nbInstanceClass = 0;
    public $nbInstanceObjet = 0;

    public function __construct()
    {
        ++self::$nbInstanceClass; // = self::$nbInstanceClass + 1;
        ++$this->nbInstanceObjet; // = $this->nbInstanceObjet + 1;
    }
}

$c1 = new Compteur;
var_dump($c1);
$c2 = new Compteur;
var_dump($c2);
$c3 = new Compteur;
var_dump($c3);
$c4 = new Compteur;
var_dump($c4);
$c5 = new Compteur;
var_dump($c5);

// 1- Afficher le nombre d'instances de la classe Compteur
echo "Le nombre d'instance de la classe est de " . Compteur::$nbInstanceClass . "<br>";
// 2- Afficher le nombre de fois que l'objet $c5 a été instancié
echo "Le nombre d'instance de l'objet est de " . $c5->nbInstanceObjet . "<br>";