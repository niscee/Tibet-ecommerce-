<?php

/*-----------------------------Frontend Start--------------------------------------*/

Route::group(['namespace'=>'frontend'],function() {
    Route::get('/', 'IndexController@index')->name('index');
    Route::get('/Social', 'IndexController@social')->name('social');
    Route::get('/About', 'IndexController@about')->name('about');
    Route::get('/Information/{slug}', 'IndexController@information')->name('infos');
    Route::get('/Contact-Us', 'IndexController@contact')->name('contact');
    Route::get('/Custom', 'IndexController@custom')->name('custom');

    Route::get('/Mail', 'MailController@mail')->name('mail');

    Route::get('/Product-Categories', 'IndexController@pmenu')->name('pmenu');

    Route::get('/Inquiry/{slug}', 'IndexController@inquiry')->name('inquiry');
    Route::get('/Product/{slug}', 'IndexController@product')->name('product');
    Route::get('/Product-Menu/{slug}', 'IndexController@productmenu')->name('product-menu');
    Route::post('/subscribe', 'IndexController@subscribe')->name('subscribe');


    Route::post('/Contact-Us', 'IndexController@contactaction')->name('contact-action');
    Route::get('/Product-Details/{slug}', 'IndexController@productdetails')->name('product-details');


    Route::get('/Product/', 'IndexController@product')->name('total');
    /*-----------------------------Ajax--------------------------------------*/
    Route::get('/find', 'IndexController@find');
    /*-------------------------------------------------------------------*/
    /*--------------------------------Cart-add-------------------------------*/
    Route::get('/cart-show', 'CartController@index')->name('cart.index');
    Route::post('/cart-store', 'CartController@store')->name('cart.store');
    Route::post('/cart-wishlist', 'CartController@wishlist')->name('cart.wishlist');
    Route::post('/cart-wishlist-add', 'CartController@wishlistcartadd')->name('cart.wishlistcartadd');
    Route::get('/cart-wishlist', 'CartController@wishlistindex')->name('cart.wishlistindex');
    Route::delete('/cart-wishlist-delete/{name}', 'CartController@wishlistdelete')->name('cart.wishlistdelete');
/*    Route::post('/cart-update', 'CartController@update')->name('cart.update');*/


    Route::delete('/cart-delete/{name}', 'CartController@delete')->name('cart.delete');
    Route::get('/cart-update', 'CartController@updateqty')->name('cart.updateqty');

    Route::get('/search','IndexController@search')->name('search');

    Route::get('/checkout', 'CartController@checkout')->name('checkout');
    Route::post('/checkout', 'CartController@checkoutaction')->name('checkout-action');

});


/*-----------------------------Backend Start--------------------------------------*/

/*Route::get('/register','backend\admincontroller@register')->name('adminregister');
Route::post('/register','backend\admincontroller@registeraction')->name('admin-register');*/
Route::get('/@dashboard@','backend\admincontroller@login');
Route::post('/@dashboard@','backend\admincontroller@loginaction')->name('admin-login');
Route::post('/logout','backend\admincontroller@logout')->name('logout');
/*Route::post('/register','backend\admincontroller@registeraction')->name('admin-register');*/


Route::group(['namespace'=>'backend','middleware'=>'auth'],function() {
    Route::get('/register','admincontroller@register')->name('adminregister');
    Route::post('/register','admincontroller@registeraction')->name('admin-register');

});

