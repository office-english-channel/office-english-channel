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

?>