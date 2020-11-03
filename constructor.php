<?php

class Constructor
{

    private $propertyOne;
    private $propertyTwo;

    public function __construct()
    {
        $this->propertyOne = 51;
        $this->propertyTwo = 23;
        echo 'construct method called';
    }

    public function hello()
    {
        echo 'hello akhilesh';
    }
}

$obj = new Constructor();

// var_dump($obj);
// echo '<br>';

echo '<pre>';
print_r($obj);
echo '<br>';
$obj->hello();

// note*
// constructor's are used to set property automatically
// constructor's used for dependency injection
// to prevent object creation using private access modifiers