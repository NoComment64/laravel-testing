<?php

use Illuminate\Support\Facades\Route;

Route::post('/', function (Request $request) {
    if($request->isJson()) {
        return $request->input('name');
    }
    return $request->role;
});
Route::get('/person/{id}', function(Request $request, int $id) {
    return view ('person', ['data'=>$request->all(), 'id'=>$id]);
});