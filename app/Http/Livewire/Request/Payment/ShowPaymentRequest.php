<?php

namespace App\Http\Livewire\Request\Payment;

use Livewire\Component;

class ShowPaymentRequest extends Component
{
    public $item ;
    public function render()
    {
        return view('livewire.request.payment.show-payment-request');
    }
}
