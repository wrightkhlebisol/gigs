<?php

use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group([
    'middleware'    => 'api',
], function () {
    Route::get('/', function () {
        return response()->json(['forbidden' => 'Absent or invalid token specified'], 403);
    });

    Route::post('/register', 'AuthController@register');

    Route::post('/login', 'AuthController@login')->name('login');

    Route::post('/logout', 'AuthController@logout');

    Route::get('/auth', 'AuthController@getAuthUser');

    Route::get('/courses', 'CourseController@index');

    Route::get('/courses/job/create50', 'CourseController@create50Courses');

    Route::get('courses/export/excel',  'CourseController@exportExcel');

    Route::get('courses/export/csv',  'CourseController@exportCSV');
});
