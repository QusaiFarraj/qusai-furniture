<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function (){

    Route::group(['prefix' => 'product', 'name' => 'product.'], function (){
        Route::get('/all', 'ProductController@list')->name('list');
        Route::get('/get/{product}', 'ProductController@get')->name('get');

        Route::post('/create', 'ProductController@create')->name('create');
        Route::post('/update/{product}', 'ProductController@update')->name('update');
        Route::post('/delete/{product}', 'ProductController@delete')->name('delete');

        // options
        Route::group(['prefix' => 'option', 'name' => 'option.'], function (){
            Route::get('/{product}/all', 'OptionController@list')->name('list');
            Route::get('/{product}/get/{option}', 'OptionController@get')->name('get');

            Route::post('/{product}/create', 'OptionController@create')->name('create');
            Route::post('/{product}/update/{option}', 'OptionController@update')->name('update');
            Route::post('/{product}/delete/{option}', 'OptionController@delete')->name('delete');

            // option values
            Route::group(['prefix' => 'optionvalue', 'name' => 'optionvalue.'], function (){
                Route::get('/{product}/{option}/all', 'OptionValuesController@list')->name('list');
                Route::get('/{product}/{option}/get/{optionvalue}', 'OptionValuesController@get')->name('get');

                Route::post('/{product}/{option}/create', 'OptionValuesController@create')->name('create');
                Route::post('/{product}/{option}/update/{optionvalue}', 'OptionValuesController@update')->name('update');
                Route::post('/{product}/{option}/delete/{optionvalue}', 'OptionValuesController@delete')->name('delete');
            });
        });
    });
});
