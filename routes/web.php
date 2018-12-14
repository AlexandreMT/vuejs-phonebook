<?php

Route::get('/', function () {
    return 'Nada aqui';
});

Route::get('/phonebook/{name}', function (){
    return redirect('/');
})->where('name', '[A-Za-z]+');

Route::resource('phonebook', 'PhonebookController');
Route::get('getData', 'PhonebookController@getData');
