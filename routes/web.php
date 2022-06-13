<?php

use App\Http\Controllers\VocabularyController;
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
    return view('index');
})->name('index');

Route::get('/vocabulary', function () {
    return view('vocabulary');
})->name('vocabulary');

Route::get('/vocabulary/suggest_topic', function () {
    return view('suggest_topic');
})->name('suggest_topic');

Route::get('/vocabulary/{topic}', [VocabularyController::class, 'show_array'], 
function ($topic) {})->name('vocabulary_info');

Route::get('/vocabulary/{topic}/search', [VocabularyController::class, 'search'], 
function ($topic) {})->name('search');

Route::post('/vocabulary/suggest_topic/your_suggestion', [VocabularyController::class, 'suggest'], 
function ($topic) {})->name('user_suggestion');

Route::get('/grammar', function () {
    return view('grammar');
})->name('grammar');

Route::get('/tests', function () {
    return view('tests');
})->name('tests');
