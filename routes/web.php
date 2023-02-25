<?php

use App\Models\Dog;
use App\Http\Controllers\DogController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DogController::class, 'index']);

Route::get('/create', function(){
    return view('dogs.create');
});
Route::post('/create', function(){
    $dog = new Dog();
    $dog->name = request('name');
    $dog->age = request('age');
    $dog->sex = request('sex');
    $dog->breed = request('breed');
    $dog->colour = request('colour');
    $dog->size = request('size');
    $dog->save();
});