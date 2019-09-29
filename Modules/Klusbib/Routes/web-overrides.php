<?php

/*
|--------------------------------------------------------------------------
| Web Routes Overrides
|--------------------------------------------------------------------------
|
| Here is where you can register web routes to override defaults of application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(
    ['prefix' => 'hardware',
        'middleware' => ['auth']],
    function () {
        // Sample override
        Route::get('audit/due', [
            'as' => 'assets.audit.due',
            'uses' => 'KlusbibController@index'
//            'uses' => 'AssetsController@dueForAudit'
        ]);

        // Sample override referring to controller in main app
//        Route::get('audit/overdue', [
//            'as' => 'assets.audit.overdue',
//            'uses' => '\App\Http\Controllers\AssetsController@overdueForAudit'
//        ]);

    });
