<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

route::middleware('auth')->group(function(){


route::get('/recipe', '\App\Http\Controllers\Recipe\IndexController@a')
->name('recipe.index');
route::post('/recipe/create', '\App\Http\Controllers\Recipe\CreateController@b')
->name('recipe.create');
route::get('/recipe/update/{recipeId}', '\App\Http\Controllers\Recipe\Update\IndexController@c')
->name('recipe.update.index');
route::put('/recipe/update/{recipeId}', '\App\Http\Controllers\Recipe\Update\PutController@d')
->name('recipe.update.put');
route::delete('/recipe/delete/{recipeId}', '\App\Http\Controllers\Recipe\DeleteController@e')
->name('recipe.delete');


});
require __DIR__.'/auth.php';
