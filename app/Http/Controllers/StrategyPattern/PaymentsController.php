<?php

namespace App\Http\Controllers\StrategyPattern;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Payments\PaymentsService;
use App\Services\Payments\Strategies\PaypalPayment;
use App\Services\Payments\Strategies\StripePayment;
use App\Services\Payments\Strategies\DragonPayPayment;

class PaymentsController extends Controller
{
    public function index()
    {
        $paypalPayment = new PaymentsService(new PaypalPayment());

        $stripePayment = new PaymentsService(new StripePayment());

        $dragonPayPayment = new PaymentsService(new DragonPayPayment());

        return dd([$paypalPayment->pay(), $stripePayment->pay(), $dragonPayPayment->pay()]);
    }
}
