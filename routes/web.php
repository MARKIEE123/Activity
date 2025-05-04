<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StudentsController::class, 'index'])->name('std.index');
Route::post('/create-student', [StudentsController::class, 'newStudent'])->name('std.create');
Route::delete('/del-studs/{id}', [StudentsController::class, 'destroy'])->name('std.destroy');
Route::put('/edit-studs/{id}', [StudentsController::class, 'edit'])->name('std.edit');