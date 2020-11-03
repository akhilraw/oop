<?php

class Abc
{
    public $a;
    public $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function echoValue()
    {
        echo 'value of a is : '.$this->a. '<br>'. 'value of b is : '. $this->b;
    }
}

$obj = new Abc(12, 23);

$obj1 = new Abc(100, 200);

$obj2 = new Abc(12, 23);

echo '<pre>';
var_dump($obj);
echo '<br>';
var_dump($obj1);
echo '<br>';
var_dump($obj2);

// $obj->echoValue();
// echo '<br>';
// $obj1->echoValue();

// note*

// $this is smart enough to set values for those which object are calling it
// and we can create as many objects as we need and $this can handle them efficiently 
?>