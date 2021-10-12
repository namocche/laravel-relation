<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;

use App\Http\Controllers\BookController;//追記

Route::prefix('book')->group(function () {//以下を追記
    Route::get('/', [BookController::class, 'index']);
    Route::get('/add', [BookController::class, 'add']);
    Route::post('/add', [BookController::class, 'create']);
    Route::get('/relation', [AuthorController::class, 'relate']);
});
// Route::get('/', [AuthorController::class, 'index']);
// Route::get('/find', [AuthorController::class, 'find']);
// Route::post('/find', [AuthorController::class, 'search']);
// Route::get('/author/{author}', [AuthorController::class, 'bind']);
// Route::get('/add', [AuthorController::class, 'add']);
// Route::post('/add', [AuthorController::class, 'create']);
// Route::get('/edit', [AuthorController::class, 'edit']);
// Route::post('/edit', [AuthorController::class, 'update']);
// Route::get('/delete', [AuthorController::class, 'delete']);
// Route::post('/delete', [AuthorController::class, 'remove']);

// Route::get('/', [AuthorController::class, 'index']);
// Route::get('/add', [AuthorController::class, 'add']);
// Route::post('/add', [AuthorController::class, 'create']);
// Route::get('/edit', [AuthorController::class, 'edit']);
// Route::post('/edit', [AuthorController::class, 'update']);
// Route::get('/delete', [AuthorController::class, 'delete']);
// Route::post('/delete', [AuthorController::class, 'remove']);



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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/test', function () {
//     return 'test';
// });

// Route::get('/{text?}', function ($text = "なも") {
//     return $text . "が表示されます";
// });