<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;


class FortifyServiceProvider extends ServiceProvider
{


  //public function register()
  //{
    //
  //}

  public function boot()
  {
    