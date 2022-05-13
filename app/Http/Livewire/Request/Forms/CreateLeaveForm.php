<?php

namespace App\Http\Livewire\Request\Forms;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Rqs\Models\LeaveForm;

class CreateLeaveForm extends Component
{
    public $user_id, $leave_start, $leave_end, $leave_type, $description;

    public function render()
    {
        return view('livewire.request.forms.create-leave-form');
    }

    protected $rules = [
        'leave_start' => 'required',
        'leave_end' => 'required',
    ];

    public function save()
    {
        $this->validate();

        $newLeave = new LeaveForm();
        $newLeave -> user_id = Auth::id() ;
        $newLeave -> leave_start = $this->leave_start ;
        $newLeave -> leave_end = $this->leave_end ;
        $newLeave -> leave_type = $this->leave_type ;
        $newLeave -> description = $this->description ;
        $newLeave -> save() ;

    }

    public function updated(){
        dd('Am');
    }
}
