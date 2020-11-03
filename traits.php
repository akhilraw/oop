<?php

trait First
{
    public function helloFromFirst()
    {
        echo 'hello from first';
    }

    public function byeFromFirst()
    {
        echo 'Bye from first';
    }

    public function howYouDoing()
    {
        echo 'how you doing';
    }

    public static function staticFunctionHi()
    {
        echo 'Hi, i am using static function in trait first';
    }

}

trait Second
{

    public function helloFromSecond()
    {
        echo 'hello from second';
    }

    public function byeFromSecond()
    {
        echo 'bye from second';
    }

    public function howYouDoing()
    {
        echo 'how you doing from second trait';
    }

    public abstract function hola();

}


// trait Third
// {

// }

class PracticingTraits
{
    // including traits
    use First, Second
    // resolving conflict of same name function
    {
        Second::howYouDoing insteadOf First;
        // use function of second instead of first
    }

    public function ofClassHello()
    {
        echo 'helllo from the class';
    }

    public function hola()
    {
        echo 'hola! buddy, i am using abstract function';
    }
}


// 
$object = new PracticingTraits();
// var_dump($object);
$object->ofClassHello();
echo '<br>';

$object->howYouDoing();

echo '<br>';

$object->byeFromFirst();

echo '<br>';

$object->byeFromSecond();

echo '<br>';

$object->hola();

echo '<br>';

$object::staticFunctionHi();

// note* 
// trait in a trait can be used
// multiple inheritance can be used using traits
// abstract functions can be used also with traits
// traits give every possible combination we can use 