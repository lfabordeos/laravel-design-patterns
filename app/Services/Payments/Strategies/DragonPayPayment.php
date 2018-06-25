<?php

namespace App\Services\Payments\Strategies;

use App\Services\Payments\Strategies\Contracts\PaysContract;

class DragonPayPayment implements PaysContract
{
    public function pay()
    {
        return "Paying via DragonPay.";
    }
}