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

Route::get('index', function () {
    return view('index');
});

route::get('videos','PagesController@getvideos');

route::get('achs','PagesController@getachs');

route::get('reg','PagesController@getreg');

route::get('login','PagesController@getlogin');




Route:: get('insert',function() {
    DB::insert('insert into regusers (fullname,email,password,confirm_pass) values(?,?,?,?) ', ['saifullah','saifkhan','peersaib','peersaib']);
});


Route::get('/footer', function () {
    return view('footer');
});






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

});*/
