<?php
namespace IranSoftNet\MgUploadFile\Providers;
//Iransoftnet\ManageUploadFile\Providers\ManageUploadFileServiceProvider

use Illuminate\Support\ServiceProvider;

class ManageUploadFileServiceProvider extends ServiceProvider
{

    public function boot()
    {
//dd("sa");
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');
        $this->loadViewsFrom(__DIR__ . '/../views',"plgFile");
        $this->publishes([
            __DIR__.'/../views' => resource_path('views/vendor/namePlugin'),
        ]);
        database_path("migrations");

    }


    public function register()
    {

    }

}