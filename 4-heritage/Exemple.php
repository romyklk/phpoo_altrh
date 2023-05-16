<?php 
/* 
L'héritage est un principe de la POO qui permet de récupérer les propriétés et les méthodes d'une classe parente.

Une classe enfant hérite de toutes les propriétés et méthodes public et protected de la classe parente.

Pour hériter d'une classe parente, on utilise le mot clé extends.
*/
class Membre 
{
    public $id= 15;
    public $pseudo;
    public $mdp;

    public function __construct()
    {
        echo "Instanciation de la classe Membre";
    }

    public function inscription()
    {
        return "Je m'inscris";
    }

    public function connexion()
    {
        return "Je me connecte";
    }
}


class Admin extends Membre
{
    public function accesBackOffice()
    {
        return "J'accède au BackOffice en tant qu'admin";
    }
}

$admin1 = new Admin;
echo $admin1->connexion();
echo '<br>';
echo $admin1->inscription();
echo '<br>';
echo $admin1->accesBackOffice();