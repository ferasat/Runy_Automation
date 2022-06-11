<?php

namespace App\Http\Livewire\Request\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use Rqs\Models\OvertimeForm;

class IndexOverTimeForm extends Component
{
    public function render()
    {
        if (is_admin(Auth::id()))
            $forms = OvertimeForm::query()->orderByDesc('id')->paginate(10);
        else
            $forms = OvertimeForm::query()->where('user_id' , Auth::id())->orderByDesc('id')->paginate(10);
        return view('livewire.request.forms.index-over-time-form' , compact('forms'));
    }
}
