<?php

namespace App\Http\Controllers;

use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGateway;
use App\Billing\PaymentGatewayContract;
use App\Orders\OrderDetails;

class PayOrderController extends Controller
{
    

    public function store(OrderDetails $orderDetails, PaymentGatewayContract $paymentGateway){
       
         dd($orderDetails->allOrderDetails(), $paymentGateway->charge(6000));
    }
}
