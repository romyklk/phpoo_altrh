<?php

// Un pattern ou patron de conception est une solution à un problème de conception récurrent.

// Le pattern Singleton est un patron de conception de création qui garantit qu'une classe n'a qu'une seule instance et fournit un point d'accès global à cette instance.C'est-à-dire que l'on aura qu'une seule instance de la classe quelque soit le nombre d'instances créées.

// Vous pouvez utiliser le pattern Singleton lorsque vous avez besoin d'une seule instance d'une classe dans votre application, par exemple, une classe de base de données unique ou un objet de configuration.

class Singleton
{
    private static $instance = null;

    // Je met le constructeur en private pour éviter que l'on puisse instancier la classe
    private function __construct()
    {
    }

    //Je met la méthode __clone en private pour éviter le clonage de l'instance de la classe
    private function __clone()
    {
    }

    public static function getInstance()
    {
        // Si l'instance est null alors on instancie la classe. 
        if (is_null(self::$instance)) {
            self::$instance = new Singleton(); // new Singleton entraine l'appel du constructeur qui est en private et puisque nous sommes à l'intérieur de la classe, on peut y accéder.Donc on crée une instance de la classe Singleton dans la propriété $instance.
        }

        return self::$instance;
    }
}

//$singleton = new Singleton();  Erreur fatale  car le constructeur est en private

$obj = Singleton::getInstance();
var_dump($obj);

$obj2 = Singleton::getInstance();
var_dump($obj2);

?>

