<?php

namespace Rqs\Controllers;

use App\Http\Controllers\Controller;
use Rqs\Models\PaymentRequest;
use Illuminate\Http\Request;

class PaymentRequestController extends Controller
{

    public function index()
    {
        return view('RqsView::indexPaymentRequest');
    }


    public function create()
    {
        return view('RqsView::newPaymentRequest');
    }


    public function store(Request $request)
    {

    }


    public function show(PaymentRequest $paymentRequest)
    {
        //
    }


    public function edit(PaymentRequest $paymentRequest)
    {
        //
    }


    public function update(Request $request, PaymentRequest $paymentRequest)
    {
        //
    }

    public function destroy(PaymentRequest $paymentRequest)
    {
        //
    }
}
