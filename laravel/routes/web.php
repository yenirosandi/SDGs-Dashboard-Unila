<?php

//front-end:free user
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/goalDetail/{id}','HomeController@detailGoal');


//back-end:admin
Auth::routes();
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']], function(){
  Route::get('/', 'AdminController@index');
  Route::get('/goalDetail/{id}','AdminController@detailGoal');

  //Indikator
  Route::resource('master_indikator','sdgsIndiMasterController');
  Route::resource('master_sub_indikator','sdgsSubIndikatorController');
  Route::resource('pencapaian_indikator','sdgsCapaianIndiController');
  // Route::get('/pencapaian_indikator','sdgsCapaianIndiController@index');
  // // Route::get('/pencapaian_indikator/show  ','sdgsCapaianIndiController@show');
  // Route::post('pencapaian_indikator.store   ','sdgsCapaianIndiController@store')->name('pencapaian_indikator.store');
  // // Route::put('/pencapaian_indikator/update  ','sdgsCapaianIndiController@update');
  // Route::delete('/pencapaian_indikator.destroy ','sdgsCapaianIndiController@destroy')->name('pencapaian_indikator.destroy');
  // Route::get('pencapaian_indikator.edit ','sdgsCapaianIndiController@edit')->name('pencapaian_indikator.edit');
  // Route::get('get-indi-list','sdgsCapaianIndiController@getIndiList');
  // Route::get('get-subindi-list','sdgsCapaianIndiController@getSubIndiList');

  Route::get('pencapaian_indikator/getIndiList/{param}','sdgsCapaianIndiController@getIndi');
  Route::get('pencapaian_indikator/getSubIndiList/{param}','sdgsCapaianIndiController@getSubIndi');
  
  Route::get('pencapaian_indikator/{id_pencapaian}/edit/getIndiList/{param}','sdgsCapaianIndiController@getIndi');
  Route::get('pencapaian_indikator/{id_pencapaian}/edit/getSubIndiList/{param}','sdgsCapaianIndiController@getSubIndi');

  // Route::get('pencapaian_indikator','sdgsCapaianIndiController@findIndiName');

  Route::resource('sumber_data','sdgsSumberDataController');

  Route::resource('profil', 'UserController');

  Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

});
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

// //Master Indikator
// Route::get('/master_indikator', 'sdgsIndiMasterController@index');
// Route::post('/master_indikator/tambah', 'sdgsIndiMasterController@store')
// Route::get('/master_indikator/edit/{id_indikator}', 'sdgsIndiMasterController@edit');
// Route::get('/master_indikator/edit/{id_indikator}/update', 'sdgsIndiMasterController@update');

// Route::get('/master_indikator/hapus', 'sdgsIndiMasterController@delete');

// Route::get('/profil', 'AdminController@show');
// Route::get('/sdg/{id}', 'sdgsController@show');


// Route::get('/master_sub_indikator', 'sdgsIndiSub@show');
// Route::get('/indikator_pencapai/an_SDGs', 'sdgsIndiCapai@show');

?>
