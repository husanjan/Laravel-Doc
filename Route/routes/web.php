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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    $res=2+3;
    $name='John';
//   return  view('home')->with('var',$res);
//   return  view('home',['var'=>$res,'name'=>$name]) ;
   return  view('home',compact('res','name')) ;
})->name('home');
Route::get('/about',function (){

    return view('about');

});
Route::get('/contact',function (){

    return view('contact');

});
 Route::match(['post','get','put'],'/contact',function (){
    if (!empty($_POST))
    {
        dump($_POST);
    }
    return view('contact');
})->name('contact');


 Route::view('/test','test',['test'=>'testdata'],301);
 Route::permanentRedirect('about','contact');

// Route::get('/post/{id}',function ($id){
//     return "Post $id";
// });
// pattern
//Route::get('/post/{id}/{slug}',function ($id,$slug){
//    return "Post $id|| $slug";
//})->where(['id'=>'[0-9]+',' '=>'[A-Za-z0-9-]']);

// pattern Routeserviceprovider  folder  boot function write
 Route::get('/post/{id}  ',function ($id){
     return "Post $id ";
 })->name('post');

  Route::prefix('admin')->name('admin.')->group(function (){
      Route::get('/posts',function (){
          return 'Posts List';
      });


Route::get('posts',function (){
    return 'Post Create';
});

Route::get('/post/create',function ()
{
   return 'Posts List';
});


Route::get('/post/{id}/edit',function ($id){
   return "Edit Post $id";
})->name('post');

  });
//Route::fallback(function (){
////     return redirect()->route('home');
//    abort(404,'OOPs ! Page note found');
//});
