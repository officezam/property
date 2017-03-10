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






Route::group(array('prefix' => 'admin'), function ()
{

    Route::get('/logout', ['as' => 'logout','uses' => 'LoginController@logout']);

    Route::get('/', ['as' => 'login','uses' => 'LoginController@index']);
    Route::post('login', ['as' => 'login','uses' => 'LoginController@login'  ]);
    Route::get('/home', function (){ return view('admin.dashboard');  });
    Route::get('/dashboard', function (){return view('admin.dashboard');});
    Route::resource('add_package', 'PackageController');
    Route::resource('permission', 'PermissionController');
    Route::resource('packagepermission', 'packagePermissionController');

//    Route::get('/add_package', function ()
//    {
//        return view('admin.add_package');
//    });

//    Route::get('/submitpackage', function ()
//    {
//        return view('admin.add_package');
//    });




});

//Route::get('/404', function () {
//    return view('admin.404');
//});
//Route::get('/login', function () {
//    return view('admin.login');
//});
//
//Route::get('/forward', function () {
//    return view('admin.forward');
//});


Route::get('/', function () {
    return view('welcome');
});
Route::get('index','PagesController@index');
Route::get('/about_us','PagesController@about_us');
Route::get('add_new_property','PagesController@add_new_property');
Route::get('agency_list','PagesController@agency_list');
Route::get('agent_detail','PagesController@agent_detail');
Route::get('agent_list','PagesController@agent_list');
Route::get('blog','PagesController@blog');
Route::get('blog_detail','PagesController@blog_detail');
Route::get('blog_masonry','PagesController@blog_masonry');
Route::get('company_profile','PagesController@company_profile');
Route::get('compare_properties','PagesController@compare_properties');
Route::get('contact_us','PagesController@contact_us');
Route::get('terms_and_conditions','PagesController@terms_and_conditions');
Route::get('privacy','PagesController@privacy');
Route::get('Signup',array('as' => 'Signup', 'uses' =>'SignupController@Signup'));
Route::get('SignupForm', array('as' => 'SignupForm', 'uses' =>'SignupController@SignupForm'));
Route::get('/emailVerification/{token?}', array('as' =>'emailVerification', 'uses' => 'SignupController@emailVerification'));
Route::get('Signout',array('as' => 'Signout', 'uses' =>'SignupController@Signout'));

Auth::routes();

Route::get('/home', 'HomeController@index');
