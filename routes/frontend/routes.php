<?php 

Route::get('/', [
    'as'    => 'common.home',
    'uses'  => 'FrontEnd\HomeController@index'
]);

Route::get('/page/{slug}', [
    'as'    => 'frontend.cmspage',
    'uses'  => 'FrontEnd\HomeController@getCMSPage'
]);

Route::post('/inquiry', [
    'as'    => 'common.inquiry',
    'uses'  => 'FrontEnd\HomeController@inquiry'
]);

Route::get('/achievements', [
    'as'    => 'common.achievements',
    'uses'  => 'FrontEnd\HomeController@achievements'
]);

Route::get('/blogs', [
    'as'    => 'common.blogs',
    'uses'  => 'FrontEnd\HomeController@blogs'
]);


Route::get('/trial-ielts', [
    'as'    => 'common.trial-ielts',
    'uses'  => 'FrontEnd\HomeController@trialIELTS'
]);
?>