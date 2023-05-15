<?php
// Constructeur avec arguments
// On peut déclarer un constructeur avec des arguments. Dans ce cas, il faut passer les arguments lors de l'instanciation de la classe.
// Exemple:
//TODO : 2 Faite une classe User ayant la propriété private $prenom un constructeur.essayer de renseigner l'attribut prenom sans changer l'extérieur de la classe.

//1 faire la classe
//2 faire le constructeur
//3 faire le setter et le getter
//4 passer par le constructeur pour renseigner la propriété prenom
//5 instancier la classe
class User 
{
    private $prenom;

    public function __construct($p)
    {
        $this->setPrenom($p);
    }

    public function setPrenom($p)
    {
        $this->prenom = $p;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

}

$user1 = new User("John");
