<?php

class Abc
{
    public function wellFormattedArray(Array $arr)
    {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

    public function bc()
    {
        echo 'extra abc function of class abc';
    }
}

class Xyz extends Abc
{
    public function asdf()
    {
        echo 'function xyz from class xyz';
    }
}

//

$object = new Xyz();

// var_dump($object);

$object->wellFormattedArray([4,5,2,5,6,3,8,9]);


// inheritance in used to increase code reusablity and decrease code complexity