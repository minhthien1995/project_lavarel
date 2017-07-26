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

Route::get('/', function () {
    return view('welcome');
});

Route::get('text', function () {
    return 123;
});
Route::get('thong-tin',function(){
	return "Tên tôi là Thiện";

});
//tĩnh
Route::get('thong-tin/chi-tiet',function(){
	return "Tôi là Minh Thiện </br> năm sinh: 1995";
});
//động
// Route::get('thong-tin/{hoten}',function($hoten){
// 	return "Họ và tên : $hoten";
// });
// Route::get('thong-tin/{hoten}/{sotuoi}',function($hoten,$sotuoi){
// 	return "Họ và tên : $hoten <br> tuoi: $sotuoi";
// });
Route::get('menu/{tenmon?}',function($tenmon = "KFC"){
	return "Tên món : $tenmon";
});
// route co dieu kien
Route::get('thong-tin/{hoten}/{sotuoi}',function($hoten,$sotuoi){
	return "Họ và tên : $hoten <br> tuoi: $sotuoi";
})->where(['hoten'=>'[a-zA-Z]+','sotuoi'=>'[0-9]{1,10}+']);

Route::get('call-view',function(){
	$ten = "Thiện đẹp zai";
	$admin = " làm Admin";
	return view('view',compact('ten','admin'));
});
Route::get('test-controller','WelcomeContronller@testAction');
Route::get('ho-chi-minh',['as'=>'hcm',function(){
	return "Hồ Chí Minh đẹp lắm tên người";
}]);

Route::group(['prefix'=>'thucdon'],function(){
	Route::get('bunmoc',function(){
	echo "bun moc";
});
    Route::get('bunthitnuong',function(){
	echo "bun thit nuong ";
});
    Route::get('bunmam',function(){
	echo "bun mam";
});
});
