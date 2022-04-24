<?php

namespace App\Http\Livewire\Request\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PhpParser\Node\Stmt\If_;
use Rqs\Models\LeaveForm;

class IndexLeaveForm extends Component
{
    public function render()
    {
        if (is_admin(Auth::id()))
            $forms = LeaveForm::query()->orderByDesc('id')->paginate(10);
        else
            $forms = LeaveForm::query()->where('user_id' , Auth::id())->orderByDesc('id')->paginate(10);

        return view('livewire.request.forms.index-leave-form' , compact('forms'));
    }
}
