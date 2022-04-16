<?php

namespace App\Http\Livewire\Request\Payment;

use Livewire\Component;
use Livewire\WithPagination;
use Rqs\Models\CorrectionRequest;

class IndexCorrectionRequest extends Component
{
    use WithPagination;
    public function render()
    {
        $correction_requests = CorrectionRequest::query()->orderByDesc('id')->paginate();
        return view('livewire.request.payment.index-correction-request', compact('correction_requests'));
    }
}
