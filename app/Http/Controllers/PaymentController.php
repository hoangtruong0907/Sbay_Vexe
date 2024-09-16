<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentPage()
    {
        // Trả về view `payments.payment`
        return view('payment.payment');
    }
}
