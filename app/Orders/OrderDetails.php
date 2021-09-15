<?php


namespace App\Orders;

use App\Billing\PaymentGateway;

class OrderDetails{

    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function allOrderDetails(){
        
        $this->paymentGateway->setDiscount(250);

        return [
            'name' => 'Nassim',
            'Adresse' => '45 RUE 666 SAFI MOROCCO',
            
        ];
    }
}