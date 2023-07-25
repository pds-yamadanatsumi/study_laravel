<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Application;
use App\Models\Number;
use App\Models\RandomNumber;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        //バインドと解決（bind）
        // バインド処理...Numberクラスのインスタンスを生成して返却
        app()->bind(Number::class, function (Application $app, array $parameters) {
            return new Number($parameters[0]);
        });

        //バインドと解決（singleton）
        app()->singleton('random', function (){
            return new RandomNumber();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            \App\Repository\UserRepositoryInterface::class,
            \App\Repository\UserRepository::class,
        );
    }
}
