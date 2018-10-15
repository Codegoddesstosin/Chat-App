<?php
use App\Events\MessagePosted;
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

//Routes for chat app
Route::get('/', function () {
    return view('First');
});

Route::get('/chat', function () {
    return view('welcome');
})->middleware('auth');


Route::get('/messages', function () {

    return App\Message::with('user')->get();
  //return App\Message::with('user')->get(); 

})->middleware('auth');


Route::post('/messages', function () {
 // store the new message
 $user = Auth::user();
 
  $message = $user->messages()->create([
 'message' => request()->get('message')

]);

 //announce that the new message has been posted
     broadcast(new MessagePosted ($message, $user))->toOthers();

  return ['status' => 'ok'];
  
})->middleware('auth'); 




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
