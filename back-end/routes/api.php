<?php

Route::post('/auth/register', 'Api\Auth\RegisterController@store');
Route::post('/auth/token', 'Api\Auth\AuthClientController@auth');

Route::group([
    'prefix' => 'v1',
    'namespace' => 'Api'
], function () {
    Route::get('/states', 'StateController@getStates');
    Route::get('/plans', 'PlanController@getPlans');
    Route::resource('/customers', 'CustomerController', ['except' => ['create', 'edit']]);
});
