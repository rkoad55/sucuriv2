<?php

Route::get('/', function () { return redirect('/admin/home'); });
Route::get('admin/darkmode', 'HomeController@darkmode');
Route::get('/darkmode', 'HomeController@darkmode');
Route::post('ajax/set_current_time_zone', array('as' => 'ajaxsetcurrenttimezone','uses' => 'AjaxController@setCurrentTimeZone'));
<<<<<<< HEAD

=======
Route::get('uploads/{filename}', function ($filename) {
    return file_get_contents(
        storage_path('sucuri2/' . $filename)
    );
}); 
>>>>>>> 9f70e3d9938569c081111be10d6dce216bdbcbd8
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
Route::post('login', 'Auth\LoginController@login')->name('auth.login');
Route::get('logout', 'Auth\LoginController@logout')->name('auth.logout');

Route::get('admin.zones.create' , 'Admin\UsersController@updateReseller')->name('admin.zones.create');
Route::get('admin.zones.create' , 'Admin\ZoneController@create')->name('admin.zones.create3');
Route::get('admin.zones.created' , 'Admin\ZoneController@created')->name('admin.zones.created');
Route::post('admin/zones/stored' , 'Admin\ZoneController@stored')->name('admin.zones.stored');
Route::get('sso', 'Auth\SSOController@ssologin');

// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

Route::post('admin/updates1', 'Admin\UsersController@updatemanage')->name('admin.updates1');
    
  
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 682dded0748d400b51254855d777a695ec5ca0f4
Route::get('insertWhiteURL' , 'Admin\DnsController@insertWhiteURL');
Route::get('admin/{zone}/urlpaths' , 'Admin\DnsController@urlpaths');   
Route::get('admin/{zone}/noncache' , 'Admin\DnsController@noncache');   
Route::get('insertNonCache' , 'Admin\DnsController@insertNonCache');
Route::get('admin/{zone}/blockcookie' , 'Admin\DnsController@blockcookie');  
Route::get('insertBlockCookie' , 'Admin\DnsController@insertBlockCookie');
Route::get('admin/{zone}/block_from_viewing' , 'Admin\DnsController@block_from_viewing');
Route::get('admin/{zone}/insertBlock_from_view' , 'Admin\DnsController@insertBlock_from_view'); 
Route::get('admin/{zone}/removeblock_fromview','Admin\DnsController@removeblock_fromview');


Route::get('admin/{zone}/ahttp_method' , 'Admin\DnsController@ahttp_method');
Route::get('admin/{zone}/insertahttp_method' , 'Admin\DnsController@insertahttp_method'); 
Route::get('admin/{zone}/removeahttp_method','Admin\DnsController@removeahttp_method');


Route::get('admin/{zone}/add_certificate' , 'Admin\DnsController@add_certificate');
Route::get('admin/{zone}/insertadd_certificate' , 'Admin\DnsController@insertadd_certificate');


Route::get('admin/{zone}/block_from_posting' , 'Admin\DnsController@block_from_posting');
Route::get('admin/{zone}/insertBlock_from_posting' , 'Admin\DnsController@insertBlock_from_posting'); 
Route::get('admin/{zone}/removeblock_fromposting','Admin\DnsController@removeblock_fromposting');
Route::get('insertIp' , 'Admin\DnsController@addIp'); 

Route::get('deleteIp' , 'Admin\DnsController@deleteIp'); 

Route::get('pauseIp' , 'Admin\DnsController@pauseIp'); 
Route::get('playIp' , 'Admin\DnsController@playIp'); 

Route::get('botFilter' , 'Admin\DnsController@botFilter'); 

Route::get('block_referer' , 'Admin\DnsController@blockReferer'); 

Route::get('removeBlockReferer' , 'Admin\DnsController@removeBlockReferer');   

Route::get('forwardQueryStringsMode' , 'Admin\DnsController@forwardQueryStringsMode');  

Route::get('blockUseragent' , 'Admin\DnsController@blockUseragent');  

Route::get('removeBlockUseragent' , 'Admin\DnsController@removeBlockUseragent'); 


Route::get('twofactorauth_path' , 'Admin\DnsController@twofactorauth_path'); 

Route::get('item_twofactorauth_path' , 'Admin\DnsController@item_twofactorauth_path');
<<<<<<< HEAD

Route::get('block_attacker_country' , 'Admin\DnsController@blockAttackerCountry'); 

