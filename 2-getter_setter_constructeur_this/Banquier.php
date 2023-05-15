<?php

// TODO 4 : Créer une classe qui représente un banquier qui permet de récupérer grâce aux getters les informations et afficher son nom, prénom,age, son grade et lieu de travail.Si le lieu de travail n'est pas fourni alors ce sera Paris par défaut.Tous ces attributs sont requis et que l’âge doit être entre 18 et 65 ans compris.Le nom et le prénom doivent être de type string, et doivent être comprise etre 3 et 15 caractères.

class Banquier 
{
    private $nom, $prenom, $age, $grade, $lieuDeTravail;

    public function setNom($n){
        if(is_string($n) && strlen($n) >= 3 && strlen($n) <= 15){
            $this->nom = $n;
        }else{
            echo "<span>Le nom doit être de type string et doit être compris entre 3 et 15 caractères</span>";
        }
    }

    public function getNom(){
        return $this->nom;
    }

    public function setPrenom($p){
        if(is_string($p) && strlen($p) >= 3 && strlen($p) <= 15){
            $this->prenom = $p;
        }else{
            echo "<span>Le prénom doit être de type string et doit être compris entre 3 et 15 caractères</span>";
        }
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setAge($a)
    {
        if(is_int($a) && $a >= 18 && $a <= 65){
            $this->age = $a;
        }else{
            echo "<span>L'âge doit être de type int et doit être compris entre 18 et 65 ans</span>";
        }
    }

    public function getAge(){
        return $this->age;
    }

    public function setGrade($g){
            $this->grade = $g;
    }

    public function getGrade(){
        return $this->grade;
    }

    public function setLieuDeTravail($l){
            $this->lieuDeTravail = $l;
    }

    public function getLieuDeTravail(){
        return $this->lieuDeTravail;
    }

    public function __construct($n, $p, $a, $g, $l = "Paris")
    {
        $this->setNom($n);
        $this->setPrenom($p);
        $this->setAge($a);
        $this->setGrade($g);
        $this->setLieuDeTravail($l);
    }

    public function showBanquier(){
        echo "Bonjour, je suis " . $this->getNom() . " " . $this->getPrenom() . " j'ai " . $this->getAge() . " ans, je suis " . $this->getGrade() . " et je travaille à " . $this->getLieuDeTravail() . ".<br>";
    }
    
}

$banquier1 = new Banquier("Dupont", "Jean", 25, "Directeur", "Lyon");

$banquier1->showBanquier();

$banquier2 = new Banquier("Durand", "Pierre", 35, "Caissier");

$banquier2->showBanquier();