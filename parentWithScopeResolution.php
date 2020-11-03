<?php

class Main
{
    public $a;

    public function __construct()
    {   
        $this->a = 10;        
    }

    public function xyz()
    {
        echo 'value from class main of a : '.$this->a;
    }
}

class Secondary extends Main
{

    public $b;

    public function __construct()
    {
        parent::__construct(); //1
        $this->b = 15;
    }

    public function xyz()
    {
        echo 'value from class secondary of b : '.$this->b;
        echo '<br>';
        echo parent::xyz(); //2
    }
}

//
$obj = new Secondary();
$obj->xyz();

// note*

// parent 1 used to call the parent constructo method to get all properties of main class
// so we are able to render the value of a using object of secondary class
// and parent with 2 comment used to call xyz function of main class