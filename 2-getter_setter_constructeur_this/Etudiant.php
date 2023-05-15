<?php 
//TODO 3: Faire une classe Etudiant avec les propriétés suivantes : nom, prenom, age, classe, moyenne. Faire une méthode sePresenter() qui affiche les informations de l'étudiant. Instancier 2 étudiants et les faire se présenter(essayer de renseigner l'attribut prenom sans changer l'extérieur de la classe.)

class Etudiant 
{
    private $nom, $prenom, $age, $classe, $moy;

    // Si j'ai n propriétés, je dois faire n getters et n setters

    // private $nom est la propriété nom de la classe Etudiant

    // $n est le paramètre de la méthode setNom. Il est utilisé pour définir la valeur de la propriété nom et est donc appelé argument.$n est une variable locale à la méthode setNom. Elle n'existe que dans cette méthode.
    public function setNom($n){ 
        $this->nom = $n;
    }


    public function getNom(){
        return $this->nom;
    }

    public function setPrenom($p){
        $this->prenom = $p;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setAge($a){
        $this->age = $a;
    }

    public function getAge(){
        return $this->age;
    }

    public function setClasse($c){
        $this->classe = $c;
    }

    public function getClasse(){
        return $this->classe;
    }

    public function setMoy($m){
        $this->moy = $m;
    }

    public function getMoy(){
        return $this->moy;
    }

    // Je passe les valeurs des paramètres $n, $p, $a, $c, $m aux méthodes setNom, setPrenom, setAge, setClasse et setMoy
    public function __construct($n, $p, $a, $c, $m)
    {
        $this->setNom($n);
        $this->setPrenom($p);
        $this->setAge($a);
        $this->setClasse($c);
        $this->setMoy($m);
    }


    public function sePresenter(){
        echo "Bonjour, je m'appelle ".$this->getPrenom()." ".$this->getNom()." et j'ai ".$this->getAge()." ans. Je suis en ".$this->getClasse()." et ma moyenne est de ".$this->getMoy()." sur 20. <br>";
    }
}

// Puisse que le constructeur attend 5 paramètres, je dois lui passer 5 arguments
$etudiant1 = new Etudiant("Doe", "John", 18, "3ème", 15);

$etudiant1->sePresenter();