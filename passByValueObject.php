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

$newObj = clone $obj; //pass by value

// changing new obj
$newObj->setColor('black');

// printing legit one obj
var_dump($obj); //blue


var_dump($newObj);

// most important thing to remember is keyword //====== clone ========//