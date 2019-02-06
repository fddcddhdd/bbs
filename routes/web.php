<?php
// トップページはスレッド一覧
Route::get('/', 'ThreadController@index');

// スレッド関連
Route::resource('/thread', 'ThreadController');

// ポスト関連
Route::resource('/post', 'PostController');
