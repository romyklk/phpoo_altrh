<?php
echo '<h1 style="color: red;">Classe Objet Instance Visibilité</h1>';
/* 
Une classe est un plan de construction d'objet. Elle contient toutes les informations qui permettent de construire un objet.

Le nom de la classe commence toujours par une majuscule: Panier ou User ou Produit

Le nom du fichier porte le nom de la classe: Panier.php ou Panier.class.php
*/
class Panier
{
    //Dans une classe , nous pouvons déclarer des propriétés ou attributs (variables) et des méthodes (fonctions)

    public $nbProduit; // public représente la visibilité de la propriété. Ici, elle est accessible de partout.

    protected $quantite = 0; // protected représente la visibilité de la propriété. Ici, elle est accessible dans la classe et dans les classes héritières.

    private $nbCommande = 0; // private représente la visibilité de la propriété. Ici, elle est accessible uniquement dans la classe.

    // Public, protected et private sont des mots clés qui permettent de définir la visibilité d'une propriété ou d'une méthode.

    public function ajouterArticle()
    {
        //après x traitement, j'ajoute un produit

        return 'L\'article a bien été ajouté !';
    }

    protected function retirerArticle()
    {
        //après x traitement, je retire un produit

        return 'L\'article a bien été retiré !';
    }

    private function affichageArticle()
    {
        //après x traitement, j'affiche un produit

        return 'Voici les articles !';
    }

}

$panier1 = new Panier; // Pour instancier une classe, on utilise le mot clé new. $panier1 est un objet de la classe Panier. C'est une instance de la classe Panier.Donc l'objet $panier1 hérite de toutes les propriétés et méthodes de la classe Panier.

var_dump($panier1); // On peut voir le contenu de l'objet avec var_dump().

// get_class() est une fonction prédéfinie qui permet de voir les méthodes d'un objet.
//// get_class_methods() est une fonction prédéfinie qui permet de voir les méthodes d'une classe. Elle attend en argument l'objet dont on veut voir les méthodes.
echo '<pre>';
print_r(get_class_methods($panier1)); 
echo '</pre>';

$panier1->nbProduit = 5; // On peut accéder à une propriété publique de l'objet avec la flèche ->. Ici, on affecte la valeur 5 à la propriété nbProduit de l'objet $panier1.

echo "Dans mon objet panier1, j'ai $panier1->nbProduit produits.<br>";

//$panier1->quantite = 8; //On ne peut pas accéder à une propriété protégée de l'objet en dehors de la classe. On ne peut pas affecter de valeur à une propriété protégée de l'objet en dehors de la classe.

//$panier1->nbCommande=1; // On ne peut pas accéder à une propriété privée de l'objet en dehors de la classe. On ne peut pas affecter de valeur à une propriété privée de l'objet en dehors de la classe.

echo $panier1->ajouterArticle() . ' dans le panier1 <br>'; // On peut accéder à une méthode publique de l'objet en dehors de la classe.

//$panier1->retirerArticle(); // On ne peut pas accéder à une méthode protégée de l'objet en dehors de la classe.

//$panier1->affichageArticle(); // On ne peut pas accéder à une méthode privée de l'objet en dehors de la classe.