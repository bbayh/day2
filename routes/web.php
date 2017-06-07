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