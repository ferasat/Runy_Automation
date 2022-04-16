<?php

namespace App\Http\Livewire\Request\Payment;

use Livewire\Component;

use Rqs\Models\CorrectionRequest;

class NewCorrectionRequest extends Component
{
    public function render()
    {
        return view('livewire.request.payment.new-correction-request' );
    }
}
