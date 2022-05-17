<?php

namespace App\Http\Livewire\Request\Forms;

use Livewire\Component;

class ShowLeaveForm extends Component
{
    public $item ;
    public function render()
    {
        return view('livewire.request.forms.show-leave-form');
    }
}
