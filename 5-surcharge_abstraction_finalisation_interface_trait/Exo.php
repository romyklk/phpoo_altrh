<?php

/* 
1.	Faire en sorte de ne pas avoir d'objet Vehicule. // abstract

2. 	Obligation pour la Renault et la Peugeot de posséder la même méthode demarrer() qu'un Véhicule de base . // extends + final

3.	Obligation pour la Renault de déclarer un carburant diesel et pour la Peugeot de déclarer un carburant essence (exemple: return 'diesel'; -ou- return 'essence';). // abstract

4.	La Renault doit effectuer 30 tests de + qu'un véhicule de base. // redefinition + surcharge

5.	La Peugeot doit effectuer 70 tests de + qu'un véhicule de base. // redefinition + surcharge

6.	Effectuer les affichages nécessaire. // echo

*/
abstract class Vehicule
{
    final public function demarrer()
    {
        return 'je demarre';
    }
    
    abstract public function carburant();

    public function nombreDeTestObligatoire()
    {
        return 100;
    }
}
//-----------------------
class Peugeot extends Vehicule
{

    public function carburant()
    {
        return 'Essence';
    }

    public function nombreDeTestObligatoire()
    {
        return parent::nombreDeTestObligatoire() + 70;
    }
}
//-----------------------
class Renault extends Vehicule
{
    public function carburant()
    {
        return 'Diesel';
    }

    public function nombreDeTestObligatoire()
    {
        return parent::nombreDeTestObligatoire() + 30;
    }
}
//-----------------------

$peugeot = new Peugeot;
echo 'Peugeot : ' . $peugeot->demarrer() . '<br>';
echo 'Carburant : ' . $peugeot->carburant() . '<br>';
echo 'Nombre de test : ' . $peugeot->nombreDeTestObligatoire() . '<br>';

echo '<hr>';
$renault = new Renault;
echo 'Renault : ' . $renault->demarrer() . '<br>';
echo 'Carburant : ' . $renault->carburant() . '<br>';
echo 'Nombre de test : ' . $renault->nombreDeTestObligatoire() . '<br>';
