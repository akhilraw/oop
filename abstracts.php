<?php

abstract class Mobile 
{
    protected $model_no;

    public function setModel($model)
    {
        $this->model_no = $model;
    }

    public function getModel()
    {
        return $this->model_no;
    }

    public abstract function calling();
}

class Nokia extends Mobile
{
    //
    public function calling()
    {
        echo 'video and audio calling';
    }
}

//
$object = new Nokia();
echo '<pre>';
print_r($object->calling());

// we can not create object from abstract class
// in above example we have created a abstract method calling for calling 
// jaise kisi mobile model me calling feature to hoga hi to hmne usse abstract declare kr dia h
// jb v mobile class call hogi hme calling function use krna hi padega