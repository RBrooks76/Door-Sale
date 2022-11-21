<?php

use Illuminate\Support\Facades\Route;
session_start();
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


/////////////////////////////////////////////// Dashboard ///////////////////////////////////////////////
Route::get('/',                         'DashboardController@toHome')                       ->name('toHome');
Route::get('/design',                   'DashboardController@toDesign')                     ->name('toDesign');
Route::get('/design/{type}',            'DashboardController@toDesignDetail')               ->name('toDesignDetail');
Route::get('/contact',                  'DashboardController@toContact')                    ->name('toContact');
Route::get('/projects',                 'DashboardController@toProjects')                   ->name('toProjects');
Route::get('/login',                    'DashboardController@toLogin')                      ->name('toLogin');
Route::get('/signup',                   'DashboardController@toSignup')                     ->name('toSignup');


Route::post('/onLogin',                 'SignController@onLogin')                           ->name('onLogin');
Route::post('/onLogout',                'SignController@onLogout')                          ->name('onLogout');
Route::post('/onSignup',                'SignController@onSignup')                          ->name('onSignup');

Route::get('/cabinet-order',            'DashboardController@toCabinetOrder')               ->name('toCabinetOrder');
Route::post('/onOrderForm',             'DashboardController@onOrderForm')                  ->name('onOrderForm');

Route::get('/painted-door-order',       'DashboardController@toPaintedDoorOrder')           ->name('toPaintedDoorOrder');
Route::post('/onPaintedOrderForm',      'DashboardController@onPaintedOrderForm')           ->name('onPaintedOrderForm');

Route::get('benchtop-order',            'DashboardController@toBenchtopOrder')              ->name('toBenchtopOrder');

Route::post('/onChangeCabinet',         'DashboardController@onChangeCabinet')              ->name('onChangeCabinet');
Route::post('/onGetHardwareArray',      'DashboardController@onGetHardwareArray')           ->name('onGetHardwareArray');

Route::post('/onGetDoorCategory',       'DashboardController@onGetDoorCategory')            ->name('onGetDoorCategory');
Route::post('/onCalculation',           'DashboardController@onCalculation')                ->name('onCalculation');




////////////////////////////// New updates
Route::get('/painted-door',             'DashboardController@toPaintedDoor')                ->name('toPaintedDoor');
Route::get('/painted-door-first',       'DashboardController@toPaintedDoorFirst')           ->name('toPaintedDoorFirst');
Route::get('/painted-door-second',      'DashboardController@toPaintedDoorSecond')          ->name('toPaintedDoorSecond');
Route::get('/painted-door-third',       'DashboardController@toPaintedDoorThird')           ->name('toPaintedDoorThird');
Route::get('/painted-door-fourth',      'DashboardController@toPaintedDoorFourth')          ->name('toPaintedDoorFourth');

Route::post('/onPaintedDoorFirstStep',  'DashboardController@onPaintedDoorFirstStep')       ->name('onPaintedDoorFirstStep');
Route::post('/onPaintedDoorSecondStep', 'DashboardController@onPaintedDoorSecondStep')      ->name('onPaintedDoorSecondStep');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////





Route::get('/painted-door-more',        'DashboardController@toPaintedOrderMore')           ->name('toPaintedOrderMore');


Route::get('/form-list',                'DashboardController@toFormsList')                  ->name('toFormsList');
Route::post('/onGetFormList',           'DashboardController@onGetFormList')                ->name('onGetFormList');

Route::post('/onSaveOrder',             'DashboardController@onSaveOrder')                  ->name('onSaveOrder');

Route::get('/form_detail/{id}',         'DashboardController@toFormDetail')                 ->name('toFormDetail');

/////////////////////////////////////////////// Admin ///////////////////////////////////////////////
Route::get('/admin',                    'AdminController@index')                            ->name("toAdminLogin");
Route::get('/admin/admin',              'AdminController@toAdminList')                      ->name('toAdminList');
Route::get('/admin/user',               'AdminController@toUserList')                       ->name('toUserList');
Route::get('/admin/upload',             'AdminController@toUploadImage')                    ->name('toUploadImage');

Route::post('/admin_signin',            'AdminController@onAdminSignin')                    ->name('onAdminSignin');
Route::get('/admin_signout',            'AdminController@onAdminSignout')                   ->name('onAdminSignout');
Route::post('/admin_signup',            'AdminController@onAdminSignup')                    ->name('onAdminSignup');
Route::post('/onGetAdminList',          'AdminController@onGetAdminList')                   ->name('onGetAdminList');
Route::post('/onGetUserList',           'AdminController@onGetUserList')                    ->name('onGetUserList');



Route::post('/admin_usersignup',        'Admincontroller@onUserSignup')                     ->name('onUserSignup');
Route::post('admin_user_delete',        'Admincontroller@onDeleteUser')                     ->name('onDeleteUser');
Route::post('/admin/onGetChangeUser',   'AdminController@onGetChangeUser')                  ->name('onGetChangeUser');
Route::post('/admin/onChangeUser',      'AdminController@onChangeUser')                     ->name('onChangeUser');

Route::get('/door-style',               'AdminController@toDoorStyle')                      ->name('toDoorStyle');
Route::post('/doorstyle',               'AdminController@onDoorStyle')                      ->name('onDoorStyle');

Route::get('/hinge-type',               'AdminController@toHingeType')                      ->name('toHingeType');
Route::post('/hingetpe',                'AdminController@onHingeType')                      ->name('onHingeType');
