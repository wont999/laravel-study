<?php

use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});

// Первый дополнительный маршрут
Route::get('/test', function () {
    return 'Привет, мир!';
});

// Пример с изменением результата запроса
Route::get('/example', function () {
    return 'Это пример маршрута в Laravel';
});

// Новый маршрут с использованием get-запроса
Route::get('/laravel', function () {
    return 'Изучаем Laravel - мощный PHP фреймворк';
});

// Маршруты, связанные с контроллером MainController
Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/main/test', [MainController::class, 'test']);

Route::group(['namespace' => '\App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/post', 'IndexController')->name('admin.post.index');
    });
});

Route::group(['namespace' => 'App\Http\Controllers\Post'], function () {
    Route::get('/posts', IndexController::class)->name('post.index');
    Route::get('/posts/create', CreateController::class)->name('post.create');
    Route::post('/posts', StoreController::class)->name('post.store');
    Route::get('/posts/{post}', ShowController::class)->name('post.show');
    Route::get('/posts/{post}/edit', EditController::class)->name('post.edit');
    Route::patch('/posts/{post}', UpdateController::class)->name('post.update');
    Route::delete('/posts/{post}', DestroyController::class)->name('post.delete');
});


//Route::get('/posts', [PostController::class, 'index'])->name('post.index');
//Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
//Route::post('/posts', [PostController::class, 'store'])->name('post.store');
//Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
//Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
//Route::patch('/posts/{post}', [PostController::class, 'update'])->name('post.update');
//Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.delete');
