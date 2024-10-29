<?php

use Illuminate\Http\Request;
use App\Routes;
use App\Http\Controllers\userController;

Route::post('/usuario', [userController::class, 'index']);

Route::post('/login', function(){
    return 'logueandose';
});

Route::post('/signup', function(){
    return 'accediendo';
});

Route::post('/forgot', function(){
    return 'olvidado';
});

Route::get('/products/get', function(){
    return 'obteniendo producto productos normales o delivery';
});

Route::get('/categories/get', function(){
    return 'obteniendo categorias productos normales o delivery';
});

Route::post('/search/', function(){
    return 'buscando producto';
});

Route::post('/setOrder', function(){
    return 'realizando pedido';
});

Route::get('history/get', function(){
    return 'obteniendo historial de pedidos';
});

Route::post('usuario/edit', function(){
    return 'editar datos usuario';
});

Route::post('usuario/changePassword', function(){
    return 'editando datos usuario';
});