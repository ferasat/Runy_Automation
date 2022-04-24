<?php

namespace App\Http\Livewire\Request\Correction;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Rqs\Models\CorrectionRequest;

class IndexCorrectionRequest extends Component
{
    use WithPagination;

    public function render()
    {
        if (is_admin(Auth::id()))
            $correction_requests = CorrectionRequest::query()->orderByDesc('id')->paginate();
        else
            $correction_requests = CorrectionRequest::query()->where('user_id' , Auth::id())->orderByDesc('id')->paginate();

        return view('livewire.request.correction.index-correction-request', compact('correction_requests'));
    }
}
