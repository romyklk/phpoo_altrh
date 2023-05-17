<?php 

/* 
Une classe final ne peut pas être héritée.
Une méthode final ne peut pas être redéfinie.
Une classe finale reste instanciable.
Une méthode finale peut être présente dans une classe normale.
L'intérêt de mettre une classe ou une méthode en final est de protéger son code : on est sûr que personne ne pourra la modifier.

Pour déclarer une classe finale, on utilise le mot-clé final devant le mot-clé class.

Pour déclarer une méthode finale, on utilise le mot-clé final devant le mot-clé function.
*/

final class Application // Déclaration d'une classe finale
{
    public function run()
    {
        return 'L\'application se lance';
    }
}

// class Application2 extends Application{} // Erreur fatale : on ne peut pas hériter d'une classe finale

$app = new Application; // On peut instancier une classe finale
echo $app->run();



class Application2 
{
    final public function run2() // Déclaration d'une méthode finale
    {
        return 'L\'application se lance';
    }
}

class App2 extends Application2
{
    //public function run2(){} // Erreur fatale : on ne peut pas redéfinir une méthode finale
}
$app2 = new Application2;
echo $app2->run2();