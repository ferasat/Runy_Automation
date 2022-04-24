<?php

namespace App\Http\Livewire\Request\Correction;

use Livewire\Component;
use Rqs\Models\CorrectionRequest;

class ShowCorrectionRequest extends Component
{
    public $item;

    public function render()
    {
        return view('livewire.request.correction.show-correction-request');
    }
}
