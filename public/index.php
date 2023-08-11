<?php

require_once '../vendor/autoload.php';

class A
{
    public $a;
    public function setA($value){
        $this->a = $value;
    }
}

class B extends A
{
    public $b;
}

$model = new A();
$model2 = new B();
$model2->setA(2);
var_dump($model2->a);