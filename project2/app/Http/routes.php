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

Route::get('/','WelcomeController@index');
Route::get('home','HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//------------------------------------------------------------------------//


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


//------------------------product-----------------------------
//view  Products 
Route::get('products','ProductController@index');

//create Product
Route::get('product/create',function(){ 
  
 
  return view('product/create');
  
});

Route::post('products/create','ProductController@create');

//--------------upload image--------------

/*Route::get('imageupload', ['as'=>'imageupload','uses'=>'ProductController@imageupload']);

Route::put('imageupload', ['as'=>'imageupload','uses'=>'ProductController@imageupload']);*/

//------------------------------------------

//--Edit product
Route::get('product/edit/{id}',function($id){
 $row=App\Product::find($id);
 
 return view("product/edit")->with("row",$row);
  
});


Route::post('products/update','ProductController@update');


//--delete project
Route::get('product/delete/{id}','ProductController@delete');



//upload file-------------//

 Route::post('upload', 'ProductController@imageuploads');
 
// Route::post('products/image-upload/{productId}','ProductController@uploadImages');

//--------------------------------------------





//-----------------------------------------
//---------------------category----------------
//view reguler task cat
Route::get('categories','CategoriesController@index');

//create task
Route::get('category/create',function(){ 
  
 
  return view('category/create');
  
});
Route::post('categories/create','CategoriesController@create');





//--Edit Reguller task category
Route::get('category/edit/{id}',function($id){
 $row=App\Categories::find($id);
 
 return view("category/edit")->with("row",$row);
  
});


Route::post('categories/update','CategoriesController@update');


//--delete project
Route::get('category/delete/{id}','CategoriesController@delete');

//----------------------------------------------------------------------
//------------------patrner------------------------------

//view partner
Route::get('partners','PartnerController@index');

//create partner
Route::get('partner/create',function(){ 
  
 
  return view('partner/create');
  
});
Route::post('partners/create','PartnerController@create');





//--Edit partner
Route::get('partner/edit/{id}',function($id){
 $row=App\Partner::find($id);
 
 return view("partner/edit")->with("row",$row);
  
});


Route::post('partners/update','PartnerController@update');


//--delete project
Route::get('partner/delete/{id}','PartnerController@delete');


 /*$categories = DB::table('categories')
            ->join('product', 'categories.id', '=', 'product.cat_id')
            ->get('name');


            /*->join('partners', 'partners.id', '=', 'product.partner_id')
            ->select('categories.name as categories_id', 'partners.name as partner_id ')  
            ->get();*/
       /* return view('product.create')->with('categoriess',$categories);*/

