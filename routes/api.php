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
Route::group(['namespace' => 'API'], function () {
    //Route::get('/user', function (Request $request) {
    //    return $request->user();
    //})->middleware('auth:api');

/*  Route::group(['prefix' => 'test'], function () {
        Route::post('vote/{provider}/pingback', function (Request $request, $provider) {
            return "Provider: {$provider}<br />
            Decrypted Username: ".decrypt($request->input('username'));
        });

        Route::get('vote/{provider}/pingback', function () {
            return "<!DOCTYPE html><html><body><form action=\"\" method=\"post\">
                    <input name=\"username\" type=\"text\" value=\"".encrypt('snopboy')."\">
                    <button type=\"submit\">Send</button></form></body></html>";
        });
    });

    Route::post('vote/{provider}/pingback', 'VoteController@pingback')->name('api.vote.pingback');
    Route::post('donate/{provider}/pingback', 'DonateController@pingback')->name('api.donate.pingback');
*/
});
