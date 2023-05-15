<?php
//TODO 1: Créer une classe Homme avec les propriétés private nom, prenom, age et sexe.

class Homme
{
    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    // __conctruct() est une méthode magique qui s'exécute automatiquement à l'instanciation de la classe. Donc, à chaque fois qu'on crée un objet de la classe Homme, le constructeur est appelé.

    // On ne peut pas déclarer plusieurs constructeurs dans une même classe. Si on le fait, on aura une erreur fatale.

    public function __construct()
    {
        echo "Je suis le constructeur de la classe Homme <br>";
    }

    // setter() ou mutateurs: permettent de modifier les valeurs des propriétés d'un objet.
    // On écrit set suivi du nom de la propriété avec la première lettre en majuscule.

    public function setNom($n)
    {
        $this->nom = $n;
    }

    public function setPrenom($p) // $p est une variable locale
    {
        // trim() permet de supprimer les espaces en début et en fin de chaîne.
        $p = trim($p);
        // ucfirst() permet de mettre la première lettre en majuscule.
        $p = ucfirst($p);
        // addslashes() permet d'échapper les apostrophes et les guillemets.
        $p = addslashes($p);

        //is_string() permet de vérifier si la valeur passée en paramètre est une chaîne de caractères.Elle renvoie true si c'est le cas et false dans le cas contraire.
        if(is_string($p)){
            $this->prenom = $p;
        }
    }

    //getter() ou accesseurs: permettent de récupérer les valeurs des propriétés d'un objet.
    // On écrit get suivi du nom de la propriété avec la première lettre en majuscule.
    // On ne peut pas mettre de paramètres dans les getters.Le rôle d'un getter est de récupérer la valeur d'une propriété.
    public function getNom()
    {
        return $this->nom;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
}

$homme1 = new Homme;

$homme1->setNom("Doe"); // J'attribue la valeur "Doe" à la propriété nom de l'objet $homme1.
$homme1->setPrenom("john"); // J'attribue la valeur "john" à la propriété prenom de l'objet $homme1.

echo "Je suis ".$homme1->getPrenom()." ".$homme1->getNom() ."<br>"; // Je passe par le getter pour afficher la valeur de la propriété prenom de l'objet $homme1.

// this représente l'objet en cours de manipulation. Il permet d'accéder aux propriétés et aux méthodes d'un objet.