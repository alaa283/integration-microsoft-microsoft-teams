<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GraphController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('microsoft_teams');
});

// Route::get('login', function() {
//     $authUrl = 'https://login.microsoftonline.com/common/oauth2/v2.0/authorize';
//     return redirect()->away($authUrl);
//  });



Route::get('/_microsoft', [GraphController::class, '_microsoft'])->name("_microsoft");

Route::get('/_microsoft_teams', [GraphController::class, '_microsoft_teams'])->name("_microsoft_teams");

