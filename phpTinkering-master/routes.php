<?php
return [
    // Existing routes
    '/' => 'App\Controllers\FilmController@index',
    '/films' => 'App\Controllers\FilmController@index',
    '/create' => 'App\Controllers\FilmController@create',
    '/store' => 'App\Controllers\FilmController@store',
    '/edit' => 'App\Controllers\FilmController@edit',
    '/update' => 'App\Controllers\FilmController@update',
    '/delete' => 'App\Controllers\FilmController@delete',

    // New routes for Futbolista
    '/futbolistes' => 'App\Controllers\FutbolistaController@index',
    '/create-futbolista' => 'App\Controllers\FutbolistaController@create',
    '/store-futbolista' => 'App\Controllers\FutbolistaController@store',
    '/edit-futbolista' => 'App\Controllers\FutbolistaController@edit',
    '/update-futbolista' => 'App\Controllers\FutbolistaController@update',
    '/delete-futbolista' => 'App\Controllers\FutbolistaController@delete',
];