/*-----------------------------admin profile--------------------------------------*/
Route::group(['namespace'=>'backend','middleware'=>'auth','prefix'=>'dashboard'],function() {

    Route::get('/', 'admincontroller@index')->name('dashboard');
    Route::get('/profile', 'admincontroller@profile')->name('admin-profile');
    Route::post('/profile', 'admincontroller@profileaction')->name('adminprofile');
    Route::post('/profile/password', 'admincontroller@passwordaction')->name('adminpassword');
    Route::post('/profile/delete', 'admincontroller@adminprofiledelete')->name('admin-profile-delete');

    /*-----------------------------site config--------------------------------------*/

    Route::post('/Product-Menu-add', 'PmenuController@add')->name('admin-pmenu-add');

    Route::get('/pmenu-find', 'PmenuController@find');

/*-----------------------------site config--------------------------------------*/

    Route::get('/Site-config', 'SiteController@index')->name('admin-site-config');
    Route::post('/Site-config-add', 'SiteController@add')->name('admin-site-config-add');
    Route::post('/Site-config-logo', 'SiteController@logo')->name('admin-site-config-logo');

    /*-----------------------------Slider--------------------------------------*/

    Route::get('/Slider', 'SliderController@index')->name('admin-slider');
    Route::post('/Slider-add', 'SliderController@add')->name('admin-slider-add');
    Route::post('/Slider-delete', 'SliderController@delete')->name('admin-slider-delete');

    /*-----------------------------Information--------------------------------------*/
    Route::get('/Information', 'InformationController@index')->name('admin-information');
    Route::post('/Information-add', 'InformationController@add')->name('admin-information-add');
    Route::get('/Information-edit', 'InformationController@edit')->name('admin-information-edit');
    Route::post('/Information-edit-action', 'InformationController@editaction')->name('admin-information-edit-action');
    Route::post('/Information-delete', 'InformationController@delete')->name('admin-information-delete');
    /*-----------------------------products--------------------------------------*/

    Route::get('/Product', 'ProductController@index')->name('admin-product');
    /*Route::get('/Product-Find', 'ProductController@find')->name('admin-product-search');*/
    Route::post('/Category-Add', 'ProductController@category')->name('admin-category');
    Route::post('/Category-Delete', 'ProductController@categorydelete')->name('admin-category-delete');
    Route::post('/Pmenu-Delete', 'ProductController@pmenudelete')->name('admin-pmenu-delete');
    Route::post('/Product-Add', 'ProductController@productadd')->name('admin-product-add');
    Route::get('/Product-View', 'ProductController@productview')->name('admin-product-view');
    Route::post('/Product-View-Search', 'ProductController@psearch')->name('admin-product-view-search');
    Route::post('/Product-delete', 'ProductController@productdelete')->name('admin-product-delete');
    Route::get('/Product-Edit', 'ProductController@productedit')->name('admin-product-edit');
    Route::get('/Menu-Edit', 'ProductController@menuedit')->name('admin-menu-edit');
    Route::get('/SubMenu-Edit', 'ProductController@pmenuedit')->name('admin-pmenu-edit');
    Route::post('/Menu-Edit-Action', 'ProductController@menueditaction')->name('admin-menu-edit-action');
    Route::post('/Submenu-Edit-Action', 'ProductController@pmenueditaction')->name('admin-pmenu-edit-action');

    Route::post('/Product-Edit-Action', 'ProductController@producteditaction')->name('admin-product-edit-action');
    Route::post('/Product-Image-Delete', 'ProductController@productimagedelete')->name('admin-product-image-delete');

    Route::get('/Category-Subcategory-View', 'ProductController@categoryview')->name('admin-menu-view');


    /*-----------------------------membership--------------------------------------*/
    Route::get('/Member', 'MemberController@index')->name('admin-member');
    Route::post('/Member-Add', 'MemberController@add')->name('admin-member-add');
    Route::post('/Member-Delete', 'MemberController@delete')->name('admin-member-delete');


    /*-----------------------------associate--------------------------------------*/

    Route::get('/Associate', 'AssociateController@index')->name('admin-associate');
    Route::post('/Associate-Edit', 'AssociateController@edit')->name('admin-associate-edit');

    /*-----------------------------Browser--------------------------------------*/

    Route::get('/Browser', 'BrowserController@index')->name('admin-browser');
    Route::post('/Browser-edit-1', 'BrowserController@add1')->name('admin-browser-add1');
    Route::post('/Browser-edit-2', 'BrowserController@add2')->name('admin-browser-add2');
    Route::post('/Browser-edit-3', 'BrowserController@add3')->name('admin-browser-add3');
    Route::post('/Browser-edit-4', 'BrowserController@add4')->name('admin-browser-add4');
    /*-----------------------------Menu-Config--------------------------------------*/
    Route::get('/Menu-Config', 'MenuController@index')->name('admin-menu-config');
    Route::post('/Menu-Config-Action', 'MenuController@edit')->name('admin-menu-config-action');

    /*-----------------------------Contact--------------------------------------*/


    Route::post('contact-message', 'admincontroller@contactMessages')->name('contactaction');
    Route::get('contact-message', 'admincontroller@viewContactMessages')->name('contact-message');
    Route::get('message-view', 'admincontroller@messageview')->name('message-view');
    Route::post('message-delete', 'admincontroller@msgdelete')->name('message-delete');
    Route::get('Confirm-delete', 'admincontroller@confirm')->name('confirm-delete');
    Route::get('Approve', 'admincontroller@approve')->name('approve');
    Route::get('Approve-list', 'admincontroller@approvelist')->name('approve-list');
    Route::post('Approve-list-delete', 'admincontroller@approvelistdelete')->name('approve-list-delete');

    /*-----------------------------subscribe--------------------------------------*/

    Route::get('subscriber', 'SubscribeController@index')->name('admin-subscribe');
    Route::post('subscribe-delete', 'SubscribeController@delete')->name('admin-subscribe-delete');


    /*-----------------------------metatag--------------------------------------*/
    Route::get('meta-tag', 'MetatagController@index')->name('admin-metatag');
    Route::post('meta-tag', 'MetatagController@add')->name('admin-metatag');
});