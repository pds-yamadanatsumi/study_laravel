<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;


class CustomValidationServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('custom_category', function ($attribute, $value, $parameters){
            return $value === 'red';
        });
    }
}
