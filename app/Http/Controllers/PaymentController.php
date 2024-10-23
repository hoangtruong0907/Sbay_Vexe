<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function showPaymentPage()
    {
        $bookingData = json_decode(session('info_booking')['data']);
        // Trả về view `payments.payment`
        return view('payment.payment', compact('bookingData'));
    }
}
