<?php


namespace App\Orders;

use App\Billing\PaymentGatewayContract;

class OrderDetails{

    private $paymentGateway;

    public function __construct(PaymentGatewayContract $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function allOrderDetails(){
        
        $this->paymentGateway->setDiscount(250);
        //PaymentGateway::getInstance()->setDiscount(250);

        return [
            'name' => 'ABDELAZIZ',
            'Adresse' => '45 RUE 666 SAFI MOROCCO',
            'Email' => 'email@exemple.com',
            'Phone' => '+2126000000',
        ];
    }
}