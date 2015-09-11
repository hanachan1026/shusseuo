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

// App::abort(400, 'BAD');
// App::abort(500, 'ERROR');
// // Unauthorized
// App::abort(401, 'BAD');
// // Forbidden
// App::abort(403, 'BAD');
// // Internal Server Error
// App::abort(500, 'ERROR');
// // Not implemented
// App::abort(501, 'ERROR');

Route::group(array('prefix' => 'api/v1/place'), function() {
    Route::get('kanto', function() {
        return array(
            "Wakashi or Wakanago",
            "Inada",
            "Warasa",
            "Buri"
        );
    });
    Route::post('kansai', function() {
        echo csrf_field();
        return Response::json(array('name' => 'Steve', 'state' => 'CA'));
        // return response()
        //         ->json(
        //             ['name' => 'Abigail', 'state' => 'CA']
        //         );
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
Route::post('foo/bar', function() {
    return 'hello';
});
// Route::group(array('prefix' => 'api/v1/name'), function() {
//     return array(
//         "1",
//         "2"
//     );
// });
