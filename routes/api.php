<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function (){
   Route::post('create', [UserController::class, 'createUser']);
   Route::put('update', [UserController::class, 'updateUser']);
   Route::get('find-all', [UserController::class, 'findAllUsers']);
   Route::delete('delete/{id}', [UserController::class, 'deleteUser']);
});
