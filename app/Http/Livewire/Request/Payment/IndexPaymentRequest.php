<?php

namespace App\Http\Livewire\Request\Payment;

use Livewire\Component;
use Livewire\WithPagination;
use Rqs\Models\PaymentRequest;

class IndexPaymentRequest extends Component
{
    use WithPagination;
    public $payment_requests ;

    public function mount()
    {
        $this->payment_requests = PaymentRequest::all();
    }
    public function render()
    {
        return view('livewire.request.payment.index-payment-request' ,[

        ]);
    }
}
