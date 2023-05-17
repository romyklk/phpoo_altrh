<?php 

/* 
Surcharge ou override : permet de modifier le comportement d'une méthode héritée de la classe parente.
Elle permet de prendre en compte le comportement initial de la méthode parente et d'y ajouter un comportement supplémentaire.

*/

class A 
{
    public function calcul()
    {
        // Après un traitement de 2000 lignes de code
        return 10;
    }
}

/* 
parent:: => on demande d'utiliser la méthode calcul de la classe parente
self:: => on demande d'utiliser ce qui est dans la classe courante
*/

class B extends A 
{
    public function calcul() // Redefinition de la méthode calcul
    {
        $nb = parent::calcul();//(SURCHARGE) parent:: permet d'appeler la méthode calcul de la classe parente.Donc on appelle la méthode calcul de la classe A et on stocke le résultat dans la variable $nb

        if($nb <=100){
            echo "$nb est inférieur ou égal à 100";
        }else{
            echo "$nb est supérieur à 100";
        }
    }

    public function autreCalcul()
    {
        $nombre = parent::calcul();

        return $nombre;
    }
}

$b = new B;
$b->calcul();
echo "<br>";

echo $b->autreCalcul();