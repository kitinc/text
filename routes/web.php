<?php
use app\Http\Middleware\UserLogin;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//user

//login
Auth::routes();
Route::post('/user_login', 'LoginController@postAuth');
Route::get('/user_login','LoginController@getAuth');
//loginout
Route::get('/loginout','LoginController@loginout');
//create
Route::get('/user_create',function(){
return view('users.user_create');
});
Route::post('/user_create','UserController@create');

Route::get('password_change','Buycontroller@password_change')->middleware('user.login');
Route::get('user_history','Buycontroller@history')->middleware('user.login');
Route::get('user_buy','Buycontroller@buy')->middleware('user.login');
Route::get('/ticket_create','Buycontroller@gotobuy');
Route::get('/user','UserController@users')->middleware('user.login');
Route::get('/index',function(){
return view('users.index')->middleware('user.login');
});














//SEARCH
Route::post('/user','UserController@search');


//ticket
Route::get('/ticket_edit',function(){
  return view('tickets.ticket_edit');
});
// Route::get('/ticket_create',function(){
//   return view('tickets.ticket_create');
// });
// Route::post('/ticket_create','TicketController@create');
Route::get('/ticket','TicketController@tickets');


//seat
Route::get('/seat','SeatController@seats');











Route::get('/film_create','FilmController@add');
Route::post('/film_create','FilmController@create');

//admin_user_delete
Route::get('/delete','AdminUserController@delete');
//admin_user_ticket
Route::get('/user_ticket','AdminUserController@admim_userticket');
//AdminUser
Route::get('admin_create','AdminUserController@showCreate');
Route::get('admin','AdminUserController@admin_login');
Route::get('admin_edit','AdminUserController@getid');
Route::post('/success','AdminUserController@postid');
Route::get('/success','AdminUserController@postid');
