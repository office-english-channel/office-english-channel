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
    
    //routes for categories 
    Route::get('/categories/list', [
            'as'    => 'admin.categories.index',
            'uses'  => 'Admin\CategoriesController@index'
    ]);
    Route::get('/categories/add', [
            'as'    => 'admin.categories.create',
            'uses'  => 'Admin\CategoriesController@create'
    ]);
    Route::post('/categories/store', [
            'as'    => 'admin.categories.store',
            'uses'  => 'Admin\CategoriesController@store'
    ]);
    Route::get('/categories/edit/{id}', [
            'as'    => 'admin.categories.edit',
            'uses'  => 'Admin\CategoriesController@edit'
    ]);
    Route::post('/categories/update', [
            'as'    => 'admin.categories.update',
            'uses'  => 'Admin\CategoriesController@update'
    ]);
    Route::get('/categories/delete/{id}', [
            'as'    => 'admin.categories.delete',
            'uses'  => 'Admin\CategoriesController@destroy'
    ]);
    Route::get('/categories/get-list', [
            'as'    => 'admin.categories.getlist',
            'uses'  => 'Admin\CategoriesController@getList'
    ]);

    //routes for sub-categories 
    Route::get('/sub-categories/list', [
            'as'    => 'admin.subcategories.index',
            'uses'  => 'Admin\SubCategoriesController@index'
    ]);
    Route::get('/sub-categories/add', [
            'as'    => 'admin.subcategories.create',
            'uses'  => 'Admin\SubCategoriesController@create'
    ]);
    Route::post('/sub-categories/store', [
            'as'    => 'admin.subcategories.store',
            'uses'  => 'Admin\SubCategoriesController@store'
    ]);
    Route::get('/sub-categories/edit/{id}', [
            'as'    => 'admin.subcategories.edit',
            'uses'  => 'Admin\SubCategoriesController@edit'
    ]);
    Route::post('/sub-categories/update', [
            'as'    => 'admin.subcategories.update',
            'uses'  => 'Admin\SubCategoriesController@update'
    ]);
    Route::get('/sub-categories/delete/{id}', [
            'as'    => 'admin.subcategories.delete',
            'uses'  => 'Admin\SubCategoriesController@destroy'
    ]);
    Route::get('/sub-categories/get-list', [
            'as'    => 'admin.subcategories.getlist',
            'uses'  => 'Admin\SubCategoriesController@getList'
    ]);

    //routes for vendors 
    Route::get('/vendors/list', [
            'as'    => 'admin.vendors.index',
            'uses'  => 'Admin\VendorsController@index'
    ]);
    Route::get('/vendors/add', [
            'as'    => 'admin.vendors.create',
            'uses'  => 'Admin\VendorsController@create'
    ]);
    Route::post('/vendors/store', [
            'as'    => 'admin.vendors.store',
            'uses'  => 'Admin\VendorsController@store'
    ]);
    Route::get('/vendors/edit/{id}', [
            'as'    => 'admin.vendors.edit',
            'uses'  => 'Admin\VendorsController@edit'
    ]);
    Route::post('/vendors/update', [
            'as'    => 'admin.vendors.update',
            'uses'  => 'Admin\VendorsController@update'
    ]);
    Route::get('/vendors/delete/{id}', [
            'as'    => 'admin.vendors.delete',
            'uses'  => 'Admin\VendorsController@destroy'
    ]);
    Route::get('/vendors/get-list', [
            'as'    => 'admin.vendors.getlist',
            'uses'  => 'Admin\VendorsController@getList'
    ]);
    //This route is used to get area list using Ajax
    Route::get('/vendors/get-sub-category-list', [
            'as'    => 'admin.vendors.getareaslist',
            'uses'  => 'Admin\VendorsController@getSubCategoryList'
    ]);

    //routes for contactforms 
    Route::get('/contactforms/list', [
            'as'    => 'admin.contactforms.index',
            'uses'  => 'Admin\ContactFormsController@index'
    ]);
    Route::get('/contactforms/show/{id}', [
            'as'    => 'admin.contactforms.show',
            'uses'  => 'Admin\ContactFormsController@show'
    ]);
    Route::get('/contactforms/delete/{id}', [
            'as'    => 'admin.contactforms.delete',
            'uses'  => 'Admin\ContactFormsController@destroy'
    ]);
    Route::get('/contactforms/get-list', [
            'as'    => 'admin.contactforms.getlist',
            'uses'  => 'Admin\ContactFormsController@getList'
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

    //routes for servicerequests 
    Route::get('/servicerequests/list', [
            'as'    => 'admin.servicerequests.index',
            'uses'  => 'Admin\ServiceRequestsController@index'
    ]);
    Route::get('/servicerequests/show/{id}', [
            'as'    => 'admin.servicerequests.show',
            'uses'  => 'Admin\ServiceRequestsController@show'
    ]);
    Route::get('/servicerequests/delete/{id}', [
            'as'    => 'admin.servicerequests.delete',
            'uses'  => 'Admin\ServiceRequestsController@destroy'
    ]);
    Route::get('/servicerequests/get-list', [
            'as'    => 'admin.servicerequests.getlist',
            'uses'  => 'Admin\ServiceRequestsController@getList'
    ]);

    //routes for subscribers 
    Route::get('/subscribers/list', [
            'as'    => 'admin.subscribers.index',
            'uses'  => 'Admin\SubscribersController@index'
    ]);
    Route::get('/subscribers/add', [
            'as'    => 'admin.subscribers.create',
            'uses'  => 'Admin\SubscribersController@create'
    ]);
    Route::post('/subscribers/store', [
            'as'    => 'admin.subscribers.store',
            'uses'  => 'Admin\SubscribersController@store'
    ]);
    Route::get('/subscribers/edit/{id}', [
            'as'    => 'admin.subscribers.edit',
            'uses'  => 'Admin\SubscribersController@edit'
    ]);
    Route::post('/subscribers/update', [
            'as'    => 'admin.subscribers.update',
            'uses'  => 'Admin\SubscribersController@update'
    ]);
    Route::get('/subscribers/delete/{id}', [
            'as'    => 'admin.subscribers.delete',
            'uses'  => 'Admin\SubscribersController@destroy'
    ]);
    Route::get('/subscribers/get-list', [
            'as'    => 'admin.subscribers.getlist',
            'uses'  => 'Admin\SubscribersController@getList'
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

    //Footer Links related routes
    Route::get('/footer-links/list', [
            'as'    => 'admin.general.footerlinks.index',
            'uses'  => 'Admin\General\FooterLinksController@index'
    ]);
    Route::get('/footer-links/add', [
            'as'    => 'admin.general.footerlinks.create',
            'uses'  => 'Admin\General\FooterLinksController@create'
    ]);
    Route::post('/footer-links/store', [
            'as'    => 'admin.general.footerlinks.store',
            'uses'  => 'Admin\General\FooterLinksController@store'
    ]);
    Route::get('/footer-links/edit/{id}', [
            'as'    => 'admin.general.footerlinks.edit',
            'uses'  => 'Admin\General\FooterLinksController@edit'
    ]);
    Route::post('/footer-links/update', [
            'as'    => 'admin.general.footerlinks.update',
            'uses'  => 'Admin\General\FooterLinksController@update'
    ]);
    Route::get('/footer-links/delete/{id}', [
            'as'    => 'admin.general.footerlinks.delete',
            'uses'  => 'Admin\General\FooterLinksController@destroy'
    ]);
    Route::get('/footer-links/get-list', [
            'as'    => 'admin.general.footerlinks.getlist',
            'uses'  => 'Admin\General\FooterLinksController@getList'
    ]);

    //Menus Links related routes
    Route::get('/menus/list', [
        'as'    => 'admin.general.menus.index',
        'uses'  => 'Admin\General\MenusController@index'
    ]);
    Route::get('/menus/add', [
        'as'    => 'admin.general.menus.create',
        'uses'  => 'Admin\General\MenusController@create'
    ]);
    Route::post('/menus/store', [
        'as'    => 'admin.general.menus.store',
        'uses'  => 'Admin\General\MenusController@store'
    ]);
    Route::get('/menus/edit/{id}', [
        'as'    => 'admin.general.menus.edit',
        'uses'  => 'Admin\General\MenusController@edit'
    ]);
    Route::post('/menus/update', [
        'as'    => 'admin.general.menus.update',
        'uses'  => 'Admin\General\MenusController@update'
    ]);
    Route::get('/menus/delete/{id}', [
        'as'    => 'admin.general.menus.delete',
        'uses'  => 'Admin\General\MenusController@destroy'
    ]);
    Route::get('/menus/get-list', [
        'as'    => 'admin.general.menus.getlist',
        'uses'  => 'Admin\General\MenusController@getList'
    ]);

});
?>