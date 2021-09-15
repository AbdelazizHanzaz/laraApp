<?php

namespace App\Billing;

use Illuminate\Support\Str;


define("CURRENCY", "USD");


class PaymentGateway
{

    //const CURRENCY = "MAD";
    private static  $instance = null;
    private $discount;

   private function __construct()
   {
       $this->discount = 0;
   }

    public static function getInstance(){
        if(self::$instance == null){
             self::$instance = new PaymentGateway();
             
        }

        return self::$instance;
    }




    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }


    public function charge($amount)
    {

        return [
            'amount' => $amount - $this->discount,
            'confirmation_number' => Str::random(),
            //'currency' => self::CURRENCY,
            'currency' => CURRENCY,
            'discount' => $this->discount,
        ];
    }
}


