<?php

namespace App\Billing;

interface PaymentGatewayContract{

    public function setDiscount($discountAmount);

    public function charge($currentAmount);

    public function getDiscount();

    
}