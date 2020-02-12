<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('role', 'RoleController@index');
Route::post('role', 'RoleController@store');
Route::put('/role/{id}', 'RoleController@update');
Route::delete('/role/{id}', 'RoleController@delete');
Route::get('/role/trash', 'RoleController@trash');
Route::get('/role/restore/{id}', 'RoleController@restore');
Route::get('/role/restoreall', 'RoleController@restoreall');
Route::delete('/role/hapuspermanen/{id}', 'RoleController@hapuspermanen');
Route::delete('/role/hapusall', 'RoleController@hapusall');