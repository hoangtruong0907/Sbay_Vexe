<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentResultController extends Controller
{
    public function showPaymentResult()
    {
        return view('payment.payment-result');
    }
}