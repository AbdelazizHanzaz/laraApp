<?php

namespace App\Billing;

use Illuminate\Support\Str;

define("CURRENCY", "USD");

class CreditPaymentGateway implements PaymentGatewayContract
{

    private $discount;

    public function __construct()
    {
        $this->discount = 0;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discountAmount)
    {
        $this->discount = $discountAmount;
    }

    public function charge($currentAmount)
    {
        $amount = $currentAmount - $this->getDiscount();
        $fees = $amount * 0.3;

        return [
            'amount' => $amount + $fees,
            'confirmation_number' => Str::random(),
            //'currency' => self::CURRENCY,
            'currency' => CURRENCY,
            'discount' => $this->getDiscount(),
            'fees' => $fees,
        ];
    }
}
