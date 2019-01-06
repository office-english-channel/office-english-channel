<?php 

Route::get('/admin', [
    'uses'  => 'Admin\LoginController@index'
]);

Route::get('/admin/login', [
    'as'    => 'common.login',
    'uses'  => 'Admin\LoginController@index'
]);

Route::post('/admin/check-login', [
    'as'    => 'common.check.login',
    'uses'  => 'Admin\LoginController@postLogin'
]);

Route::get('/admin/forgot-password', [
    'as'    => 'common.get.forgot.password',
    'uses'  => 'Admin\LoginController@getForgotPassword'
]);

Route::post('/admin/check-forgot-password', [
    'as'    => 'common.post.forgot.password',
    'uses'  => 'Admin\LoginController@postForgotPassword'
]);

Route::get('/admin/update-password', [
    'as'    => 'common.get.update.password',
    'uses'  => 'Admin\LoginController@getUpdatePassword'
]);

Route::post('/admin/check-update-password', [
    'as'    => 'common.post.update.password',
    'uses'  => 'Admin\LoginController@postUpdatePassword'
]);

Route::get('/admin/logout', [
    'as'    => 'common.logout',
    'uses'  => 'Admin\LoginController@logout'
]);

/* ******************************************************************************** */
/* ******************************************************************************** */

/* Routes which are available for users who are logged into Administrator Pagel */
Route::group(['prefix' => 'admin', 'middleware' => 'adminauth'], function () {

    //URL for remove image.
    Route::post('/common/image', [
            'as'    => 'admin.common.remove.image',
            'uses'  => 'Admin\CommonController@postImageRemove'
    ]);

    Route::get('/home', [
        'as'    => 'admin.home',
        'uses'  => 'Admin\HomeController@index'
    ]);

    //routes for administrators 
    Route::get('/administrators/list', [
            'as'    => 'admin.administrators.index',
            'uses'  => 'Admin\AdministratorsController@index'
    ]);
    Route::get('/administrators/add', [
            'as'    => 'admin.administrators.create',
            'uses'  => 'Admin\AdministratorsController@create'
    ]);
    Route::post('/administrators/store', [
            'as'    => 'admin.administrators.store',
            'uses'  => 'Admin\AdministratorsController@store'
    ]);
    Route::get('/administrators/edit/{id}', [
            'as'    => 'admin.administrators.edit',
            'uses'  => 'Admin\AdministratorsController@edit'
    ]);
    Route::post('/administrators/update', [
            'as'    => 'admin.administrators.update',
            'uses'  => 'Admin\AdministratorsController@update'
    ]);
    Route::get('/administrators/delete/{id}', [
            'as'    => 'admin.administrators.delete',
            'uses'  => 'Admin\AdministratorsController@destroy'
    ]);
    Route::get('/administrators/get-list', [
            'as'    => 'admin.administrators.getlist',
            'uses'  => 'Admin\AdministratorsController@getList'
    ]);

    //routes for settings 
    Route::get('/settings/edit/{id}', [
            'as'    => 'admin.settings.edit',
            'uses'  => 'Admin\SettingsController@edit'
    ]);
    Route::post('/settings/update', [
            'as'    => 'admin.settings.update',
            'uses'  => 'Admin\SettingsController@update'
    ]);
    
    //routes for blogcategories 
    Route::get('/blogcategories/list', [
            'as'    => 'admin.blogcategories.index',
            'uses'  => 'Admin\BlogCategoriesController@index'
    ]);
    Route::get('/blogcategories/add', [
            'as'    => 'admin.blogcategories.create',
            'uses'  => 'Admin\BlogCategoriesController@create'
    ]);
    Route::post('/blogcategories/store', [
            'as'    => 'admin.blogcategories.store',
            'uses'  => 'Admin\BlogCategoriesController@store'
    ]);
    Route::get('/blogcategories/edit/{id}', [
            'as'    => 'admin.blogcategories.edit',
            'uses'  => 'Admin\BlogCategoriesController@edit'
    ]);
    Route::post('/blogcategories/update', [
            'as'    => 'admin.blogcategories.update',
            'uses'  => 'Admin\BlogCategoriesController@update'
    ]);
    Route::get('/blogcategories/delete/{id}', [
            'as'    => 'admin.blogcategories.delete',
            'uses'  => 'Admin\BlogCategoriesController@destroy'
    ]);
    Route::get('/blogcategories/get-list', [
            'as'    => 'admin.blogcategories.getlist',
            'uses'  => 'Admin\BlogCategoriesController@getList'
    ]);

    //routes for students
    Route::get('/students/list', [
            'as'    => 'admin.students.index',
            'uses'  => 'Admin\StudentsController@index'
    ]);
    Route::get('/students/add', [
            'as'    => 'admin.students.create',
            'uses'  => 'Admin\StudentsController@create'
    ]);
    Route::post('/students/store', [
            'as'    => 'admin.students.store',
            'uses'  => 'Admin\StudentsController@store'
    ]);
    Route::get('/students/edit/{id}', [
            'as'    => 'admin.students.edit',
            'uses'  => 'Admin\StudentsController@edit'
    ]);
    Route::post('/students/update', [
            'as'    => 'admin.students.update',
            'uses'  => 'Admin\StudentsController@update'
    ]);
    Route::get('/students/delete/{id}', [
            'as'    => 'admin.students.delete',
            'uses'  => 'Admin\StudentsController@destroy'
    ]);
    Route::get('/students/get-list', [
            'as'    => 'admin.students.getlist',
            'uses'  => 'Admin\StudentsController@getList'
    ]);

    //routes for inquiryforms 
    Route::get('/inquiryforms/list', [
            'as'    => 'admin.inquiryforms.index',
            'uses'  => 'Admin\InquiryFormsController@index'
    ]);
    Route::get('/inquiryforms/show/{id}', [
            'as'    => 'admin.inquiryforms.show',
            'uses'  => 'Admin\InquiryFormsController@show'
    ]);
    Route::get('/inquiryforms/delete/{id}', [
            'as'    => 'admin.inquiryforms.delete',
            'uses'  => 'Admin\InquiryFormsController@destroy'
    ]);
    Route::get('/inquiryforms/get-list', [
            'as'    => 'admin.inquiryforms.getlist',
            'uses'  => 'Admin\InquiryFormsController@getList'
    ]);

    //Pages related routes
    Route::get('/pages/list', [
            'as'    => 'admin.general.pages.index',
            'uses'  => 'Admin\General\PagesController@index'
    ]);
    Route::get('/pages/add', [
            'as'    => 'admin.general.pages.create',
            'uses'  => 'Admin\General\PagesController@create'
    ]);
    Route::post('/pages/store', [
            'as'    => 'admin.general.pages.store',
            'uses'  => 'Admin\General\PagesController@store'
    ]);
    Route::get('/pages/edit/{id}', [
            'as'    => 'admin.general.pages.edit',
            'uses'  => 'Admin\General\PagesController@edit'
    ]);
    Route::post('/pages/update', [
            'as'    => 'admin.general.pages.update',
            'uses'  => 'Admin\General\PagesController@update'
    ]);
    Route::get('/pages/delete/{id}', [
            'as'    => 'admin.general.pages.delete',
            'uses'  => 'Admin\General\PagesController@destroy'
    ]);
    Route::get('/pages/get-list', [
            'as'    => 'admin.general.pages.getlist',
            'uses'  => 'Admin\General\PagesController@getList'
    ]);
});
?>