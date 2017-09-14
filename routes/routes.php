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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function () {
//    return view('layouts.index');
//});

//Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);


//It's make controller TIm
//Route::match(['GET','POST'],'/',['uses'=>'TimController@index','as'=>'tim']);
//Route::match(['GET','POST'],'/mir',['uses'=>'MirController@execute','as'=>'mir']);

Route::group(['middleware'>['web']], function(){

   Route::match(['GET','POST'],'/',['uses'=>'IndexController@execute','as'=>'home']);
    Route::get('/page/{alias}',['uses'=>'PageController@execute','as'=>'page']);
    //auth
    Route::auth('');
});

//
//Route::match(['get','post'],'/',['uses'=>'IndexController@execute','as'=>'home']);
////admin/pages/portfolios/services
//Route::group(['prefix'>'admin','middleware'=>'auth'], function(){
//    //admin
//    Route::get('/',function(){
//
//    });
//
//
//
//    //admin pages
//    Route::group(['prefix'=>'pages'],function(){
//        //admin pages
//        Route::get('/',['uses'=>'PagesController@execute','as'=>'pages']);
//        //admin/pages/add
//        Route::match(['get','post'],'/add',['uses'=>'PagesAddController@execute', 'as'=>'pagesAdd']);
//        //admin/edit/2
//        Route::match(['get','post','delete'],'/edit/{page}',['uses'=>'PagesEditController@execute','as'=>'pagesEdit']);
//    });
//
//
//
//
//    //admin services
//    Route::group(['prefix'=>'services'],function(){
//        //admin pages
//        Route::get('/',['uses'=>'ServiceController@execute','as'=>'services']);
//        //admin/pages/add
//        Route::match(['get','post'],'/add',['uses'=>'ServiceAddController@execute', 'as'=>'serviceAdd']);
//        //admin/edit/2
//        Route::match(['get','post','delete'],'/edit/{service}',['uses'=>'ServiceEditController@execute','as'=>'serviceEdit']);
//    });
//});