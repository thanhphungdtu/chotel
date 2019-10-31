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

/*Route::get('/', function () {
    return view('welcome');
});*/

//admin
Route::group(['namespace' =>'Admin','prefix'=>'admin','middleware'=>'AdminLogin'],function () {
    //tong quan
    Route::get('/',['as'=>'admin.index.index','uses'=>'IndexController@index']);
    //danh muc
    Route::group(['prefix'=>'danh-muc'],function(){
        Route::get('/',['as'=>'admin.roomtype.index','uses'=>'RoomTypeController@index']);
        Route::get('/add',['as'=>'admin.roomtype.getadd','uses'=>'RoomTypeController@getAdd'])->middleware(['can:admin']);
        Route::post('/add',['uses'=>'RoomTypeController@postAdd']);
        Route::get('/edit/{id}',['as'=>'admin.roomtype.getEdit','uses'=>'RoomTypeController@getEdit'])->middleware(['can:admin']);
        Route::post('/edit/{id}',['uses'=>'RoomTypeController@postEdit']);
        Route::get('/delete/{id}',['as'=>'admin.roomtype.getdelete','uses'=>'RoomTypeController@getDelete'])->middleware(['can:admin']);
    });
    //quan lí phòng(room)
    Route::group(['prefix'=>'phong'],function(){
        Route::get('/',['as'=>'admin.room.index','uses'=>'RoomController@index']);
        Route::get('/add',['as'=>'admin.room.getadd','uses'=>'RoomController@getAdd'])->middleware(['can:admin']);
        Route::post('/add',['uses'=>'RoomController@postAdd']);
        Route::get('/edit/{id}',['as'=>'admin.room.getEdit','uses'=>'RoomController@getEdit'])->middleware(['can:admin']);
        Route::post('/edit/{id}',['uses'=>'RoomController@postEdit']);
        Route::get('/delete/{id}',['as'=>'admin.room.getdelete','uses'=>'RoomController@getDelete'])->middleware(['can:admin']);
    });
    //quan lí tiện ích(utilities)
    Route::group(['prefix'=>'tien-ich'],function(){
        Route::get('/',['as'=>'admin.utilitie.index','uses'=>'UtilitieController@index']);
        Route::get('/add',['as'=>'admin.utilitie.getadd','uses'=>'UtilitieController@getAdd'])->middleware(['can:admin']);
        Route::post('/add',['uses'=>'UtilitieController@postAdd']);
        Route::get('/edit/{id}',['as'=>'admin.utilitie.getEdit','uses'=>'UtilitieController@getEdit'])->middleware(['can:admin']);
        Route::post('/edit/{id}',['uses'=>'UtilitieController@postEdit']);
        Route::get('/delete/{id}',['as'=>'admin.utilitie.getdelete','uses'=>'UtilitieController@getDelete'])->middleware(['can:admin']);
    });
    //quan lí gioi thieu(about)
    Route::group(['prefix'=>'gioi-thieu'],function(){
        Route::get('/',['as'=>'admin.aboutus.index','uses'=>'AboutUSController@index']);
        Route::get('/add',['as'=>'admin.aboutus.getadd','uses'=>'AboutUSController@getAdd'])->middleware(['can:admin']);
        Route::post('/add',['uses'=>'AboutUSController@postAdd']);
        Route::get('/edit/{id}',['as'=>'admin.aboutus.getEdit','uses'=>'AboutUSController@getEdit'])->middleware(['can:admin']);
        Route::post('/edit/{id}',['uses'=>'AboutUSController@postEdit']);
        Route::get('/{action}/{id}',['as'=>'admin.aboutus.action','uses'=>'AboutUSController@action'])->middleware(['can:admin']);
    });
    //quan lí nguoi dung(users)
    Route::group(['prefix'=>'nguoi-dung'],function(){
        Route::get('/',['as'=>'admin.user.index','uses'=>'UserController@index']);
        Route::get('/add',['as'=>'admin.user.getadd','uses'=>'UserController@getAdd'])->middleware(['can:admin']);
        Route::post('/add',['uses'=>'UserController@postAdd']);
        Route::get('/edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit'])->middleware(['can:admin']);
        Route::post('/edit/{id}',['uses'=>'UserController@postEdit']);
        Route::get('/delete/{id}',['as'=>'admin.user.getdelete','uses'=>'UserController@getDelete'])->middleware(['can:admin']);
    });
    //quản lý liên hệ
    Route::group(['prefix'=>'lien-he'],function(){
        Route::get('/',['as'=>'admin.contact.index','uses'=>'ContactController@index']);
        Route::get('/delete/{id}',['as'=>'admin.contact.getdelete','uses'=>'ContactController@getDelete'])->middleware(['can:admin']);
    });
    //check out
    Route::group(['prefix'=>'thanh-toan'],function(){
        Route::get('/',['as'=>'admin.transaction.list','uses'=>'TransactionController@getList'])->middleware(['can:admin']);
        Route::get('/{action}/{id}',['as'=>'admin.transaction.action','uses'=>'TransactionController@action'])->middleware(['can:admin']);
        //export file dat phong
        Route::get('/export', ['as'=>'admin.transaction.export','uses'=>'TransactionController@csv_export'])->middleware(['can:admin']);
    });
});
Route::group(['namespace' =>'Auth'],function () {
    Route::get('/auth/login',['as' =>'admin.auth.getlogin','uses'=>'LoginController@getLogin']);
    Route::post('/auth/login',['uses'=>'LoginController@postLogin']);
    Route::get('/auth/logout',['as' =>'admin.auth.getlogout','uses'=>'LoginController@getLogout']);
});
//chotel


Route::group(['namespace' =>'Chotel'],function () {
    Route::get('/',['as'=>'chotel.index.index','uses'=>'IndexController@index']);

    Route::get('/cac-phong',['as'=>'chotel.roomtype.index','uses'=>'RoomTypeController@index']);
    Route::get('/loai-phong/{slug}-{id}',['as'=>'chotel.roomtype.cat','uses'=>'RoomTypeController@cat']);

    Route::get('/gioi-thieu',['as'=>'chotel.about.index','uses'=>'AboutController@index']);
    //lien he
    Route::get('/lien-he',['as'=>'chotel.contact.index','uses'=>'ContactController@index']);
    Route::post('/lien-he',['as'=>'chotel.contact.index','uses'=>'ContactController@postIndex']);
    //chitiet
    Route::get('/chi-tiet/{slug}-{id}',['as'=>'chotel.roomtype.detail','uses'=>'RoomTypeController@detail']);

    //booking
    Route::get('/booking/{id}',['as'=>'chotel.booking','uses'=>'BookingController@getBooKing']);
    Route::post('/booking/{id}',['as'=>'chotel.booking','uses'=>'BookingController@postBooKing']);
    Route::get('/booking-confirm',['as'=>'chotel.booking.cofirm','uses'=>'BookingController@booKingConfirm']);

    Route::post('/save-booking',['as'=>'chotel.booking.save','uses'=>'BookingController@saveInfoBooking']);

});



