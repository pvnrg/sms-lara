<?php

Auth::routes();

Route::post('sign-in', 'Auth\LoginController@loginA');

Route::get('/home', 'HomeController@index')->name('home'); 


Route::group(['middleware' => 'auth'], function () {

    Route::get('/', 'HomeController@redirect');
    Route::get('/proposal', 'Admin\PartyController@proposal_pdf');

    Route::get('/ewr', 'Admin\PartyController@ewr_pdf');

    Route::get('/citipower', 'Admin\PartyController@citipower_pdf');
    
    Route::get('/spausnet', 'Admin\PartyController@spausnet_pdf');
    
    Route::get('/jemna', 'Admin\PartyController@jemna_pdf');
    
    Route::get('/ue', 'Admin\PartyController@ue_pdf');

    Route::group(['prefix' => 'client'], function () {
        Route::get('/', 'Front_End\Client\DashboardController@index');
        Route::get('/change_password', 'Front_End\Client\ClientController@change_password');
        Route::post('/update_password', 'Front_End\Client\ClientController@update_password');  
        Route::get('/my_profile', 'Front_End\Client\ClientController@my_profile');
        Route::post('/update_profile', 'Front_End\Client\ClientController@update_profile');   
        Route::post('/upload_image', 'Front_End\Client\ClientController@upload_image');   

    });
    Route::group(['prefix' => 'agent'], function () {
        Route::get('/', 'Front_End\Agent\DashboardController@index');     
    });

    Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
         
        Route::get('/', 'Admin\AdminController@index')->name('adminHome');
        
        
        //generator
        Route::get('/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
        Route::post('/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);

        //Users
        Route::resource('/users', 'Admin\UsersController');
        Route::resource('/transactions', 'Admin\TransactionsController');
        Route::post('user-status-data', ['as' => 'StatusChangeController', 'uses' => 'Admin\UsersController@update_status']);

        // Route::get('/users/edit', 'Admin\UsersController@edit')->name('user_edit');
        // Route::post('/users/destroy', 'Admin\ProductController@destroy');

        //Roles & Permissions
        Route::get('/give-role-permissions', 'Admin\AdminController@getGiveRolePermissions');
        Route::post('/give-role-permissions', 'Admin\AdminController@postGiveRolePermissions');
        Route::get('roles/datatable', 'Admin\RolesController@datatable');

        // // Route::group(['prefix' => 'roles'], function () {
        //     Route::get('/roles', 'Admin\RolesController@index')->name('roles');
        //     Route::get('/roles/create', 'Admin\RolesController@create')->name('role_create');
        //     Route::get('/roles/show', 'Admin\RolesController@show')->name('role_view');
        //     Route::get('/roles/edit', 'Admin\RolesController@edit')->name('role_edit');
        //     Route::post('/roles/destroy', 'Admin\RolesController@destroy');
        // // }); 
        Route::resource('/roles', 'Admin\RolesController');
        Route::resource('/transaction_types', 'Admin\TransactionTypesController');
        Route::resource('/fee_schedules', 'Admin\FeeSchedulesController');
        Route::resource('/client_classes', 'Admin\ClientClassesController');
        Route::resource('/sec_ids', 'Admin\SecIdsController');
        Route::resource('/employeetypes', 'Admin\EmployeetypesController');
        Route::resource('/jobcategory', 'Admin\JobCategoryController');
        Route::resource('/jobexperience', 'Admin\JobExperienceController');
        Route::resource('/specializations', 'Admin\SpecializationsController');
        Route::resource('/skills', 'Admin\SkillsController');
        Route::resource('/job', 'Admin\JobController');
        
        Route::get('permissions/datatable', 'Admin\PermissionsController@datatable');
        Route::resource('/permissions', 'Admin\PermissionsController');

        //Profile
        Route::get('/profile', 'Admin\ProfileController@index')->name('profile.index');
        Route::get('/profile/edit', 'Admin\ProfileController@edit')->name('profile.edit');
        Route::patch('/profile/edit', 'Admin\ProfileController@update');
        Route::get('/profile/change-password', 'Admin\ProfileController@changePassword')->name('profile.password');
        Route::patch('/profile/change-password', 'Admin\ProfileController@updatePassword');

        //Products
        Route::resource('/products', 'Admin\ProductController');
        Route::get('/products/create', 'Admin\ProductController@create');
        Route::post('/products/deleteimage', 'Admin\ProductController@deleteimage');
        Route::get('/make_feature/{id}','Admin\ProductController@make_feature');
        Route::get('/products-data/', 'Admin\ProductController@datatable');

        //Category
        Route::resource('/brand', 'Admin\BrandController');

        //Category
        Route::resource('/category', 'Admin\CategoryController');
        
        //Packages
        Route::resource('/packages', 'Admin\PackageController');
        Route::get('/package-data/', 'Admin\PackageController@datatable');
        Route::get('/packages/duplicate/{id}', 'Admin\PackageController@duplicate');

        //package-folder
        Route::post('/packages/addfolder/{id}', 'Admin\PackageController@addfolder');
        Route::get('/packages/addfolder/{id}', 'Admin\PackageController@addfolder');
        Route::delete('/packages/deletefolder/{id}', 'Admin\PackageController@deletefolder');
        Route::get('/folder/rename/{id}', 'Admin\PackageController@rename');

        //Oppurtunity
        Route::get('/opportunity', 'Admin\UsersController@opportunity');

        //Contractor
        Route::resource('/contractor', 'Admin\ContractorController');

        //Settings
        Route::resource('/settings', 'Admin\SettingsController');

        //Party ( Customer )
        Route::resource('/customer', 'Admin\PartyController');
        Route::get('/customer-data/', 'Admin\PartyController@datatable');
        Route::post('/customer/changeSales','Admin\PartyController@changeSales');

        //customer-offer
        Route::post('/customer/showpackage', 'Admin\PartyController@showpackage');
        Route::post('/customer/createoffer/{id}', 'Admin\PartyController@createoffer');
        Route::get('/customer/createoffer/{id}', 'Admin\PartyController@createoffer'); 
        Route::get('/customer/offerpdf/{id}', 'Admin\PartyController@offerpdf'); 
        Route::get('/customer/offer/{id}', 'Admin\PartyController@mode'); 
        Route::get('/offers/{id}', 'Admin\PartyController@offers'); 
        Route::get('/viewoffer/{id}', 'Admin\PartyController@viewoffer'); 
        Route::delete('/deleteoffer/{id}', 'Admin\PartyController@deleteoffer');
        Route::post('/changestatusoffer/{id}', 'Admin\PartyController@changestatusoffer');
        Route::get('/ajaxLoadOffers/{id}', 'Admin\PartyController@ajaxviewoffer'); 
        Route::get('/nearmap/{id}', 'Admin\PartyController@nearmap'); 
        Route::post('/upload/nearmap/{id}','Admin\PartyController@upload_nearmap');
        Route::get('/resend-offer/{id}', 'Admin\PartyController@resend_offer'); 
        
       // Route::get('/customer/createJob/{id}', 'Admin\PartyController@createJob'); 

        
        //customer-folder
        Route::post('/customer/addfolder/{id}', 'Admin\PartyController@addfolder');
        Route::get('/customer/addfolder/{id}', 'Admin\PartyController@addfolder');
        Route::delete('/customer/deletefolder/{id}', 'Admin\PartyController@deletefolder');
        Route::get('/folder/rename/{id}', 'Admin\PartyController@rename');
        
        //Setting
        Route::resource('/settting', 'Admin\SetttingController');

        //Job
        Route::post('/change_date/{id}','Admin\JobController@change_date');
        Route::get('/questions/{id}','Admin\JobController@questions');
        Route::post('/questions/{id}/update','Admin\JobController@questionsUpdate');
        Route::resource('/job', 'Admin\JobController');
        Route::get('/job-data/', 'Admin\JobController@datatable');
        Route::get('/email_to_retailer/{id}','Admin\JobController@email_to_retailer');
        Route::get('/pre_approval_number/{id}','Admin\JobController@pre_approval_number');
 
    });

});

Route::get('/sign-form/{id}','SignformController@sign_form');
Route::post('/sign-form/{id}','SignformController@sign_form');

Route::get('/complete-sign-form/{id}','SignformController@complete_sign_form');
Route::post('/complete-sign-form/{id}','SignformController@complete_sign_form');

Route::get('/form-submit','SignformController@form_submit');

Route::get('/capsuleowner', function()
{
	
   Artisan::call('CapsuleownerCommand:capsuleownerCommand');

});

Route::get('/getopportunity', function()
{
	
   Artisan::call('Getopportunity:getopportunity');

});

Route::get('/callsolar', function()
{
	
   Artisan::call('Solar:solar');

});


Route::get('/get-party', function()
{
	
   Artisan::call('GetParty:getparty');

});

Route::get('/follow-up-mail', function()
{
	
   Artisan::call('FollowUpMail:follow_up_mail');

});

Route::get('/reminder-sales', function()
{
	
   Artisan::call('ReminderSales:reminder_sales');

});

Route::get('/call-capsule', function()
{
	
   Artisan::call('CallCapsule:callcapsule');

});





