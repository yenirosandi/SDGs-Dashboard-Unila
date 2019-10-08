<?php
//front-end:free user
Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
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
=======

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//Front end location//
>>>>>>> 6231bba0a7c1afdd4f568ead5e15682fdcb81e34
