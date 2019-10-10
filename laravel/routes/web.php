<?php

//front-end:free user
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');



Route::get('/goalDetail/{id}','HomeController@detailGoal');



//back-end:admin
Auth::routes();
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']], function(){
    Route::get('/', function () {
        return view('admin.index');
    });
    //Master Indikator
    // Route::resource('master_indikator','sdgsIndiMasterController');
  });
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Master Indikator
Route::get('/master_indikator', 'sdgsIndiMasterController@index');
Route::post('master_indikator/tambah', 'sdgsIndiMasterController@store')
// Route::get('/master_indikator/edit/{id_indikator}', 'sdgsIndiMasterController@edit');
// Route::get('/master_indikator/hapus', 'sdgsIndiMasterController@delete');

// Route::get('/profil', 'AdminController@show');
// Route::get('/sdg/{id}', 'sdgsController@show');


// Route::get('/master_sub_indikator', 'sdgsIndiSub@show');
// Route::get('/indikator_pencapai/an_SDGs', 'sdgsIndiCapai@show');

?>
