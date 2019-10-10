<?php

//front-end:free user
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');



Route::get('/goalDetail/{id}','HomeController@detail');



//back-end:admin

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']], function(){
    Route::get('/', function () {
        return view('admin.index');
    });
        // Route::resource('admin', 'AdminController');
        // Route::get('/dashboard', 'AdminController@index');
});


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');


// Route::get('/profil', 'AdminController@show');
//
// Route::get('/sdg/{id}', 'sdgsController@show');
Route::get('/master_indikator', 'sdgsIndiMasterController@index');
// Route::get('/master_sub_indikator', 'sdgsIndiSub@show');
// Route::get('/indikator_pencapai/an_SDGs', 'sdgsIndiCapai@show');

?>
