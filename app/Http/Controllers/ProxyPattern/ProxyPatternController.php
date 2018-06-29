<?php

namespace App\Http\Controllers\ProxyPattern;

use App\Http\Controllers\Controller;
use Illuminate\Session\Store as SessionImplementation;
use Illuminate\Support\Facades\Session;

class ProxyPatternController extends Controller
{
    public function index(SessionImplementation $session)
    {
        // Laravel Facades are Proxies to their underlying implementations
        // Session facade has an underlying instance of the Session Store object
        $fromFacade         = Session::all();
        $fromImplementation = $session->all();

        echo "From Laravel Session Facade:<br/>";
        print_r($fromFacade);
        echo "<hr/>";
        echo "From Symfony Session Implementation:<br/>";
        print_r($fromImplementation);
    }
}