Route::get('ids_monitoring' , 'Admin\DnsController@idsMonitoring');

Route::get('failOverTime' , 'Admin\DnsController@failOverTime'); 

=======

Route::get('block_attacker_country' , 'Admin\DnsController@blockAttackerCountry'); 

Route::get('ids_monitoring' , 'Admin\DnsController@idsMonitoring');

Route::get('failOverTime' , 'Admin\DnsController@failOverTime'); 

>>>>>>> 682dded0748d400b51254855d777a695ec5ca0f4
Route::get('addDomainAlias' , 'Admin\DnsController@addDomainAlias'); 

Route::get('removeDomainAlias' , 'Admin\DnsController@removeDomainAlias'); 

<<<<<<< HEAD
=======
=======

Route::get('insertIp' , 'Admin\DnsController@addIp');   
>>>>>>> 9f70e3d9938569c081111be10d6dce216bdbcbd8
>>>>>>> 682dded0748d400b51254855d777a695ec5ca0f4
Route::get('my_account','HomeController@my_account');

Route::get('admin.pacakge.destroy', 'Admin\PackageController@deletePckg')->name('admin.pacakge.destroy'); 

Route::get('admin.pacakge.{id}.edit','Admin\PackageController@getDataById')->name('admin.pacakge.edit'); 
Route::get('req/backToApproved/{id}', 'Admin\ZoneController@backToApproved')->name('req/backToApproved/{id}');
// Route::post('admin/delete', 'Admin\UsersController@deleteUsers');  
//route::get('admin.pacakge.{id}.edit','admin\packagecontroller@getdatabyid')->name('admin.pacakge.edit');
// Password Reset Routes...
Route::get('admin/zones/{id}', 'Admin\ZoneController@backToApproved')->name('admin/zones/{id}'); 
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::get('admin.Selecteddelete', 'Admin\UsersController@deleted')->name('admin.Selecteddelete');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () { 
      
    Route::get('/home', 'HomeController@index');

    Route::get('/settings', 'Admin\SettingsController@index');
    Route::resource('subUsers', 'Admin\SettingsController');

    Route::get('users/edit' , 'Admin\UsersController@updateLogo');

    Route::get('rejected', 'Admin\UsersController@rejectedRequestShow')->name('rejected');
    Route::post('abilities_mass_destroy', ['uses' => 'Admin\AbilitiesController@massDestroy', 'as' => 'abilities.mass_destroy']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::get('resellers', 'Admin\UsersController@listResellers')->name('listResellers');
    Route::get('update', 'Admin\UsersController@editDomain');
    Route::get('reject', 'Admin\UsersController@rejectDomain');
    Route::get('pending', 'Admin\UsersController@pending')->name('pending');
  
  
    
    Route::get('manage', 'Admin\UsersController@manage')->name('manage');
    // Route::get('resellers/create', 'Admin\UsersController@manage')->name('resellers.create');
Route::get('resellers/createPckg', 'Admin\PackageController@manage')->name('resellers.createPckg');
    
    Route::get('resellers/create', 'Admin\UsersController@createReseller')->name('resellers.create');
    Route::post('pckg/store', 'Admin\PackageController@store')->name('pckg.store');
    Route::post('resellers/store', 'Admin\UsersController@storeReseller')->name('resellers.store');
    Route::post('update', 'Admin\UsersController@updateDomain')->name('update');

    
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::get('users/{user}/zones', 'Admin\UsersController@listZones')->name('users.zones');
    Route::get('zones/spcreate', 'Admin\ZoneController@spcreate')->name("zones.spcreate");
    Route::post('zones/spstore', 'Admin\ZoneController@spstore')->name("zones.spstore");
    Route::get('zones/trashed', 'Admin\ZoneController@trashedZones')->name("zones.trash");
    Route::patch('zones/restore', 'Admin\ZoneController@restore')->name("zones.restore");

    
   // Route::resource('zones', 'Admin\ZoneController');
    Route::resource('zones', 'Admin\ZoneController');






    Route::get('{zone}/overview', 'Admin\ZoneController@show');
    //Route::get('{zone}/overview', 'Admin\ZoneController@pending');
    Route::get('{zone}/crypto', 'Admin\ZoneController@crypto');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 682dded0748d400b51254855d777a695ec5ca0f4
    Route::get('{zone}/aggressive', 'Admin\ZoneController@aggressive');
    Route::get('{zone}/domain', 'Admin\ZoneController@domainAlias');

    Route::get('{zone}/blockUser', 'Admin\ZoneController@blockUser');

    

    Route::get('{zone}/failoverTime', 'Admin\ZoneController@failoverTime');

    
    Route::get('{zone}/idsMonitoring', 'Admin\ZoneController@idsMonitoring');

    Route::get('{zone}/blockAttackerCountry', 'Admin\ZoneController@blockAttackerCountry');

    Route::get('{zone}/twofactorauth_path', 'Admin\ZoneController@twofactorauth_path');

    Route::get('{zone}/forwardQueryString', 'Admin\ZoneController@forwardQueryString');
  
    Route::get('{zone}/blockReferer', 'Admin\ZoneController@blockReferer');

Route::get('{zone}/playIp', 'Admin\ZoneController@playInternalIp'); 
 
Route::get('{zone}/deleteInternalIp', 'Admin\ZoneController@deleteInternalIp');
Route::get('{zone}/pause_internal_ip', 'Admin\ZoneController@pauseInternalIp');


<<<<<<< HEAD
=======
=======
>>>>>>> 9f70e3d9938569c081111be10d6dce216bdbcbd8
>>>>>>> 682dded0748d400b51254855d777a695ec5ca0f4
    Route::get('{zone}/performance', 'Admin\ZoneController@performance');
    Route::get('{zone}/caching', 'Admin\ZoneController@caching');

   Route::get('{zone}/seo', 'Admin\ZoneController@seo');
    Route::get('{zone}/addsite','Admin\ZoneController@addsite');
    Route::get('{zone}/deletesite','Admin\ZoneController@deletesite');
    Route::get('{zone}/origin', 'Admin\ZoneController@origin');


    Route::get('{zone}/network', 'Admin\ZoneController@network');
    Route::get('{zone}/pagerules', 'Admin\ZoneController@pageRules')->name('pagerules');
Route::get('{zone}/loadBalancers', 'Admin\ZoneController@loadBalancers');
Route::get('{zone}/loadBalancer', 'Admin\ZoneController@loadBalancer');
Route::get('{zone}/reports', 'Admin\ZoneController@reportsss');
    
    Route::put('{zone}/addPageRule','Admin\ZoneController@addPageRule');

    Route::post('{zone}/addSSL','Admin\ZoneController@addSSL');
    Route::put('{zone}/addSSL','Admin\ZoneController@addSSL');

    Route::delete('{zone}/customCertificate/delete','Admin\ZoneController@destroycustomCertificate');


    Route::patch('{zone}/editPageRule','Admin\ZoneController@editPageRule');

     Route::patch('{zone}/editUaRule','Admin\FirewallController@editUaRule');

    Route::patch('{zone}/sortPageRule','Admin\ZoneController@sortPageRule');

    Route::patch('{zone}/pageRuleStatus','Admin\ZoneController@pageRuleStatus');

     Route::patch('{zone}/uaRuleStatus','Admin\FirewallController@uaRuleStatus');
    Route::delete('{zone}/pagerules/delete','Admin\ZoneController@destroyPageRule');

    Route::delete('{zone}/wafrules/delete','Admin\ZoneController@destroyWAFRule');

    //stackpath waf rules
    //
    Route::put('{zone}/addWAFRule','Admin\ZoneController@addWAFRule');

    Route::patch('{zone}/editWAFRule','Admin\ZoneController@editWAFRule');



    Route::get('{zone}/content-protection', 'Admin\ZoneController@contentProtection');

    Route::get('{zone}/content-zone','Admin\ZoneController@contentZone');

    Route::get('{zone}/ownership', 'Admin\ZoneController@changeOwnership')->name("zones.ownership");

    Route::post('{zone}/ownership', 'Admin\ZoneController@storeOwnership')->name("zones.ownership");

    // Route::PATCH('{zone}/elsSetting','Admin\ZoneController@elsSetting');
    // Route::PATCH('elsSetting','Admin\ZoneController@elsSetting');
    // Route::patch('{zone}/dnsProxy','Admin\DnsController@dnsProxy');
    // Route::delete('{zone}/dns/delete','Admin\DnsController@destroy');

    Route::delete('{zone}/customDomain/delete','Admin\ZoneController@deleteCustomDomain');

    Route::put('{zone}/createCustomDomain','Admin\ZoneController@createCustomDomain');

    // Route::POST('{zone}/createDNS','Admin\DnsController@createDNS');

    // Route::POST('{zone}/createAccessRule','Admin\FirewallController@createAccessRule');

    // Route::POST('{zone}/createUaRule','Admin\FirewallController@createUaRule');

    Route::get('{zone}/dns','Admin\DnsController@index')->name('dns');
    Route::get('{zone}/analytics','Admin\AnalyticsController@index');

    //  Route::get('{zone}/logs','Admin\AnalyticsController@spLogs');
    //  Route::get('{zone}/spanalytics','Admin\SpAnalyticsController@index');
     
    // Route::post('{zone}/analytics','Admin\AnalyticsController@index');
    
    //   Route::post('{zone}/spanalytics','Admin\SpAnalyticsController@index');
     Route::get('{zone}/firewall','Admin\FirewallController@index');
    // Route::delete('{zone}/rule/delete','Admin\FirewallController@destroy');

    // Route::delete('{zone}/uaRule/delete','Admin\FirewallController@destroyUaRule');

    // Route::put('{zone}/updateFirewallRule','Admin\FirewallController@updateFirewallRule');

    //  Route::put('{zone}/updateUaRule','Admin\FirewallController@updateUaRule');

    //  Route::put('{zone}/updateWafRule','Admin\FirewallController@updateWafRule');
    // Route::put('{zone}/updateWafGroup','Admin\FirewallController@updateWafGroup');
    // Route::put('{zone}/updateWafPackage','Admin\FirewallController@updateWafPackage');

    // Route::put('{zone}/updateSetting','Admin\ZoneController@updateSetting');
    // Route::PATCH('{zone}/customActions','Admin\ZoneController@customActions');
    // Route::put('{zone}/dns/update','Admin\DnsController@update');
    // Route::delete('dns/destroy','Admin\DnsController@destroy')->name('dns.delete');
 
Route::get('delete1', 'Admin\UsersController@deleteUsers')->name('delete1'); 
//    Route::get('delete', 'Admin\UsersController@delete')->name('delete'); 

    Route::get('delete', 'Admin\UsersController@delete')->name('delete');  
    Route::get('pacakge', 'Admin\PackageController@index')->name('pacakge'); 



//     Route::get('analytics/{zone}/countries/{minutes}', 'Admin\AnalyticsController@countries')->name('analytics.countries');
//      Route::get('analytics/{zone}/traffic/{minutes}', 'Admin\AnalyticsController@traffic')->name('analytics.traffic');


//  Route::get('{zone}/ipDetails/{minutes}/{ipAddress}', 'Admin\AnalyticsController@ipDetails')->name('analytics.ipDetails');


//  Route::get('{zone}/wafGroupDetails/{pid}/{gid}', 'Admin\FirewallController@wafGroupDetails')->name('analytics.wafGroupDetails');

// Route::get('branding', 'Admin\BrandingController@showBrandingForm')->name('branding');
// Route::patch('branding', 'Admin\BrandingController@updateBranding')->name('branding');
 
//  Route::get('token', 'Admin\BrandingController@showTokens')->name('token');
//  Route::get('token/create', 'Admin\BrandingController@createToken')->name('token.create');
//  Route::post('token/store', 'Admin\BrandingController@storeToken')->name('token.store');
// Route::DELETE('token/destroy', 'Admin\BrandingController@destroyToken')->name('token.destroy');
// Route::get('els', 'Admin\ELSController@index')->name('els');

// Route::get('spels', 'Admin\ELSController@spindex')->name('spels');


// Route::get('panel_logs', 'Admin\PanelLogController@index')->name('panelLogs');
// Route::get('panel_logs/{zone}', 'Admin\PanelLogController@show')->name('showPanelLogs');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 682dded0748d400b51254855d777a695ec5ca0f4
Route::get('{zone}/removewhitedir/rr','Admin\DnsController@removewhitedir');
Route::get('/removewhitedir/rr','Admin\DnsController@removewhitedir');
Route::get('{zone}/removeblackdir/rr','Admin\DnsController@removeblackdir');
Route::get('/removeblackdir/rr','Admin\DnsController@removeblackdir');

Route::get('{zone}/removenoncache/rr','Admin\DnsController@removenoncache');
Route::get('/removenoncache/rr','Admin\DnsController@removenoncache');


Route::get('{zone}/removeblockcookie/rr','Admin\DnsController@removeblockcookie');
Route::get('/removeblockcookie/rr','Admin\DnsController@removeblockcookie');

Route::get('{zone}/white/{ip}','Admin\DnsController@whiteip');
Route::get('{zone}/removewhite/rr','Admin\DnsController@removewhite');

Route::get('/removewhite/rr','Admin\DnsController@removewhite');



Route::get('{zone}/black/{ip}','Admin\DnsController@blackip');
 
Route::get('{zone}/black/removeblack/rr','Admin\DnsController@removeblack');
Route::get('/removeblack/rr','Admin\DnsController@removeblack');
<<<<<<< HEAD
=======
=======
>>>>>>> 9f70e3d9938569c081111be10d6dce216bdbcbd8
>>>>>>> 682dded0748d400b51254855d777a695ec5ca0f4

// Route::get('els/{zone}', 'Admin\ELSController@show')->name('showELS');

// Route::post('els/uploadCustomLog', 'Admin\ELSController@uploadCustomLog')->name('uploadCustomLog');

// Route::post('els/convertLogToApache', 'Admin\ELSController@convertLogToApache')->name('convertLogToApache');

// Route::get('els/{zone}/clientview', 'Admin\ELSController@showClientView')->name('showELSClientView');
// Route::post('els/{zone}/clientview', 'Admin\ELSController@showClientView');
// Route::post('els/{zone}', 'Admin\ELSController@show');

// Packages 
// Route::resource('packages','Admin\PackageController');
Route::resource('packages', 'Admin\PackageController');

//Route::view("ok",'admin/1/analytics');
//Route::get('{zone}/analytics','Admin\DnsController@index');
//Route::get('{zone}/analytics','Admin\AnalyticsController@ip');
// Route::get('{zone}/white/{ip}','Admin\DnsController@whiteip');
// Route::get('{zone}/white/removewhite/rr','Admin\DnsController@removewhite');

// Route::get('/removewhite/rr','Admin\DnsController@removewhite');



Route::get('{zone}/white/{ip}','Admin\DnsController@whiteip');
Route::get('{zone}/removewhite/rr','Admin\DnsController@removewhite');

Route::get('/removewhite/rr','Admin\DnsController@removewhite');



Route::get('{zone}/black/{ip}','Admin\DnsController@blackip');
 
Route::get('{zone}/black/removeblack/rr','Admin\DnsController@removeblack');
Route::get('/removeblack/rr','Admin\DnsController@removeblack');

// Route::get('{zone}/firewall','Admin\FirewallController@index
//     ');
 Route::get('{zone}/{id}','Admin\FirewallController@store')->name('removepage');
//      Route::get('{zone}/','Admin\FirewallController@edit');
     // Route::get('{zone}/pageRuleStatus','Admin\ZoneController@pageRuleStatus');
//Route::get('{zone}/crypto', 'Admin\ZoneController@crypto');







// Route::get('{zone}/firewall','Admin\FirewallController@index');
      Route::get('{zone}/protect/ss','Admin\FirewallController@protecteddomain');
     
     
      Route::post('/users/{zone}/updates','Admin\UsersController@getupdates')->name('updates');  
     
     // Route::get('/zones/stored' , 'Admin\ZoneController@stored')->name('stored');
     
     
     


});


     
Route::get('trails/{id}/{date}','Admin\SucuriController@auditTrails');
Route::post('AuditTrails', 'Admin\SucuriController@ok');

Route::get('add/{id}','Admin\AddSSLController@add');
Route::get('clear_cache/{id}','Admin\AddSSLController@clearCache');
Route::get('AuditTrails/{id}','Admin\SucuriController@auditTrails');
Route::get('reports/{id}','Admin\SucuriController@reports');

//Route::get('AuditTrails/{id}','Admin\SucuriController@auditTrails');
Route::get('reports/{id}','Admin\SucuriController@reports');

Route::get('trails/{id}','Admin\SucuriController@auditTrails');
// Route::get('admin/{zone}/reportsettings', 'Admin\ZoneController@reportsettings');

Route::get('user.defaultLogo.{id}', 'Admin\UsersController@updatelogo')->name('user.defaultlogo.{id}'); 

// Auth::routes(); 
// Route::get('/home',  'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
