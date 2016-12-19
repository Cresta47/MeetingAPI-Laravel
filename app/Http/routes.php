<?php

Route::group(['prefix'=>'api/v1'],function(){
    Route::resource('meeting/registration','RegistrationController',[
        'only'=>['store','destroy']
    ]);
    Route::resource('meeting','MeetingController',[
        'except'=>['edit','create']
    ]);

    Route::post('user',[
        'uses'=>'AuthController@store'
    ]);
    Route::post('user/signin',[
        'uses'=>'AuthController@signin'
    ]);
});

