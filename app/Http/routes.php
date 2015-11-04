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


use App\Http\Controllers\WelcomeController;
use Symfony\Component\Yaml\Yaml;

//App::abort(404, 'Page not found');

Route::get('/', 'WelcomeController@index');
Route::get('/apiClientPage', 'WelcomeController@apiClientPage');
Route::get('/results', 'WelcomeController@results');

function parseYaml($hoge)
{
    $index = 1;
    $getContentsIfExists = function ($index, $hoge) {
        $path = base_path() . $hoge . $index . ".yaml";
        if (file_exists($path)) {
            return file_get_contents($path);
        } else {
            return false;
        }
    };

    $yaml = [];
    while ($data = $getContentsIfExists($index, $hoge)) {
        $yaml[] = (object)['promotionList' => Yaml::parse($data)];
        $index++;
    }

    return $yaml;
};

Route::group(['prefix' => 'api/v1/place'], function () {
    Route::post('lookup', function () {
        $path = base_path();
        $data = file_get_contents("$path/locale.yaml");
        $yaml = Yaml::parse($data);
        return json_encode($yaml);
    });
    Route::post('kanto', function () {
        $yaml = parseYaml("/resources/lang/kanto/kanto_uo");
        return json_encode($yaml);
    });

    Route::post('kansai', function () {
        $yaml = parseYaml("/resources/lang/kansai/kansai_uo");
        return json_encode($yaml);
    });
    Route::post('tohoku', function () {
        $yaml = parseYaml("/resources/lang/tohoku/tohoku_uo");
        return json_encode($yaml);
    });
    Route::post('shimokita', function () {
        $yaml = parseYaml("/resources/lang/shimokita/shimokita_uo");
        return json_encode($yaml);
    });
    Route::post('hokuriku', function () {
        $yaml = parseYaml("/resources/lang/hokuriku/hokuriku_uo");
        return json_encode($yaml);
    });
    Route::post('toyama', function () {
        $yaml = parseYaml("/resources/lang/toyama/toyama_uo");
        return json_encode($yaml);
    });
    Route::post('tango', function () {
        $yaml = parseYaml("/resources/lang/tango/tango_uo");
        return json_encode($yaml);
    });
    Route::post('kishu', function () {
        $yaml = parseYaml("/resources/lang/kishu/kishu_uo");
        return json_encode($yaml);
    });
    Route::post('sanin', function () {
        $yaml = parseYaml("/resources/lang/sanin/sanin_uo");
        return json_encode($yaml);
    });
    Route::post('shikoku', function () {
        $yaml = parseYaml("/resources/lang/shikoku/shikoku_uo");
        return json_encode($yaml);
    });
    Route::post('kyushu', function () {
        $yaml = parseYaml("/resources/lang/kyushu/kyushu_uo");
        return json_encode($yaml);
    });
});

Route::group(['prefix' => 'api/v1/size'], function () {
    Route::post('lookup', function () {
        $path = base_path();
        $data = file_get_contents("$path/size.yaml");
        $data = json_encode("$data");
        return $data;
    });
});

Route::group(['prefix' => 'api/v1/uo'], function () {
    Route::post('lookup', function () {
        $path = base_path();
        $data = file_get_contents("$path/uo2.yaml");
        $data = json_encode("$data");
        return $data;
    });
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