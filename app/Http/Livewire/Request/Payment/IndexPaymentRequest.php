<?php

namespace App\Http\Livewire\Request\Payment;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Rqs\Models\PaymentRequest;

class IndexPaymentRequest extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function mount()
    {

    }

    public function render()
    {
        //if (is_admin(Auth::id()))
            $payment_requests = PaymentRequest::query()->orderByDesc('id')->paginate('10');
        /*else
            $payment_requests = PaymentRequest::query()->where('user_id' , Auth::id())->orderByDesc('id')->paginate('10');*/
        return view('livewire.request.payment.index-payment-request', compact('payment_requests'));
    }
}
