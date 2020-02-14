<?php

// use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\DB;//n

//front-end:free user
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/goalDetail/{id}','HomeController@detailGoal');
Route::get('/goalDetail/indi/{id_indi}','HomeController@linkGrafikIndi')->name('grafik');


//back-end:admin
Auth::routes();
Route::group(['prefix'=>'admin','middleware'=>['auth','admin']], function(){
  Route::resource('/', 'AdminController');
  Route::get('/', 'AdminController@index');
  Route::get('/goalDetail/{id}','AdminController@detailGoal')->name('goal');
  Route::get('/goalDetail/indi/{id_indi}','AdminController@linkGrafikIndi')->name('grafikIndi');

  //Indikator
  Route::resource('master_indikator','sdgsIndiMasterController');
  Route::resource('master_sub_indikator','sdgsSubIndikatorController');

//  Route::resource('pencapaian_indikator','sdgsCapaianIndiController');

  Route::get('pencapaian_indikator/getIndiList/{param?}','sdgsCapaianIndiController@getIndi')->name('get.list.capaian.indikator');
  Route::get('pencapaian_indikator/getSubIndiList/{param?}','sdgsCapaianIndiController@getSubIndi')->name('get.list.capaian.subindi');
// Dicoba-coba YENI (baru)
  Route::get('pencapaian_indikator/nilaiSebelumnya/{tahun?}/{sub?}','sdgsCapaianIndiController@getNilaiSebelumnya')->name('get.list.capaian.nilaiSebelumnya');


  Route::get('pencapaian_indikator', 'sdgsCapaianIndiController@index');

  Route::get('pencapaian_indikator/tahun_sebelum', 'sdgsCapaianIndiController@tahun_sebelum')->name('tahun.sebelum');

  Route::get('pencapaian_indikator/{id_pencapaian}',  ['as' => 'pencapaian_indikator.edit', 'uses' => 'sdgsCapaianIndiController@edit']);
  Route::put('pencapaian_indikator/{id_pencapaian}/update',  ['as' => 'pencapaian_indikator.update', 'uses' => 'sdgsCapaianIndiController@update']);
  Route::post('pencapaian_indikator',  ['as' => 'pencapaian_indikator.store', 'uses' => 'sdgsCapaianIndiController@store']);
  Route::delete('pencapaian_indikator/{id_pencapaian}',  ['as' => 'pencapaian_indikator.destroy', 'uses' => 'sdgsCapaianIndiController@destroy']);

  Route::get('pencapaian_indikator/nilaiTahunLalu','sdgsCapaianIndiController@getNilaiTahunLalu')->name('getNS');

  Route::resource('sumber_data','sdgsSumberDataController');

  Route::get('form_pengajuan','formPengajuanController@index');
  Route::get('/form_pengajuan/{id_m_sumberdata}','formPengajuanController@downloadPDF');


  // Route::resource('profil', 'UserController');

  Route::get('profil', ['as' => 'profil.index', 'uses' => 'UserController@index']);

  Route::get('profil/ubahprofil/{user}',  ['as' => 'profil.edit', 'uses' => 'UserController@edit']);
  Route::put('profil/ubahprofil/{user}/update',  ['as' => 'profil.update', 'uses' => 'UserController@update']);

  Route::get('profil/ubahpassword',  ['as' => 'password.edit', 'uses' => 'UserController@showChangePasswordForm']);
  Route::post('profil/ubahpassword',  ['as' => 'password.update', 'uses' => 'UserController@changePassword']);

  // Route::get('/changePassword','UserController@showChangePasswordForm');
  // Route::post('/changePassword','UserController@changePassword')->name('changePassword');

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
