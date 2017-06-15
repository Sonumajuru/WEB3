<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middlewareGroups' => ['web']], function () {
    // Add your routes here

	    Route::auth();
	Route::get('/', function() {
    return view('welcome');
	});

	Route::get('/profile', 'HomeController@showProfile');
	Route::get('/create', 'PostController@create');
	//Obtaining values from the order table relationship witht the recipes table
	Route::get('orders', 'RecipeController@getAllorder');
	//Displaying the recipe table restricting it with the id of the user 
	Route::get('recipes', 'RecipeController@getRecipe');
	//Retrieving informations
	Route::get('recepta/{id}', 'RecipeController@getAllNumber');
	Route::get('about', 'RecipeController@getAbout')->name('about');
    Route::get('/edit', 'PasswordController@update');
    Route::resource('/edita', 'PasswordController');
    Route::get('/getPDF', 'PDFController@getPDF');
    
   	Route::post('upload', 'RecipeController@upload');
   
	Route::get('profile', 'UserController@profile');
    Route::post('profile', 'UserController@update_avatar');

	Route::group(['prefix' => 'api'], function(){
 	Route::resource('recipe', 'RecipeApiController');//returns all recipes in your database
 });

});

 Route::get('/home', 'HomeController@index');

Route::group( ['middleware' => 'auth' ], function()
{
    Route::get('create', 'PostController@create');
	Route::post('store', 'PostController@store');
	Route::get('index', 'PostController@index');
	Route::get('show/{id}', 'PostController@show');
 	Route::get('edit/{id}', 'PostController@edit');
 	Route::patch('update/{id}', 'PostController@update');
 	Route::get('delete/{id}', 'PostController@destroy');
});