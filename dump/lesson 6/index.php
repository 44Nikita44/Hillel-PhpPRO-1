<?php

require_once '../vendor/autoload.php';
require_once '../config/database.php';

/*$user = new User;
$user->username = 'test user 2';
$user->email = 'test2@test.com';
$user->password = password_hash('test2', PASSWORD_BCRYPT);
$user->save();*/

//$user->delete();

/*$users = User::all();*/

/*foreach ($user->orders as $order){
    echo $order->title.'<br>';
}*/

$user = User::find(2);

//#1
/*$order = new Order();
$order->title = 'order 3';
$order->price = 228;
$order->user_id = $user->id;
$order->save();*/

//#2
/*$order = new Order();
$order->title = 'order 4';
$order->price = 1337;
$user->orders()->save($order);*/

$order = Order::find(2);
$order->products()->sync([1, 2, 3]);
//$order->products()->attach([1]);
/*foreach($orders as $order) {
    echo $order->title. ': <br>';
    foreach ($order->products as $product){
        echo $product->name.'<br>';
    }
}*/

/*echo '<pre>';
print_r($order);
echo '</pre>';*/