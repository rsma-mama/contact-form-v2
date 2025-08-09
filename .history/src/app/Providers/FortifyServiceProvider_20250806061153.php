<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // ログイン画面のビュー
        Fortify::loginView(function () {
            return view('auth.login');
        });

        // 登録画面のビュー
        Fortify::registerView(function () {
            return view('auth.register');
        });
        RateLimiter::for('')
    }
}