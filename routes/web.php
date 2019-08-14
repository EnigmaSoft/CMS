<?php

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

//Auth::routes();

# Authentication Routes
Route::group(['namespace' => 'Auth'], function () {
    # Login Routes
    Route::get('account/signin', 'LoginController@showLoginForm')->name('login');
    Route::post('account/signin', 'LoginController@login');

    # Logout Routes
    Route::post('logout', 'LoginController@logout')->name('logout');

    # Registration Routes
    Route::get('account/signup', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('account/signup', 'RegisterController@register');

    # Password Reset Request Routes
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('resetpw');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('postEmailAddress');

    # Password Reset Form Routes
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.reset');
});

// Pages Routes
Route::group(['namespace' => 'Pages'], function () {
    Route::get('/', 'HomeController@show')->name('home');
    Route::get('downloads', 'DownloadController@show')->name('downloads');
    
    # Ranking Routes
    Route::get('rank', 'RankingsController@sendRedirect')->name('rankRedirect');
    Route::get('ranking', 'RankingsController@sendRedirect')->name('rankingRedirect');
    Route::get('rankings', 'RankingsController@sendRedirect')->name('rankingsRedirect');
    Route::get('rankings/overall', 'RankingsController@show')->name('rankings');
    Route::get('rankings/job/{class?}', 'RankingsController@showByJob')->name('jobRankings');
    Route::get('rankings/fame', 'RankingsController@showByFame')->name('fameRankings');
    Route::get('rankings/guild', 'RankingsController@showByGuild')->name('guildRankings'); # WIP

    # Vote Routes
    Route::get('vote', 'VoteController@show')->name('vote'); # WIP
    Route::post('vote', 'VoteController@show'); # WIP

    # Donate Routes
    Route::get('donate', 'DonateController@show')->name('donate'); # WIP
    Route::post('donate', 'DonateController@show'); # WIP

    Route::get('help', 'HomeController@show')->name('help'); # WIP
    Route::get('guides', 'HomeController@show')->name('guides'); # WIP
    Route::get('info', 'HomeController@show')->name('info'); # WIP

    // News Routes
    Route::get('news', 'NewsController@sendRedirect')->name('newsRedirect');
    Route::get('news/all', 'NewsController@showIndex')->name('news');
    Route::get('news/general', 'NewsController@showGeneral')->name('news.general');
    Route::get('news/update', 'NewsController@showUpdate')->name('news.update');
    Route::get('news/notice', 'NewsController@showNotice')->name('news.notice');
    Route::get('news/event', 'NewsController@showEvent')->name('news.event');
    Route::get('news/maintenance', 'NewsController@showMaintenance')->name('news.maintenance');
    Route::get('news/promotion', 'NewsController@showPromotion')->name('news.promotion');
    Route::get('article/{slug}', 'NewsController@showArticle')->name('article');

    # Lockscreen Routes
    Route::group(['middleware' => ['auth', 'GameMaster']], function () {
        Route::get('lockscreen', 'LockController@show')->name('lockscreen');
        Route::post('lockscreen', 'LockController@confirm');
    });
});

// User Routes
Route::group(['middleware' => 'auth', 'namespace' => 'User', 'prefix' => 'dashboard'], function () {
    Route::get('/', 'DashboardController@show')->name('user.dashboard');

    Route::group(['prefix' => 'character'], function () {
        //Route::get('update', 'CharacterController@show')->name('user.main');
        Route::post('update', 'CharacterController@update')->name('user.main');

        Route::post('remove', 'CharacterController@destroy')->name('user.remove'); # WIP

        Route::get('reset', 'CharacterController@reset')->name('user.main.reset');
    });

    Route::get('settings', 'SettingsController@edit')->name('user.settings');
    Route::post('settings', 'SettingsController@update');
});

// GM Routes
Route::group(['middleware' => ['auth', 'GameMaster', 'Lock'], 'namespace' => 'GameMaster', 'prefix' => 'gm'], function () {
    Route::get('dashboard', 'DashboardController@show')->name('gm.dashboard');

    Route::group(['prefix' => 'news'], function () {
        Route::get('/', 'NewsController@index')->name('gm.news.index');
        Route::group(['prefix' => '{id}'], function () {
            Route::get('edit', 'NewsController@edit')->name('gm.news.edit'); # WIP
            Route::get('delete', 'NewsController@destroy')->name('gm.news.delete');
        });
        Route::get('create', 'NewsController@create')->name('gm.news.create'); # WIP
    });
});

// Admin Routes
Route::group(['middleware' => ['auth', 'Admin'], /*'namespace' => 'Admin',*/ 'prefix' => 'admin'], function () {
    Route::get('dashboard', 'GameMaster\DashboardController@show')->name('admin.dashboard'); # WIP
    
    /*Route::group(['prefix' => 'informant'], function () {
        Route::get('/', 'InformantController@index')->name('admin.informant.index'); # WIP
        Route::group(['prefix' => '{id}'], function () { # WIP
            Route::get('edit', 'InformantController@edit')->name('admin.informant.edit'); # WIP
            Route::get('delete', 'InformantController@destroy')->name('admin.informant.delete'); # WIP
        });
    });*/
});

// SuperAdmin Routes
Route::group(['middleware' => ['auth', 'SuperAdmin'], 'namespace' => 'SuperAdmin', 'prefix' => 'sadmin'], function () {
//  Route::get('dashboard', 'DashboardController@show')->name('sadmin.dashboard'); # WIP
});

// Not Found
Route::get('{any?}', 'Errors\NotFoundController@render')->where(['any' => '.+'])->name('notfound');