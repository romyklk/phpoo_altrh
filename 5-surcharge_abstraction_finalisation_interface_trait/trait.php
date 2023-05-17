<?php 

/* 
Un trait est un regroupement de méthodes qui peut être importé dans une classe.

Les traits ont été introduits en PHP 5.4.0 afin de résoudre le problème de l'héritage multiple.

Un trait n'est pas instanciable, il ne peut être utilisé que par une classe.

Une classe peut importer plusieurs traits.

Pour créer un trait, on utilise le mot-clé trait suivi du nom du trait.
*/

trait TPanier 
{
    public $nbProduit = 1;

    public function affichageProduits()
    {
        return 'Affichage des produits du panier !';
    }
}

trait TMembre 
{
    public function affichageMembres()
    {
        return 'Affichage des membres !';
    }
}

// $traitMembre = new TMembre; Erreur : un trait n'est pas instanciable.

// use permet d'importer les traits dans une classe.
class Site 
{
    use TPanier, TMembre; // On importe les traits ici.

    public function affichageSite()
    {
        return 'Affichage du site !';
    }
}
$site = new Site;
echo $site -> affichageProduits() . '<br>';
echo $site -> affichageMembres() . '<br>';
echo $site -> affichageSite() . '<br>';


// Un trait peut utiliser un autre trait.

trait A 
{
    public function a()
    {
        return 'a <br>';
    }
}

trait B 
{
    use A; // On importe le trait A dans le trait B.

    public function b()
    {
        return 'b <br>';
    }
}

class C 
{
    use B; // On importe le trait B dans la classe C.
}
$c = new C;
echo $c -> a();
echo $c -> b();
echo "<hr>";

// 

trait MonTrait 
{
    public function direBonjour()
    {
        return 'Hello !';
    }
}

class MaClasse 
{
    use Montrait;

    public function direBonjour()
    {
        return 'Bonjour depuis la classe !';
    }
}