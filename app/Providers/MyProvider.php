<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyProvider extends ServiceProvider
{
    public function register():void
    {
        //
    }

    public function boot():void
    {
//        dd('Something happen in MyProvider');
    }
}