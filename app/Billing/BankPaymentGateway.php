<?php

namespace App\Billing;

use Illuminate\Support\Str;


define("CURRENCY", "USD");

class BankPaymentGateway implements PaymentGatewayContract
{

     //const CURRENCY = "MAD";
    //private static  $instance = null;
    private $discount;

    public function __construct()
    {
        $this->discount = 0;
    }

    /*public static function getInstance(){
        if(self::$instance == null){
             self::$instance = new PaymentGateway();
             
        }

        return self::$instance;
    }*/

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($DiscountAmount)
    {
        $this->discount = $DiscountAmount;
    }


    public function charge($currentAmount)
    {

        $amount = $currentAmount - $this->getDiscount();

        return [
            'amount' => $amount,
            'confirmation_number' => Str::random(),
            //'currency' => self::CURRENCY,
            'currency' => CURRENCY,
            'discount' => $this->getDiscount(),
        ];
    }
}
