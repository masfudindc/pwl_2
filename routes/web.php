<?php

use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\callback;

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


/**Routing menggunakan callback function
 * 
 */
// Route::get ('/hello', function () {
//     return 'Hello World';
// });



/**Praktikum 1 */

Route::get('/', function (){
   echo "Selamat Datang";
});

Route::get('/about', function (){
    echo "NIM : 2141720010 Nama : Masfudin Dwi Cahyo";
 });

Route::get('/articles/{id}', function($id) {
    return 'Articles '.$id;
});

// Route::get('/posts/{post}/comments/{comment}', function ($postId,$commentId) {
//     //
// });


/**Praktikum 2 */

