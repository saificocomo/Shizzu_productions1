<?php
use App\ReadFeedback;
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

Route::get('index', function () {
    return view('index');
});

Route::get('auditionform', function () {
    return view('Auditionform');
});

Route::get('admincontact', function () {
    return view('admincontact');
});
Route::get('/read','FeedbackController@read');
route::get('videos','PagesController@getvideos');

route::get('achs','PagesController@getachs');

route::get('reg','PagesController@getreg');

Route::get('signin','PagesController@getsignin');

Route::get('admin','PagesController@getadmin');

Route::get('adform','PagesController@getadform');

Route::post('feedback', 'FeedbackController@submit');

Route::POST('order', 'AudiController@order');

Route::get('/readfeedback',function()
{
        $read=feedback::all();

       foreach($read as $feedback) 
        {
                return $feedback->name;

        }
});


Route:: get('insert',function() {
    DB::insert('insert into regusers (fullname,email,password,confirm_pass) values(?,?,?,?) ', ['saifullah','saifkhan','peersaib','peersaib']);
});


Route::get('/footer', function () {
    return view('footer');


});


route ::get('/feedback','Feedbackadmin@getfeedback');





/*
Route ::get('/read',function() {

    $results = DB:: select('select * from reguser where id =?' ,[1]);
     foreach($results as $post)
     {
         return $post->fullname;
     }
});

Route ::get('/update', function() {

    $update=DB::update('update regusers set fullname="thetamed" where id =?', [1]);
    return update;

});

Route ::get('/delete', function() {

    $deleted=DB::delete('delete from regusers where id =?', [1]);
    return deleted;

});
//Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
