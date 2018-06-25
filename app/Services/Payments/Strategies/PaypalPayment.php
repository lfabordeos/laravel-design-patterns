<?php

namespace App\Services\Payments\Strategies;

use App\Services\Payments\Strategies\Contracts\PaysContract;

class PaypalPayment implements PaysContract
{
    public function pay()
    {
        return "Paying via Paypal.";
    }
}