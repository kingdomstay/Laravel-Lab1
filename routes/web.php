<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/news', function () {
    $news = [
        ["id" => 1, "title" => "Первая новость", "content" => "Какой-то текст новости."],
        ["id" => 2, "title" => "Вторая новость", "content" => "Какой-то текст новости."]
    ];
    return view('news', ['news' => $news]);
});
Route::get('/news/{id}', function ($id) {
    // Для демонстрации логики приложения дублируется
    $news = [
        ["id" => 1, "title" => "Первая новость", "content" => "Какой-то текст новости."],
        ["id" => 2, "title" => "Вторая новость", "content" => "Какой-то текст новости."]
    ];
    foreach($news as $newsItem){
        if($newsItem['id'] == $id){
            return view('newsItem', ['newsItem' => $newsItem]);
        }
    }
});
Route::get('/about', function () {
    return view('about');
});
