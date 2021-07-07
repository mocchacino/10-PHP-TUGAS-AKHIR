<?php

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
    return view('welcome');
});

use App\Http\Controllers\Orang;

Route::get('/getData', [Orang::class, 'getData']);
// Route::get('/getData','Orang@getData' );
// Route::post('/pushData', [Orang::class, 'store']);
// Route::post('/setData', [Orang::class, 'update']);
// Route::get('/delete{id}', [Orang::class, 'hapus']);
// Route::get('/getDetail{id}', [Orang::class, 'getDetail']);
