<?php 

/* 
Une interface est une classe abstraite dont les méthodes n'ont pas de contenu.

Elle doit être implémentée par une classe concrète qui devra définir le contenu des méthodes.

Elle permet de définir un contrat entre une classe et ses utilisateurs.c'est à dire que les utilisateurs de la classe doivent savoir quelles méthodes ils peuvent utiliser et comment les utiliser.

Pour déclarer une interface, on utilise le mot clé interface suivi du nom de l'interface et des accolades.

Une classe ne peut pas hériter d'une interface mais elle peut implémenter une ou plusieurs interfaces.C'est à dire que je ne peux pas écrire

class MaClasse extends MonInterface

Une classe implémente une interface en utilisant le mot clé implements suivi du nom de l'interface.

Pour créer une interface , on va réfléchir en terme de comportement et non en terme d'entité.
*/

interface Mouvement
{
    public function deplacement();
}

// class A extends  Mouvement{};Erreur car une classe ne peut pas hériter d'une interface

class Bateau implements Mouvement //La classe Bateau implément l'interface Mouvement
{
    public function deplacement()
    {
        echo 'Je me déplace sur l\'eau';
    }
}

$bateau = new Bateau;
$bateau->deplacement();
echo"<hr>";

class Avion implements Mouvement
{
    public function deplacement()
    {
        echo 'Je me déplace dans le ciel';
    }
}

$avion = new Avion;
$avion->deplacement();

echo"<hr>";

// Une interface peut hériter d'une autre interface
interface Accelerer extends Mouvement
{
    public function accelerer();
}
//1- Une classe peut implémenter plusieurs interfaces
interface iA 
{
    public function a();
}

interface iB
{
    public function b();
}

class A implements iA, iB
{
    public function a()
    {
        echo 'a';
    }

    public function b()
    {
        echo 'b';
    }
}

//2- Une interface peut hériter d'une ou plusieurs interfaces

interface iC 
{
    public function c();
}

interface iD 
{
    public function d();
}

interface iE extends iC, iD
{
    public function e();
}

class B implements iE
{
    public function c()
    {
        echo 'c';
    }

    public function d()
    {
        echo 'd';
    }

    public function e()
    {
        echo 'e';
    }
}

// 3- Héritage+implémentation

class C 
{
    public function c()
    {
        echo 'c';
    }
}

class D extends C implements iA
{
    public function a()
    {
        echo 'a';
    }
}