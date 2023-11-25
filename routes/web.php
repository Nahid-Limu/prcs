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

// Route::get('/', function () {
//     return view('welcome');
// });
/* User route start */

Route::get('/', 'UserController@home')->name('home');
Route::get('/teachers', 'UserController@teachers')->name('teachers');
Route::get('/about', 'UserController@about')->name('about');

Route::get('/notice', 'UserController@notice')->name('notice');
Route::post('/noticeDetails/{id}', 'UserController@noticeDetails')->name('noticeDetails');
Route::get('/noticeDetails', 'UserController@noticeDetails')->name('noticeDetails');

Route::get('/career', 'UserController@career')->name('career');
Route::get('/careerDetails', 'UserController@careerDetails')->name('careerDetails');

Route::get('/events', 'UserController@events')->name('events');
Route::get('/contact', 'UserController@contact')->name('contact');
Route::get('/admission', 'UserController@admission')->name('admission');
Route::get('/result', 'UserController@result')->name('result');
Route::get('/testPage', 'UserController@testPage')->name('testPage'); 

/* User route end */

// Auth::routes();



/* Admin route start */
Auth::routes();
/* Logout route start */
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
/* Logout route end */
Route::group(['middleware'=>'auth'], function () {

    // dashboard
    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

    //--teacher [start]--//
    Route::get('/teacherList', 'TeacherController@teacherList')->name('teacherList');
    Route::post('/teacherAdd', 'TeacherController@teacherAdd')->name('teacherAdd');
    Route::get('/teacherDelete/{id}', 'TeacherController@teacherDelete')->name('teacherDelete');
    Route::get('/teacherEdit/{id}', 'TeacherController@teacherEdit')->name('teacherEdit');
    Route::post('/teacherUpdate', 'TeacherController@teacherUpdate')->name('teacherUpdate');
    //--teacher [end]--//

    //--event [start]--//
    Route::get('/eventList', 'EventController@eventList')->name('eventList');
    Route::post('/eventAdd', 'EventController@eventAdd')->name('eventAdd');
    Route::get('/eventDelete/{id}', 'EventController@eventDelete')->name('eventDelete');
    Route::get('/eventEdit/{id}', 'EventController@eventEdit')->name('eventEdit');
    Route::post('/eventUpdate', 'EventController@eventUpdate')->name('eventUpdate');
    //--event [end]--//

    //--notice [start]--//
    Route::get('/noticeList', 'NoticeController@noticeList')->name('noticeList');
    Route::post('/noticetAdd', 'NoticeController@noticetAdd')->name('noticetAdd');
    Route::get('/noticeDelete/{id}', 'NoticeController@noticeDelete')->name('noticeDelete');
    Route::get('/noticeEdit/{id}', 'NoticeController@noticeEdit')->name('noticeEdit');
    Route::post('/noticeUpdate', 'NoticeController@noticeUpdate')->name('noticeUpdate');
    //--notice [end]--//

    //--result [start]--//
    Route::get('/resultList', 'ResultController@resultList')->name('resultList');
    Route::post('/resultAdd', 'ResultController@resultAdd')->name('resultAdd');
     Route::get('/resultDelete/{id}', 'ResultController@resultDelete')->name('resultDelete');
    Route::get('/resultEdit/{id}', 'ResultController@resultEdit')->name('resultEdit');
    Route::post('/resultUpdate', 'ResultController@resultUpdate')->name('resultUpdate');
    //--result [end]--//
    
    //--settings--// (categorySettings)
    Route::get('/categorySettings', 'CategoryController@categorySettings')->name('categorySettings');
    Route::post('/addCategory', 'CategoryController@addCategory')->name('addCategory');
    Route::get('editCategory/{id}','CategoryController@editCategory')->name('editCategory');
    Route::post('/updateCategory', 'CategoryController@updateCategory')->name('updateCategory');
    Route::get('/deleteCategory/{id}', 'CategoryController@deleteCategory')->name('deleteCategory');

    //--settings--// (brandsSettings)
    Route::get('/brandSettings', 'BrandController@brandSettings')->name('brandSettings');
    Route::post('/addBrand', 'BrandController@addBrand')->name('addBrand');
    Route::get('/editBrand/{id}', 'BrandController@editBrand')->name('editBrand');
    Route::post('/updateBrand', 'BrandController@updateBrand')->name('updateBrand');
    Route::get('/deleteBrand/{id}', 'BrandController@deleteBrand')->name('deleteBrand');

    //--settings--// (productSettings)
    Route::get('/productSettings', 'ProductController@productSettings')->name('productSettings');
    Route::post('/addProduct', 'ProductController@addProduct')->name('addProduct');
    // Route::get('/editBrand/{id}', 'BrandController@editBrand')->name('editBrand');
    // Route::post('/updateBrand', 'BrandController@updateBrand')->name('updateBrand');
    Route::get('/deleteProduct/{id}', 'ProductController@deleteProduct')->name('deleteProduct');

    //--sales--//
    Route::get('/sales', 'SalesController@salesView')->name('sales');
    Route::get('/sealProductDetails/{id}', 'SalesController@sealProductDetails')->name('sealProductDetails');
    Route::post('/printInvoice', 'SalesController@printInvoice')->name('printInvoice');

    //--events--//
    Route::get('/eventDataView', 'EventController@eventDataView')->name('eventDataView');
    Route::get('/viewSingleData/{id}', 'EventController@viewSingleData')->name('viewSingleData');
    Route::get('/deleteTeam/{id}', 'EventController@deleteTeam')->name('deleteTeam');
    
    Route::get('/test', 'SalesController@test')->name('test');

    
});
/* Admin route end */
