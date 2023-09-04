<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function(){
  $html = '<h1> Học code tại unicode</h1';
  return $html;
});
// Route::get('unicode',function(){
//     return view('form');
//     // return 'Phương thức get của path /unicode';  
// });
// Route::post('unicode',function(){
//     return 'Phương thức post của path /unicode';
// });
// Route::delete('unicode',function(){
//     return 'Phương thức delete của path /unicode';
// });
// Route::patch('unicode',function(){
//      return 'Phương thức patch của path /unicode';
// });
 

    // Route::match(['get','post'],'unicode',function(){
    //     return $_SERVER['REQUEST_METHOD'];
    // }); // Phương thức match nhận trả về nhiều phương thức khác nhau

// Route::any('unicode',function(Request $request){
//     return $request -> method();
// });

Route::get('show-form',function(){
    return view('form');
});
Route::redirect('unicode','https://chat.zalo.me/');// chuyển trang