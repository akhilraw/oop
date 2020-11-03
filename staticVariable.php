<?php

class Example
{
    static $counter = 0;
    public $count = 0;

    public function __construct()
    {
        self::$counter++;
        $this->count++;
    }
}

//

$obj = new Example();

$obj1 = new Example();

$obj2 = new Example();

echo $obj2->count;
echo '<br>';
var_dump($obj2);

echo Example::$counter;

// $counter is raised as much as object is created in case of static variable
// but the normal variable's value raise by one only.
// so static variables can be used as global variables they hold their values