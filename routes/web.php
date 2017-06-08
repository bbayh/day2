<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('testmodel',function(){
	$q = App\Post::all();
	$a = App\prodak::all();
	$b = App\pengguna::all();
	$c = App\pengaturan::all();
	return $q . $a . $b . $c;
});
Route::get('/prodak',function(){
	$q = App\prodak::all();
	return $q;
});
Route::get('/pengguna',function(){
	$q = App\pengguna::all();
	return $q;
});
Route::get('/pengaturan',function(){
	$q = App\pengaturan::all();
	return $q;
});
//Latihan Controller
Route::get('/test','MyController@percobaan');
Route::get('/test2','MyController@percobaan2');
Route::get('/test3','MyController@percobaan3');
Route::get('/test4','MyController@percobaan4');
Route::get('/test5','MyController@percobaan5');
Route::get('/test6','MyController@percobaan6');
Route::get('/test7','MyController@percobaan7');
Route::get('/test8','MyController@percobaan8');