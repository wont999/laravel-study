<?php

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


Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::post('/posts', [PostController::class, 'store'])->name('post.store');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');
Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('post.edit');
Route::patch('/posts/{post}', [PostController::class, 'update'])->name('post.update');

Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('post.delete');
