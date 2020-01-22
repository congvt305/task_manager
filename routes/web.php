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

Route::prefix('customer')->group(function () {
    Route::get('index', function () {
        return view('modules.customers.index');
    });

    Route::get('create', function () {
        //form create customer
    });

    Route::post('store', function () {
        //xu ly luu du lieu tao khach hang
    });

    Route::get('{id}/show', function () {
        //hien thi thong tin chi tiet khach hang cung co ma mac dinh id
    });

    Route::get('{id}/edit', function () {
        //form chinh sua tt khach hang
    });

    Route::patch('{id}/update', function () {
        //xu ly luu du lieu thông tin khách hàng được chỉnh sửa thông qua patch từ form
    });

    Route::delete('{id}', function () {
        //xoa khach hang
    });
});
