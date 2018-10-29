<?php



Auth::routes();

//----------clientes---------------- 
Route::resource('/clientes','ClienteController');
Route::get('/cliente-autocomplete', 'ClienteController@autocomplete');
Route::get('/cliente-add-processo/{id}', 'ClienteController@formAddClienteExistente');

Route::get('/numeros-form/{id}', 'NumeroController@create');