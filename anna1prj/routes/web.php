<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return 'головна сторінка сайту';
});

Route::get('/post', function() {
    return 'список постів';
});

/*
Route::get('/post/{id}', function ($id) {
    return 'пост ' . $id;
});
*/

Route::get('/test',function () {
    return 'Слава Україні';
});

Route::get('/dir/test',function () {
    return 'Героям Слава';
});

/*
Route::get('/user/{name}', function ($name) {
    return "ім'я " . $name;
});
*/

Route::get('/post/{catId}/{postId}', function ($catId,$postId) {
    return $catId .' '. $postId;
});

/*
Route::get('/user/{surnameId}/{nameId}', function ($surnameId,$nameId) {
    return $surnameId .' '. $nameId;
});
*/

Route::get('/city/{city?}', function ($city = 'Kyiv') {
    return $city;
});


Route::get('/user/{id}', function ($id) {
    return 'користувач' . ' ' .$id;
})->whereNumber('id');


Route::get('/user/{myUserId}/{myUserName}', function ($myUserId,$myUserName) {
    return 'користувач' . ' ' .$myUserId . ' ' .$myUserName;
})->where([ 'myUserId' => '[0-9]+', 'myUserName' => '[a-z]{2,}' ]);


Route::get('/post/{date}', function ($date) {
    return 'дата' . ' ' .$date;
})->where([ 'date' => '[0-9]{4}-[0-9]{2}-[0-9]{2}' ]);

Route::get('/{yearId}/{monthId}/{dayId} ', function ($yearId,$monthId,$dayId) {
    return $yearId .' '. $monthId . ' ' .$dayId;
})->where([ 'yearId' => '[0-9]{4}', 'monthId' => '[0-9]{2}', 'dayId' => '[0-9]{2}' ]);

Route::middleware(['fist','second'])->group(function(){
    Route::get('/admin/users',function ($id) {
        return 'all';
    });
    Route::get('/admin/user/{id}',function ($id) {
        return $id;
    });
});
