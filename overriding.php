<?php

class Father
{
    public function bike()
    {
        echo 'Bike';
    }

    public function car()
    {
        echo 'car';
    }

    public function bungalow()
    {
        echo 'bungalow';
    }
}

class Son extends Father
{
    public function bike()
    {
        echo 'upgraded  bike';
    }
}


//

$object = new Son();
$object->bike();
echo '<br>';
$object->car();

// in this son class method bike behaviour of this has changed from father class.
// this is example of overriding.