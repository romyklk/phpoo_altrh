<?php 

/*
Créez une classe représentant une personne avec les propriétés nom ,prénom et un constructeur.

Créez une classe client dérivée de la classe personne en y ajoutant la propriété adresse et une méthode getCoordonnee() qui affiche les coordonnées complètes de la personne.

Créez une classe électeur dérivée de la même classe(Personne), et ajoutez-y deux propriétés bureau de vote et vote, ainsi que deux méthodes ; une méthode booléenne qui permet retourner la valeur True à l’attribut vote et une autre méthode isVoter qui permet de tester si un électeur a voté.*/

class Personne 
{
    protected $nom;
    protected $prenom;

    public function __construct($n,$p)
    {
        $this->nom = $n;
        $this->prenom = $p;
    }

}

class Client extends Personne 
{
    protected $adressse;

    public function __construct($n,$p,$a)
    {
        parent::__construct($n,$p);
        $this->adressse = $a;
    }

    public function getCoord()
    {
        return "Je suis ". $this->nom . " " . $this->prenom . " et j'habite à " . $this->adressse;
    }
    
}

$persone = new Client("Moussa","Sow","Dakar");
echo $persone->getCoord();

class Electeur extends Personne 
{
    protected $bureau;
    protected $vote=false;

    public function __construct($n,$p,$b)
    {
        parent::__construct($n,$p);
        $this->bureau = $b;
    }

    public function voter()
    {
        $this->vote = true;
    }

    public function isVoter()
    {
        if($this->vote == true)
        {
            return "Vous avez déjà voté";
        }
        else
        {
            return "Vous n'avez pas encore voté";
        }
    }
    
}
echo"<hr>";
$electeur = new Electeur("Moussa","Sow","Paris");
echo $electeur->isVoter();

echo"<hr>";
$electeur2 = new Electeur("Jean","Dupont","Lyon");
$electeur2->voter();
echo $electeur2->isVoter();