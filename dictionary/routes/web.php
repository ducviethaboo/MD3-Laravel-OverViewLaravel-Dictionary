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
    return view('dictionary');
});

Route::post('/translate', function (Illuminate\Http\Request $request) {
    $word = $request->word;
    $dictionay = [
        'Hello' => "Xin chào",
        'Book' => "Sách",
        'Dog' => "Chó"
    ];
//    foreach ($dictionay as $key => $value) {
//        if ($word === $key) {
//            return view('translate', compact(['value']));
//        }
//    }
//    return view('error');
   $key =  array_search($word,$dictionay);
   if ($key != false) {
       return view('translate', compact(['key']));
   } else {
       return view('error');
   }
});
