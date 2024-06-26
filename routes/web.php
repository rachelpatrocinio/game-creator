<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TypeController;

use App\Models\Character;
use App\Models\Item;
use App\Models\Type;

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
    $characters = Character::all();
    $items = Item::all();
    $types = Type::all();
    return view('home', compact('characters', 'items', 'types'));
});

Route::middleware('auth')->group(function () {

    Route::resource('items', ItemController::class);
    Route::resource('characters', CharacterController::class);
    Route::resource('types', TypeController::class)->only(['index','show']);

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
