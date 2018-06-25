<?php

namespace App\Services\Payments;

use App\Services\Payments\Strategies\Contracts\PaysContract;

class PaymentsService
{
    /**
     * @var App\Services\Payments\Strategies\Contracts\PaysContract;
     */
    protected $paymentMethod;

    public function __construct(PaysContract $paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * Calls payment strategy's pay() method.
     * 
     * @return Void
     */
    public function pay()
    {
        return $this->paymentMethod->pay();
    }
}