<?php

require_once 'autoload.php';

/*
    РУЧНОЙ АВТОЛОАД
    function autoload($className){
    echo $className.PHP_EOL;
    $filePath = __DIR__.'/app/'.str_replace('\\', '/', $className).'.php';
    require_once $filePath;
    echo $filePath.PHP_EOL;
}

spl_autoload_register('autoload');*/

/*
ТЕСТ PSR-4 АВТОЛОАДА
$model = new Nikita44\Application\Http\Controllers\UserController();
$model->action();

$product = new \Nikita44\Source\Models\Product();
$product->action();

$base = new \Nikita44\Source\Base();
$base->action();*/

$hrivnya = new \Nikita44\Source\Currency('UAH');
$euro = new \Nikita44\Source\Currency('EUR');
//var_dump(\Nikita44\Source\Currency::equals($hrivnya, $euro));

$money1 = new \Nikita44\Source\Money(1000, $hrivnya);
$money2 = new \Nikita44\Source\Money(1001, $hrivnya);
//var_dump(\Nikita44\Source\Money::equals($money1, $money2));
var_dump(\Nikita44\Source\Money::add($money1, $money2));
/*var_dump($money1->getAmount());
var_dump($money1->getCurrency());*/



