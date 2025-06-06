<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//Route::get('welcome',[\App\Http\Controllers\AliController::class,'first']);
//Route::post('second',[\App\Http\Controllers\AliController::class,'second'])->name('form');
Route::middleware('auth')->group(function () {
    Route::get('get-my-info', [\App\Http\Controllers\AliController::class, 'getMyinfo'])->name('get-my');
    Route::get('get-all-info', [\App\Http\Controllers\AliController::class, 'getAllInfo'])->name('all');
    Route::get('create-my-info', [\App\Http\Controllers\AliController::class, 'creatMyinfo'])->name('create');
    Route::post('store-my-info', [\App\Http\Controllers\AliController::class, 'storeMyinfo'])->name('store.my.info');
    Route::get('delete-info/{id}', [\App\Http\Controllers\AliController::class, 'deleteInfo'])->name('delete.info');
    Route::get('completed/{id}', [\App\Http\Controllers\AliController::class, 'ifComplete'])->name('complete.info');
//Route::resource('types',\App\Http\Controllers\TypeController::class);
    Route::get('types', [\App\Http\Controllers\TypeController::class, 'index'])->name('types.all');
    Route::view('create-type', 'types.store')->name('types.create');
    Route::post('store-type', [\App\Http\Controllers\TypeController::class, 'store'])->name('types.store');
    Route::get('view-type/{id}', [\App\Http\Controllers\TypeController::class, 'show'])->name('types.show');
    Route::get('destroy-type/{id}', [\App\Http\Controllers\TypeController::class, 'destroy'])->name('types.destroy');
    Route::get('show-news',[\App\Http\Controllers\AliController::class,'NewTasks'])->name('new-task');
    //Route::get('show-new',[\App\Http\Controllers\AliController::class,'createTasknew'])->name('new-tasks');
    Route::get('show-ends',[\App\Http\Controllers\AliController::class,'createTaskend'])->name('end-tasks');
//});
    //  Route::get('show-finish',[\App\Http\Controllers\AliController::class,'getAllInfo'])->name('show');
//    Route::get('/', function () {
//        if (auth()->check())
//            return redirect()->route('all');
//        else
//            return redirect()->route('login');});

//});

//Route::get('/dashboard', function () {
//    return route('login');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/', function () {
//    return redirect()->route('login');});

    //return view('welcome');
});
    Route::get('/', function () {
        if (auth()->check())
            return redirect()->route('create');
        else
            return redirect()->route('login');});
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
require __DIR__.'/auth.php';

