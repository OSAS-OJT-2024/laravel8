<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return 'Home page';
})->name('home.index');

Route::get('/contact', function(){
    return 'Contact';
})->name('contact.index');

Route::get('/posts/{id}', function($id){
    return 'Blog post ' .$id;
})->name('posts.show');


Route::get('/recent-posts/{days_ago?}', function($daysAgo=20){
    return 'Posts from ' . $daysAgo . ' days ago';
})->name('post.recent.index');
