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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymentRequest  $paymentRequest
     * @return \Illuminate\Http\Response
     */
    public function show(PaymentRequest $paymentRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymentRequest  $paymentRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentRequest $paymentRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaymentRequest  $paymentRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentRequest $paymentRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymentRequest  $paymentRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymentRequest $paymentRequest)
    {
        //
    }
}
