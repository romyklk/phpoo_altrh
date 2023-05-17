<?php

/* 
Une classe abstract ne peut pas être instanciée. Elle sert de modèle de base pour d'autres classes qui en hériteront.

Une méthode abstraite n'a pas de contenu. Elle oblige les classes qui en héritent à redéfinir la méthode abstraite.

Une méthode abstraite ne peut être définie que dans une classe abstraite.

Une classe abstraite peut contenir des méthodes normales.

Pour déclarer une classe abstraite, il faut utiliser le mot clé abstract.

Pour déclarer une méthode abstraite, il faut utiliser le mot clé abstract.

*/
abstract class Joueur // Déclaration d'une classe abstraite
{
    public function seConnecter()
    {
        return $this->etreMajeur();
    }

    abstract public function etreMajeur(); // Déclaration d'une méthode abstraite

    abstract public function devise();
}

// $joueur1 = new Joueur;  Erreur : on ne peut pas instancier une classe abstraite

// On peut hériter d'une classe abstraite

class JoueurFr extends Joueur
{
    public function etreMajeur()
    {
        return 18;
    }

    public function devise()
    {
        return '€';
    }
}

$joueur1 = new JoueurFr;
echo $joueur1->seConnecter() . ' ans <br>';
echo $joueur1->devise() . '<br>';
