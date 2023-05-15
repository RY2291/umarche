<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SampleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(){
        // サービスコンテナにserviceProviderTestというプロバイダー名で登録
        app()->bind('serviceProviderTest', function(){
            return 'サービスプロバイダーのテスト';
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
