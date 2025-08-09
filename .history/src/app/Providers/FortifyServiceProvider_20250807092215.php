<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use App\Http\


class FortifyServiceProvider extends ServiceProvider
{


  //public function register()
  //{
  //
  //}

  public function boot()
  {
    Fortify::createUsersUsing(CreateNewUser::class);
    Fortify::registerView(function () {
      return view('auth.register');
    });

    Fortify::loginView(function () {
      return view('auth.login');
    });

    RateLimiter::for('login', function (Request $request) {
      $email = (string) $request->email;
      return Limit::perMinute(10)->by($email . $request->ip());
    });
  }
}
