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


use Symfony\Component\Yaml\Yaml;

Route::get('/', function () {
    return view('welcome');
});

Route::get('files', function() {
    $path = base_path();
    if ($handle = opendir($path)) {
        // echo "Directory handle: $handle\n";
        // echo "Files:\n";
        while (false !== ($file = readdir($handle))) {
            // echo "$file\n";
            foo("locale.yaml", $file, $path);
            foo("size.yaml", $file, $path);
            foo("uo2.yaml", $file, $path);
        }
    }
});

function foo($f, $file, $path) {
    if ($file == "$f") {
        echo "!!!!!!!!!";
        $fp = fopen("$path/$file", "r");
        while ($line = fgets($fp)) {
            echo "<br />$line<br />";
        }
    }
};
Route::group(array('prefix' => 'api/v1/place'), function() {
    Route::post('lookup', function() {
        $path = base_path();
        $data = file_get_contents("$path/locale.yaml");
        $yaml = Yaml::parse($data);
        return json_encode($yaml);
    });
    Route::post('kanto', function() {
        $path = base_path();
        $data = file_get_contents("$path/uo/kanto_uo.yaml");
        $yaml = Yaml::parse($data);
        return json_encode($yaml);
    });
    Route::post('kansai', function() {
        $path = base_path();
        $data = file_get_contents("$path/uo/kansai_uo.yaml");
        $yaml = Yaml::parse($data);
        return json_encode($yaml);
    });
    Route::post('tohoku', function() {

    });
    Route::post('shimokita', function() {

    });
    Route::post('hokuriku', function() {

    });
    Route::post('toyama', function() {

    });
    Route::post('tango', function() {

    });
    Route::post('kishu', function() {

    });
    Route::post('sanin', function() {

    });
    Route::post('shikoku', function() {

    });
    Route::post('kyushu', function() {

    });
});

Route::group(array('prefix' => 'api/v1/size'), function() {
    Route::post('lookup', function() {
        $path = base_path();
        $data = file_get_contents("$path/size.yaml");
        $data = json_encode("$data");
        return $data;
    });
});

Route::group(array('prefix' => 'api/v1/uo'), function() {
    Route::post('lookup', function() {
        $path = base_path();
        $data = file_get_contents("$path/uo2.yaml");
        $data = json_encode("$data");
        return $data;
    });
});

// Route::post('kansai', function() {
//     return Response::json(array('name' => 'Steve', 'state' => 'CA'));
// });

// Route::get('getparameter', function() {
    //     echo 'Hello ' . htmlspecialchars($_GET["name"]);
    // });

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