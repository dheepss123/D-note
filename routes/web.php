<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\PricingController;
use \App\Http\Controllers\NoteController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/pricing', [PricingController::class,'pricing'])->name('pricing');

Route::middleware('auth')->group(function (){
    Route::get('/dashboard/note', [NoteController::class,'note'])->name('note');
    Route::post('/note/store', [NoteController::class, 'store'])->name('store');
    Route::get('/mynotes',[NoteController::class, 'ShowNotes'])->name('mynotes');
    Route::delete('/mynotes{notes:id}', [NoteController::class, "destroy"])->name("notes.destroy");
    Route::get('mynotes{notes:id}/edit', [NoteController::class, "edit"])->name("notes.edit");
    //Route::put('/mynotes/{notes:id}', [NoteController::class, "update"])->name("notes.update");
});
Route::get('/dashboard',[DashboardController::class, '__invoke'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
