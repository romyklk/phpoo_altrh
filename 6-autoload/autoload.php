<?php 

function inclusionAutomatique($nomDeLaClasse)
{
    require_once $nomDeLaClasse . '.php';
}

spl_autoload_register('inclusionAutomatique');

// spl_autoload_register() est une fonction prédéfinie qui va appeler la fonction inclusionAutomatique() en lui passant en argument le nom de la classe que l'on instancie. Ainsi, si on instancie un objet de la classe C, alors spl_autoload_register() va exécuter inclusionAutomatique('C').