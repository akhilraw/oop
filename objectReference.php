<?php

class Testing
{
    public $color;

    public function __construct(string $col)
    {
        $this->color = $col;
    }

    public function setColor($new)
    {
        return $this->color = $new;
    }

    public function getColor()
    {
        echo $this->color;
    }
}

//

$obj = new Testing('blue');

echo '<pre>';
var_dump($obj);

$newObj = $obj; //pass by reference

// changing new obj
$newObj->setColor('black');

// printing legit one obj
var_dump($obj); //black