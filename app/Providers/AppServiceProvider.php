<?php

namespace App\Providers;

use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Billing\BankPaymentGateway;
use App\Models\Channel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
          $this->app->singleton(PaymentGatewayContract::class, function($app){

              if(request()->has("credit")){
                return new CreditPaymentGateway();
              }
                return new BankPaymentGateway();

              
          });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       //Option1: sharing data for all views
      //view()->share('channels', Channel::orderBy('name')->get());

        //Option2: view composers
        //sending data for specific view 
        view()->composer(['channel.index','post.create'], function ($view) {
            $view->with('channels', Channel::orderBy('name')->get());
        });

    }
}
