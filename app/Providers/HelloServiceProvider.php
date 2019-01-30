<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Validator;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

          $value = (int)'';
          return $value % 2 == 0;

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
