<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateway;
use App\Orders\OrderDetails;

class PayOrderController extends Controller
{
    

    public function store(OrderDetails $orderDetails){
       
         $orderDetails->allOrderDetails();
         //Nothing is changed because everytime store method is called it'll have new instance of PaymentGateway
         //This is by bind(...) function from AppServiceProvider.php
         
        dd(PaymentGateway::getInstance()->charge(3000));
    }
}
