<?php

namespace App\Http\Livewire\Request\Correction;

use Livewire\Component;

use Rqs\Models\CorrectionRequest;

class NewCorrectionRequest extends Component
{
    public function render()
    {
        return view('livewire.request.correction.new-correction-request' );
    }
}
