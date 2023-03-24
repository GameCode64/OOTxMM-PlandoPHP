<?php

use App\Http\Controllers\Plando;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return Plando::Index();
});

Route::post('/', function () {
    return response()->streamDownload(function(){
        echo json_encode((Plando::Generate()), JSON_PRETTY_PRINT);
    }, "plando.json");
});

Route::get('/reset', function () {
    return Plando::ResetItems();
});
