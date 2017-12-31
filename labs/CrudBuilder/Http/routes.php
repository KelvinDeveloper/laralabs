<?php

Route::get('{model}/{id?}', 'CodeBuilder\Http\Controllers\CrudBuilder@index');
Route::post('{model}/save', 'CodeBuilder\Http\Controllers\CrudBuilder@save');
Route::post('{model}/save/{id}', 'CodeBuilder\Http\Controllers\CrudBuilder@save');
Route::delete('{model}/delete/{id}', 'CodeBuilder\Http\Controllers\CrudBuilder@delete');