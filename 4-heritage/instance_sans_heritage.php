<?php 

class A {
    public function direBonjour() {
        return "Bonjour";
    }
}

class B 
{
    public $mavariable;

    public function __construct()
    {// Je crée une instance de la classe A dans ma propriété $mavariable. Cette propriété devient un objet de la classe A.
        $this->mavariable = new A;
    }

    public function uneMethode()
    {// Je peux appeler la méthode direBonjour() de la classe A via l'objet $mavariable qui est une instance de la classe A.
        return $this->mavariable->direBonjour();
    }
}

$objet = new B;
var_dump($objet);
echo $objet->uneMethode();