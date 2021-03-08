<?php

use Illuminate\Support\Facades\Route;

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


/*
|--------------------------------------------------------------------------
| Front Routes (Website Pages)
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
    Route::get('/', 'CoreController@index')->name('welcome');
    Route::get('/about', 'CoreController@about')->name('about');
    Route::get('/products', 'CoreController@products')->name('products');
    Route::get('/enterprise', 'CoreController@enterprise')->name('enterprise');
    Route::get('/contact', 'CoreController@contact')->name('contact');
});

Route::get('/admin', function () {return redirect('/login');});

/*
|--------------------------------------------------------------------------
| Front Routes (Website Actions)
|--------------------------------------------------------------------------
*/
Route::post('/message', 'CoreController@message')->name('message');
Route::post('/subscribe', 'CoreController@subscribe')->name('subscribe');
Route::post('/visits', 'CoreController@visits')->name('visits');
Route::post('/enterprisesubmit', 'CoreController@enterprisesubmit')->name('enterprisesubmit');


/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
| Back Routes (Admin Dashboard Pages)
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => ['auth']], function () 
{
    Route::get('/home', 'AdminController@index')->name('home');
    Route::get('/pages', 'AdminController@pages')->name('admin-pages');
    Route::get('/products', 'AdminController@products')->name('admin-products');
    Route::get('/addproduct', 'AdminController@addproduct')->name('add-product');
    Route::get('/messages', 'AdminController@messages')->name('admin-messages');
    Route::get('/subscribers', 'AdminController@subscribers')->name('admin-subscribers');
    Route::get('/visits', 'AdminController@visits')->name('admin-visits');
    Route::get('/socialmedia', 'AdminController@socialmedia')->name('admin-socialmedia');
    Route::get('/logo', 'AdminController@logo')->name('admin-logo');
    Route::get('/setting', 'AdminController@setting')->name('admin-setting');
    Route::get('/landing', 'AdminController@landing')->name('admin-landing');
    Route::get('/getproduct/{id}', 'AdminController@getproduct')->name('getproduct');
    Route::get('/calendar', 'AdminController@calendar')->name('calendar');
    Route::get('/drafts', 'Blogs\BlogsController@draft')->name('admin-draft');
    Route::resource('/blogs', 'Blogs\BlogsController'); 
    Route::resource('/categories', 'Blogs\CategoriesController');
    Route::resource('/tags', 'Blogs\TagsController'); 
    Route::resource('/products', 'Products\ProductsController'); 
    Route::resource('/products-categories', 'Products\CategoriesController');
});

Route::group(['middleware' => ['auth','admin']], function () 
{
    Route::get('/members', 'AdminController@members')->name('admin-members'); 
});

/*
|--------------------------------------------------------------------------
| Back Routes (Admin Actions)
|--------------------------------------------------------------------------
*/

Route::post('/social', 'AdminController@social')->name('social');
Route::post('/getreceiveremail', 'AdminController@getreceiveremail')->name('getreceiveremail');
Route::post('/receiveremail', 'AdminController@receiveremail')->name('receiveremail');
Route::post('/getmessage', 'AdminController@getmessage')->name('getmessage');
Route::post('/getseo', 'AdminController@getseo')->name('getseo');
Route::post('/seo', 'AdminController@seo')->name('seo');
Route::post('/changelogo', 'AdminController@changelogo')->name('changelogo');

Route::post('/addcategory', 'AdminController@addcategory')->name('add-category');
Route::post('/editcategory', 'AdminController@editcategory')->name('edit-category');
Route::post('/getcategory', 'AdminController@getcategory')->name('getcategory');

Route::post('/createproduct', 'AdminController@createproduct')->name('create-product');
Route::post('/editproduct', 'AdminController@editproduct')->name('edit-product');
Route::post('/removeproductimage', 'AdminController@removeproductimage')->name('remove-product-image');
Route::post('/removeproduct', 'AdminController@removeproduct')->name('remove-product');

Route::post('/editinfo', 'AdminController@editinfo')->name('edit-info');
Route::post('/changepassword', 'AdminController@changepassword')->name('change-password');
Route::post('/enableuser', 'AdminController@enableuser')->name('enable-user');


Route::post('/addtodo', 'AdminController@addtodo')->name('add-todo');
Route::post('/gettodo', 'AdminController@gettodo')->name('get-todo');
Route::post('/edittodo', 'AdminController@edittodo')->name('edit-todo');
Route::post('/removetodo', 'AdminController@removetodo')->name('remove-todo');


Route::post('/createnote', 'AdminController@createnote')->name('create-note');
Route::post('/addnote', 'AdminController@addnote')->name('add-note');
Route::post('/getnote', 'AdminController@getnote')->name('get-note');
Route::post('/shownote', 'AdminController@shownote')->name('show-note');
Route::post('/editnote', 'AdminController@editnote')->name('edit-note');
Route::post('/removenote', 'AdminController@removenote')->name('remove-note');


Route::get('/getevent/{user}', 'AdminController@getevent')->name('get-event');
Route::post('/addevent', 'AdminController@addevent')->name('add-event');
Route::post('/updateevent', 'AdminController@updateevent')->name('update-event');
Route::post('/showevent', 'AdminController@showevent')->name('show-event');
Route::post('/editnevent', 'AdminController@editevent')->name('edit-event');
Route::post('/removeevent', 'AdminController@removeevent')->name('remove-event');

Route::post('/removecategory', 'Blogs\CategoriesController@removecategory')->name('remove-category');
Route::post('/removetag', 'Blogs\TagsController@removetag')->name('remove-tag');
Route::post('/removeblog', 'Blogs\BlogsController@removeblog')->name('remove-blog');
Route::post('/removeproduct', 'Products\ProductsController@removeproduct')->name('remove-product');
Route::post('/removeproductcategory', 'Products\CategoriesController@removecategory')->name('remove-product-category');

/*
|------------------------------------------------------------------------
|Edit Pages Routes
|------------------------------------------------------------------------
*/

Route::prefix('pages')->group(function () 
{
    Route::get('component', 'PagesController@componenteditform')->name('component');
    Route::post('component', 'PagesController@updatecomponent')->name('component');
    Route::get('card', 'PagesController@cardeditform')->name('card');
    Route::get('card/create', 'PagesController@cardCreate')->name('cardcreate');
    Route::post('card/update', 'PagesController@updatecard')->name('card');
    Route::get('card/destroy', 'PagesController@cardDestroy')->name('carddestroy');
    Route::post('card/store', 'PagesController@cardStore')->name('cardstore');
    
});


Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

