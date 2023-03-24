<?php

use App\Http\Controllers\Plando;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get("/itemlist", function()
{
    return plando::A_items();
});

Route::patch("/itemlist", function(Request $request)
{
    return plando::A_updateItem($request->NewItem, $request->OldItem, $request->Name);
});

