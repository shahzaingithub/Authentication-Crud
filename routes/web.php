<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', function () {
    return view('welcome');
});
// Home route
Route::get('index', [TodoController::class, 'index'])->name('index')->middleware('shah');

// Todo routes
Route::post('todo', [TodoController::class, 'store'])->name('todo.store')->middleware('shah');
Route::get('todo', [TodoController::class, 'showAllData'])->name('todo.showAll')->middleware('shah');

// Delete route
Route::get('delete/{id}', [TodoController::class, 'deleteTodo'])->name('delete.todo')->middleware('shah');

// Update routes
Route::get('update/{id}', [TodoController::class, 'updateGet'])->name('update.todo')->middleware('shah');
Route::post('update/{id}', [TodoController::class, 'updatePost'])->name('update.todo')->middleware('shah');

// Authentication routes
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
