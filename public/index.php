<?php

require_once '../vendor/autoload.php';
require_once '../config/database.php';

use Nikita44\Source\Models\Category;
use Nikita44\Source\Models\Post;
use Nikita44\Source\Models\Tag;

//#1
/*for($i = 1; $i < 6; $i++) {
    $category = new Category();
    $category->title = 'Category ' . $i;
    $category->slug = 'Some text';
    $category->save();
}*/

//#2
/*$category = Category::find(2);
$category->slug = 'Updated';
$category->save();*/

//#3
/*$category = Category::find(3);
$category->delete();*/

//#4
/*$categories = Category::all();
foreach($categories as $category){
    $rand = rand(2, 4);
    for($i = 1; $i <= $rand; $i++){
        $post = new Post();
        $post->title = 'Post #' . $i . ' (' . $category->title . ') ';
        $post->slug = 'Some post text';
        $post->body = 'Some body text';
        $post->category_id = $category->id;
        $post->save();
    }
}*/

//#5
/*$post = Post::find(22);
$post->title = 'Post #3 (Updated)';
$post->category_id = 4;
$post->save();*/

//#6
/*$post = Post::find(22);
$post->delete();*/

//#7
/*for($i = 1; $i <= 10; $i++) {
    $tag = new Tag();
    $tag->title = 'Tag ' . $i;
    $tag->slug = 'Some text';
    $tag->save();
}*/

//#8
$posts = Post::all();
foreach($posts as $post){
    for($i = 1; $i < 4; $i++) {
        $post->tags()->attach(rand(1, 10));
    }
}