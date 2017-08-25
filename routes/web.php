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



Route::group(['domain' => '{username}.justdeal.pk'], function () {

    $server = explode('.', Request::server('HTTP_HOST'));

    if (count($server) == 3 && 'www' != $server[0])
    {
        Route::get('/', ['as' => 'subdomain','uses' => 'AgentController@agent_detail']);
        //Route::get('/', ['as' => 'subdomain','uses' => 'SubdomainController@UserName']);
       // Route::get('property-agent-detail/{id}/{title}','AgentController@agent_detail');

    }

});


// Socail Sharing Routes
Route::get('twitter/{id}',['as' => 'Rating','uses' => 'SocailshareController@twitter']);
Route::get('facebook/{id}',['as' => 'Rating','uses' => 'SocailshareController@facebook']);
Route::get('gplus/{id}',['as' => 'Rating','uses' => 'SocailshareController@gplus']);
Route::get('pinterest/{id}',['as' => 'Rating','uses' => 'SocailshareController@pinterest']);

//     Contact us front site
Route::post('contact_us','ContactUsController@store');

//Property Agent Detail Routes
//Route::get('property-agent-detail/{id}/{title}','AgentController@agent_detail');
Route::get('agent_list','AgentController@agent_list');





Route::group(array('prefix' => 'admin'), function ()
{
    Route::auth();
    Route::get('/', ['as' => 'login','uses' => 'LoginController@index']);
    Route::get('/logout', ['as' => 'logout','uses' => 'LoginController@logout']);
    Route::post('/login', ['as' => 'login','uses' => 'LoginController@login'  ]);

    Route::get('/404', function (){return view('admin.404');});


    Route::group(array('middleware' => 'myAuth'), function ()
    {

       // Route::get('/home', function (){ return view('admin.dashboard');  });
       // Route::get('/dashboard', function (){return view('admin.dashboard');});
	    Route::get('dashboard', ['as' => 'dashboard','uses' => 'DashboardController@index']);
	    Route::get('home', ['as' => 'dashboard','uses' => 'DashboardController@index']);


	    Route::resource('city', 'CityController');
        Route::get('/addcity', function (){return view('admin.addcity');});
        Route::get('/editcity/{id}', ['as' => 'ecitcity','uses' => 'CityController@destroy']);
        Route::post('/updatecity/{id}', ['as' => 'updatecity','uses' => 'CityController@update']);

        Route::resource('feature', 'FeatureCotroller');
        Route::post('/updatefeature/{id}', ['as' => 'feature','uses' => 'FeatureCotroller@update']);
        Route::get('/featuredestroy/{id}', ['as' => 'feature','uses' => 'FeatureCotroller@destroy']);


        Route::resource('services', 'ServicesController');
        Route::post('/updateservice/{id}', ['as' => 'services','uses' => 'ServicesController@update']);
        Route::get('/servicedestroy/{id}', ['as' => 'services','uses' => 'ServicesController@destroy']);

        Route::resource('add_package', 'PackageController');
        Route::post('/updateprm/{id}', ['as' => 'Package','uses' => 'PackageController@update']);
        Route::get('/pkgdestroy/{id}', ['as' => 'Package','uses' => 'PackageController@destroy']);

        Route::resource('permission', 'PermissionController');


        Route::get('/permdestroy/{id}', ['as' => 'Permission','uses' => 'PermissionController@destroy']);



        Route::resource('packagepermission', 'PackagePermissionController');


        /*
         * Property Route
         * Manage All property Routes
         * */
        Route::get('/property', ['as' => 'Property','uses' => 'PropertyController@property']);
        Route::get('/property_detail/{id}', ['as' => 'Property','uses' => 'PropertyController@property_detail']);
        Route::get('/p_delete/{id}', ['as' => 'Property','uses' => 'PropertyController@delete_property']);
        Route::get('/set_property/{id}', ['as' => 'Property','uses' => 'PropertyController@set_property']);
        Route::get('/unset_property/{id}', ['as' => 'Property','uses' => 'PropertyController@unset_property']);
        Route::get('/edit_property/{id}', ['as' => 'Property','uses' => 'PropertyController@show_edit_property']);
        Route::post('update_property', ['as' => 'Property','uses' => 'PropertyController@update_property']);
        Route::get('active_property', ['as' => 'Property','uses' => 'PropertyController@active_property']);
        Route::get('pending_property', ['as' => 'Property','uses' => 'PropertyController@pending_property']);
        Route::get('expire_property', ['as' => 'Property','uses' => 'PropertyController@expire_property']);
        Route::get('rejected_property', ['as' => 'Property','uses' => 'PropertyController@rejected_property']);
        Route::get('activate_property/{id}', ['as' => 'Property','uses' => 'PropertyController@activate_property']);
        Route::get('deactivate_property/{id}', ['as' => 'Property','uses' => 'PropertyController@deactivate_property']);




        //Route::get('adduser', function () {return view('admin.adduser');});
	    Route::get('adduser',array('as' => 'addAgent', 'uses' =>'SignupController@addAgent'));
	    Route::get('addagent',array('as' => 'addagent', 'uses' =>'SignupController@AddAgents'));
	    Route::get('agents',array('as' => 'agents', 'uses' =>'SignupController@agents'));
        Route::post('RegisterAgent', 'SignupController@RegisterAgent');
        Route::post('UpdateAgent', 'SignupController@UpdateAgent');
        Route::get('delete-agent/{id}', 'SignupController@delete_agent')->name('delete_agent');
        Route::get('edit-agent/{id}', 'SignupController@edit_agent')->name('edit_agent');


        Route::get('users', 'UserController@users');
        Route::get('view_user', 'UserController@view_user');
        Route::get('view_user_detail', 'UserController@view_user_detail');
        Route::post('edit_profile', 'UserController@Edit_Profile');
        Route::post('edit_user', 'UserController@update_profile');
        Route::get('block_users', 'UserController@block_users');
        Route::get('delete_user', 'UserController@delete_user');
        Route::post('company_user', 'UserController@update_company');
        //status approve and block admin user
        Route::get('mark_user/{action}/{id}', 'UserController@mark_status');



        //Adds route
        Route::get('adds_form', 'AddsController@index');
        Route::post('adds_form', 'AddsController@store');
        Route::get('view_adds', 'AddsController@show');
        Route::get('edit_adds/{id}', 'AddsController@edit_adds');
        Route::post('edit_adds', 'AddsController@update_adds');
        //status approve and block admin user
        Route::get('adds_status/{action}/{id}', 'AddsController@adds_status');
        //delete Adds
        Route::get('delete_adds', 'AddsController@delete_adds');

        //       Admin Site blog Post route
        Route::get('add_blogPost', 'BlogController@index');
        Route::post('add_blogPost', 'BlogController@store');
        Route::get('view_blogPost', 'BlogController@show');
        Route::get('edit_blogPost', 'BlogController@edit');
        Route::post('edit_blogPost', 'BlogController@update');
        Route::get('destroy_blogPost', 'BlogController@destroy_blogPost');


        //       About us
        Route::get('edit_aboutus', 'AboutUsController@edit_aboutus');
        Route::post('edit_aboutus', 'AboutUsController@update');
        Route::get('edit_contact', 'AboutUsController@edit_contactus_text');
        Route::post('edit_contact', 'AboutUsController@update_contactus_text');
        Route::get('edit_privacy_policy', 'AboutUsController@edit_privacy_policy');
        Route::post('edit_privacy_policy', 'AboutUsController@update_privacy_policy');
        Route::get('edit_terms_condition', 'AboutUsController@edit_terms_condition');
        Route::post('edit_terms_condition', 'AboutUsController@update_terms_condition');

        //   Contact us View admin site
        Route::get('view_contactus','ContactUsController@index');
        Route::get('contactus_reply', 'ContactUsController@contactus_reply');
        Route::get('contactus_sendemail', 'ContactUsController@contactus_sendemail');

        Route::get('destroy', 'ContactUsController@destroy');
//     contact us status active inactive  admin site
        Route::get('contactus_status/{action}/{id}', 'ContactUsController@contactus_status');

//        Social media
        Route::get('edit_socialAccount', 'SocialAccountController@index');
        Route::post('update', 'SocialAccountController@update');

    });

});


