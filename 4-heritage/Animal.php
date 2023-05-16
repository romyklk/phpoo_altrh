<?php

class Animal
{
    // Protected permet de rendre une propriété ou une méthode accessible uniquement dans la classe parente et les classes enfants.C'est-à-dire les classes qui héritent de la classe parente(ici Animal).
    protected function deplacement()
    {
        return "Je me déplace";
    }

    public function manger()
    {
        return "Je mange chaque jour <br>";
    }
}

class Elephant extends Animal
{
    public function quiSuisJe()
    {
        return "Je suis un éléphant et " . $this->deplacement() . "<br>"; // J'utilise la méthode deplacement() qui est protected dans la classe parente Animal, mais qui est accessible dans les classes enfants.
    }
}

class Chat extends Animal
{
    public function quiSuisJe()
    {
        return "Je suis un chat <br>";
    }

    public function manger()
    {
        return "Je mange comme un chat <br>";
    }
}

$elephant = new Elephant;

echo "L'éléphant :" .$elephant->manger() . "<br>";

//echo $elephant->deplacement(); // Erreur fatale : on ne peut pas appeler une méthode protected depuis l'extérieur de la classe parente.

echo "L'éléphant :" .$elephant->quiSuisJe() . "<br>";


$chat = new Chat;

echo "Le chat :" .$chat->manger() . "<br>"; // J'appelle la méthode manger() qui est redéfinie dans la classe Chat. PHP va donc exécuter la méthode manger() de la classe Chat et non celle de la classe Animal.Quand une méthode est redéfinie dans une classe enfant, elle prend le dessus sur celle du parent.
// Lorsque j'appelle une méthode, l'interpréteur regarde d'abord dans la classe qui l'appelle, puis dans la classe parente, puis dans la classe parente de la classe parente, etc... jusqu'à ce qu'il trouve la méthode. Il exécute donc la première méthode trouvée et s'arrête là.
