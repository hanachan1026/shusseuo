<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('names/{id}', function($id) {
//     $names = array(
//         1 => "John",
//         2 => "Mary",
//         3 => "Steven"
//     );
//     return array($id => $names[$id]);
// });
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Route::resource('names', ['middleware' => 'auth.basic', 'NameController']);

Route::get('home', function () {
    return view('welcome');
});

Route::group(array('prefix' => 'api/v1'), function() {
    Route::get('kanto', function() {
        return array(
            "Wakashi or Wakanago",
            "Inada",
            "Warasa",
            "Buri"
        );
    });
    Route::get('kansai', function() {
        return array(
            "Wakana or Tsubasu",
            "Hamachi",
            "Mejiro or Inada",
            "Buri"
        );
    });
    Route::get('hokuriku', function() {
        return array(
            "Tsubaeri",
            "Kozukura",
            "Fukuragi",
            "Aoburi",
            "Hanajiro",
            "Buri"
        );
    });
    Route::get('sanin', function() {
        return array(
            "Shojigo",
            "Wakana",
            "Mejiro",
            "Hamachi",
            "Buri"
        );
    });
    Route::get('kyushu', function() {
        return array(
            "Wakanago",
            "Yazu",
            "Hamachi",
            "Mejiro",
            "Buri",
            "Ouo"
        );
    });
});