Route::post('Search-Result' , ['as' => 'Search' , 'uses' => 'SearchController@SearchFormData']);
Route::post('searchajax'    , ['as' => 'Search' , 'uses' => 'SearchController@searchajax']);
//Route::post('autocomplete',  ['as' => 'property','uses' => 'PropertiesController@Ajaxproperty']);





Route::post('Rating', ['as' => 'Rating','uses' => 'RatingController@store']);

Route::get('/logout', ['as' => 'logout','uses' => 'LoginController@fronlogout']);

Route::get('sale-properties', ['as' => 'property','uses' => 'PropertiesController@sale_property']);
Route::get('sale-properties/{subtype}', ['as' => 'property','uses' => 'PropertiesController@sale_property']);
Route::get('rent-properties', ['as' => 'property','uses' => 'PropertiesController@rent_property']);
Route::get('rent-properties/{subtype}', ['as' => 'property','uses' => 'PropertiesController@rent_property']);
Route::get('projects-properties', ['as' => 'property','uses' => 'PropertiesController@projects_property']);
Route::get('projects-properties/{subtype}', ['as' => 'property','uses' => 'PropertiesController@projects_property']);

Route::get('all-properties', ['as' => 'property','uses' => 'PropertiesController@active_property']);





Route::get('/add_property', ['as' => 'Property','uses' => 'PropertyController@index'])->name('add_property');
Route::post('/add_property', ['as' => 'Property','uses' => 'PropertyController@store'  ]);
Route::get('/property-detail/{id}/{title}', ['as' => 'Property','uses' => 'PropertyController@singleproperty'  ]);
Route::get('detail-property/{id}', ['as' => 'Property','uses' => 'PropertyController@singleproperty'  ]);



