<?php 

class A 
{
    public function test1()
    {
        echo "Je suis la classe A <br>";
    }

    protected function test()
    {
        echo "Je suis la methode protected <br>";
    }
}

class B extends A
{
    public function test2()
    {
        echo "Je suis la classe B <br>";
    }
}

class C extends B
{
    public function test3()
    {
        echo "Je suis la classe C <br>";
    }
}   

$c = new C;

$c->test1();
$c->test2();
$c->test3();
// $c->test(); // Erreur car la methode est protected

//!\\ Non Reflexif: la class C ne peut hériter de la class C // Une classe ne peut pas hériter d'elle même
//!\\  Non Symétrique: Si B hérite de A, A n'hérite pas de B
//!\\  Pas de multi-héritage: Une classe ne peut pas hériter de plusieurs classes en même temps// Je ne peux pas écrire class C extends A, B