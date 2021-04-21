<?php

use App\Models\User;
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

//Crea un usuario

Route::get('/create', function () {
    $users = User::create([
        'name' => 'Diego',
        'email' => 'Diego@gmail.com',
        'password' => 'password',
        'is_admin' => false
    ]);
    return ($users);
});

//Lista a todos los usuarios

Route::get('/list', function () {
    $users = User::all();
    return($users);
});

//Muestra un usuario por ID

Route::get('/show', function () {
    $users = User::find(3);
    return ($users);
});

//Actualizar un usuario por ID

Route::get('/update', function () {
    $user = User::find(7);
    $user->update([
        'name' => 'Marta'
    ]);
    return 'aqui actualizas un usuario por ID';
});

//Eliminar usuario por ID

Route::get('/delete', function () {
    $user = User::find(6);
    $user->delete([]);
    return 'aqui eliminas un usuario por ID';
});
