<?php

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::get('/routing', function () {
    return view('routing');
});

Route::get('/clone_boostrap', function () {
    return view('cloneBoostrap');
});
// poin 1
Route::get('/basic_routing', function() {
    return 'Hello World';
});
// poin 2
Route::view('/view_route', 'view_route');
Route::view('/view_route', 'view_route', ['name' => 'Hugo Rayhan Firmansyah']);
// poin 3
Route::get('/controller_route', [RouteController::class, 'index']);

//poin 4
Route::redirect('/', '/routing');

// poin 5
Route::get('/user/{id}', function($id) {
    return "User Id: ".$id;
});
Route::get('/posts/{post}/comments/{comment}', function($postId,
$commentId) {
    return "Post Id: ".$postId.", Comment Id: ".$commentId;
});

// poin 6
Route::get('username/{name?}', function($name = "hugo") {
    return 'Username: '.$name;
});

// praktikum 7
Route::get('/title/{title}', function($title) {
    return "Title: ".$title;
})->where('title', '[A-Za-z]+');

// poin 8
Route::get('/profile/{profileId}', [RouteController::class,
'profile'])->name('profileRouteName');

// poin 9
Route::get('/route_priority/{rpId}', function($rpId) {
    return "This is Route One";
});
Route::get('/route_priority/user', function() {
    return "This is Route 1";
});
Route::get('/route_priority/user', function() {
    return "This is Route 2";
});

// poin 10
Route::fallback(function() {
    return 'This is Fallback Route';
});

// poin 11
Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', function() {
        return "This is admin dashboard";
    })->name('dashboard');
    Route::get('/users', function() {
        return "This is user data on admin page";
    })->name('users');
    Route::get('/items', function() {
        return "This is item data on admin page";
    })->name('items');
});
