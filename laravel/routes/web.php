<?php
//front-end:free user
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//back-end:admin
Route::get('/login', function () {
    return view('admin/login');
});
Route::get('/dashboard', 'AdminController@index');
// Route::get('/profil', 'AdminController@show');
//
// Route::get('/sdg/{id}', 'sdgsController@show');
// Route::get('/master_indikator', 'sdgsIndiMaster@show');
// Route::get('/master_sub_indikator', 'sdgsIndiSub@show');
// Route::get('/indikator_pencapai/an_SDGs', 'sdgsIndiCapai@show');


?>
