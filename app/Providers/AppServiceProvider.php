<?php

namespace App\Providers;

use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Billing\BankPaymentGateway;
use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;


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
        //
    }
}
