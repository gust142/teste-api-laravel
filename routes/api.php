<?php

Route::post('conta', 'api\ContaController@store');
Route::get('conta/{id}','api\ContaController@show');
Route::post('transacao','api\ContaController@transacao');
Route::get('transacao/{id}','api\ContaController@listagem');
