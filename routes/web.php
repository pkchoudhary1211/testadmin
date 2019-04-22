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

Route::get('/', function () {
    return redirect()->route('usershome');

});
Route::get('profile', function () {
   return(" verified Users");
})->middleware('verified');

Auth::routes();

//Auth::routes(['verify' => true]);

// Auth::routes();
Route::group(['middleware' => 'auth'], function(){
			
			Route::get('Dashboard','Pages@Dashboard')->name('Dashboard')->middleware(['permission:newpost']);
			Route::post('UploadPost','Pages@UploadPost')->name('UploadPost')->middleware(['permission:newpost']);
			Route::get('/home', 'HomeController@index')->name('home');
			Route::get('Users','Pages@Users')->name('Users');
			Route::post('AddUsers','Pages@AddUsers')->name('AddUsers')->middleware(['permission:adduser']);
			Route::get('/logout', 'HomeController@logout')->name('logout');
			Route::post('/store','Users@store')->name('store')->middleware(['permission:adduser']);
			Route::get('ViewPost/{id}','Pages@ViewPost')->name('viewpost')->middleware(['permission:viewpost']);
			Route::get('Updatepost/{id}','Pages@updatePost')->name('UpdatePost')->middleware(['permission:newpost']);
			Route::post('UpdatePostData','Pages@UpdatePostData')->name('updatepostdata')->middleware(['permission:editpost']);
			Route::get('postDetails','Pages@postDetails')->name('postDetails')->middleware(['permission:viewpost']);
			Route::get('add','Pages@addpage')->name('add')->middleware(['permission:adduser']);
			Route::any('addpostpage','Pages@addpage')->name('addpostpage');
			Route::get('addpost','Pages@addpostpage')->name('addpost')->middleware(['permission:newpost']);
			Route::get('/home', 'HomeController@index')->name('home');
			//Route::get('/home', 'HomeController@index')->name('home');
			Route::get('rules','rules@rules')->name('rules')->middleware(['permission:addrole']);
			Route::get('permission','rules@permission')->name('permission')->middleware(['permission:addpermission']);
			Route::post('rulessubmit','rules@rulessubmit')->name('rulessubmit')->middleware(['permission:addrole']);
			Route::post('permissionSubmit','rules@presubmit')->name('presubmit')->middleware(['permission:addpermission']);
			//Route::post('rulessubmit','rules@rulessubmit')->name('rulessubmit');
			Route::get('ruleslist','rules@ruleslist')->name('ruleslist')->middleware(['permission:viewrole']);
			Route::get('preslist','rules@preslist')->name('preslist')->middleware(['permission:viewpermission']);
			Route::get('editrole/{id}','rules@editrole')->name('editrole')->middleware(['permission:editrole']);
			Route::post('roleupdate','rules@roleupdate')->name('roleupdate')->middleware(['permission:editrole']);
			Route::get('categatypage','Pages@categatypage')->name('categatypage')->middleware(['permission:newpost']);
			//Route::post('rulessubmit','rules@rulessubmit')->name('rulessubmit');
			Route::post('Uploadcategary','Pages@Uploadcategary')->name('Uploadcategary')->middleware(['permission:newpost']);
			Route::get('profile','AdminController@profile')->name('adminprofile');
			Route::get('edituser/{id}','AdminController@EditUser')->name('edituser')->middleware(['permission:useredit']);
			Route::post('userroleupdate','AdminController@userroleupdate')->name('userroleupdate')->middleware(['permission:useredit']);
			Route::get('deletepost/{id}','AdminController@DeletePost')->name('deletepost')->middleware(['permission:deletepost']);


//Route::get('/logout', 'HomeController@logout');
});
Route::get('aheader','UserContoller@adminheader')->name('adminheader');
Route::get('usershome','UserContoller@Home')->name('usershome');
Route::get('singleview/{id}','UserContoller@SinglePostView')->name('singleview');
Route::post('postcomment','commentsController@postcomment')->name('postcomment');
Route::get('viewcont/{id}','commentsController@viewcont')->name('viewcont');
Route::get('scrollview/{id}','commentsController@scrollview')->name('scrollview');
Route::get('check','Pages@check')->name('check');
Route::post('search','UserContoller@Search')->name('search');
Route::get('contact','UserContoller@contact')->name('contact');
Route::post('sendmail','UserContoller@sendmail')->name('sendmail');
Route::get('adminlogin','AdminController@adminlogin')->name('AdminController');
Route::get('userlogin','UserContoller@userlogin')->name('userlogin');
Route::get('resetlink','UserContoller@resetlink')->name('resetlink');
Route::get('resetpassword','UserContoller@resetpassword')->name('resetpassword');
Route::get('tryto','UserContoller@notvalid')->name('tryto');
Route::get('userregistration','AdminController@userregistration')->name('userregistration-');
Route::post('createaccount','UserContoller@CreateAccount')->name('createaccount');
//Route::post('link','Passwordlink@sendEmail')->name('link');
Route::post('subscribe','UserContoller@subscribe')->name('subscribe');
	// Route::fallback(function () {
	//     return view ('pagenotfound');
	// });

