<?php


Route::get('/', 'IndexController@getIndex');


Route::get('login', 'LoginController@getLogin');
Route::post('login', 'LoginController@postLogin');


Route::group(['middleware' => ['auth.admin'], 'prefix' => 'adminka'], function () {
    Route::get('/', 'Admin\IndexController@getIndex');

    //investigation
    Route::get('/investigation', 'Admin\InvestigationController@getIndex');
    Route::post('/investigation', 'Admin\InvestigationController@postItem');
    Route::any('/investigation/delete/{id}', 'Admin\InvestigationController@getDelete');

    //investigation
    Route::get('/top-manager', 'Admin\TopManagerController@getIndex');
    Route::post('/top-manager', 'Admin\TopManagerController@postItem');
    Route::any('/top-manager/delete/{id}', 'Admin\TopManagerController@getDelete');

    // organization routes
    Route::group(['prefix' => 'organ'], function () {
        Route::get('/organ', 'Admin\Organ\OrganController@getIndex');
        Route::post('/organ', 'Admin\Organ\OrganController@postItem');
        Route::any('/organ/delete/{id}', 'Admin\Organ\OrganController@getDelete');

        
    });

    //bot routes
    Route::group(['prefix' => 'bot'], function () {
        // bot category
        Route::get('/cat', 'Admin\Bot\BotCatController@getIndex');
        Route::post('/cat', 'Admin\Bot\BotCatController@postItem');
        Route::post('/cat/decision', 'Admin\Bot\BotCatController@postDecision');
        Route::post('/cat/alert', 'Admin\Bot\BotCatController@postAlert');
        Route::any('/cat/delete/{id}', 'Admin\Bot\BotCatController@getDelete');

        // bot page tip
        Route::get('/page-tip', 'Admin\Bot\BotPageTipController@getIndex');
        Route::post('/page-tip', 'Admin\Bot\BotPageTipController@postItem');
        Route::any('/page-tip/delete/{id}', 'Admin\Bot\BotPageTipController@getDelete');
    });


    // system region
    Route::get('/system/region', 'Admin\System\SysRegionController@getIndex');
    Route::post('/system/region', 'Admin\System\SysRegionController@postItem');
    Route::any('/system/region/active/{id}', 'Admin\System\SysRegionController@getChangeActive');

    // system cat
    Route::get('/system/cat', 'Admin\System\SysCatController@getIndex');
    Route::post('/system/cat', 'Admin\System\SysCatController@postItem');
    Route::any('/system/cat/active/{id}', 'Admin\System\SysCatController@getChangeActive');

    // system user
    Route::get('/system/user', 'Admin\System\UserController@getIndex');
    Route::post('/system/user', 'Admin\System\UserController@postItem');
    Route::any('/system/user/active/{id}', 'Admin\System\UserController@getChangeActive');
});

Route::group(['middleware' => ['auth.user']], function () {
    //profile routes
    Route::get('profile', 'Admin\ProfileController@getIndex');
    Route::post('profile', 'Admin\ProfileController@postIndex');
    Route::post('change-pass', 'Admin\ProfileController@postChangePass');

    Route::get('logout', 'LoginController@getLogout');
});