Route::get('/','IndexController@index');
Route::get('index','IndexController@index');
Route::post('/rating', ['as' => 'rating','uses' => 'RatingController@store']);



//       About us
Route::get('edit_aboutus', 'AboutUsController@edit_aboutus');
Route::post('edit_aboutus', 'AboutUsController@update');
Route::get('edit_privacy_policy', 'AboutUsController@edit_privacy_policy');
Route::post('edit_privacy_policy', 'AboutUsController@update_privacy_policy');
Route::get('edit_terms_condition', 'AboutUsController@edit_terms_condition');
Route::post('edit_terms_condition', 'AboutUsController@update_terms_condition');



//comment front routes hain wahn rakhna
Route::get('blog','BlogController@blog');
Route::get('blog_detail','PagesController@blog_detail');
Route::post('comment_post','BlogController@comment_post');
Route::post('reply_post','BlogController@reply_post');




//property dateail tabs
Route::get('property_detail_tabs','PagesController@property_detail_tabs');
Route::get('/about_us','PagesController@about_us');
Route::get('add_new_property','PagesController@add_new_property');
Route::get('agency_list','PagesController@agency_list');
Route::get('blog_detail','PagesController@blog_detail');
Route::get('blog_masonry','PagesController@blog_masonry');
Route::get('company_profile','PagesController@company_profile');
Route::get('compare_properties','PagesController@compare_properties');
Route::get('contact_us','PagesController@contact_us');
Route::get('terms_and_conditions','PagesController@terms_and_conditions');
Route::get('privacy','PagesController@privacy');


Route::get('Signup',array('as' => 'Signup', 'uses' =>'SignupController@Signup'));
Route::post('SignupForm', array('as' => 'SignupForm', 'uses' =>'SignupController@SignupForm'));
Route::get('/emailVerification/{token?}', array('as' =>'emailVerification', 'uses' => 'SignupController@emailVerification'));
Route::get('Signout',array('as' => 'Signout', 'uses' =>'SignupController@Signout'));

Auth::routes();

Route::get('/home', 'HomeController@index');
