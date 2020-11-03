<?php

class ScopeResolution
{
    const MAX = 100;
    public static $variable = "static";

    public function __construct()
    {
        echo "constructor method called.";
    }
}

echo ScopeResolution::MAX;
echo '<br>';
echo ScopeResolution::$variable;
echo '<br>';

// note*

// this will not work
$obj = new ScopeResolution();
echo $obj->variable;
echo $obj->Max;

// scope resolution are used to access static variable
// to print constant because this can not be accessed using object