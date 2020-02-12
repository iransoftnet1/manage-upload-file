<?php
Route::get('/rt', function () {
    return view("plgFile::index");
});











Route::group(['namespace' => 'IranSoftNet\MgUploadFile\controllers'], function()
{
    Route::get('/io', ['uses' => 'Home@index']);


});
