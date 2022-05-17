<?php

namespace App\Http\Livewire\Request\Forms;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Rqs\Models\LeaveForm;

class NewLeaveForm extends Component
{
    public $leave_start, $leave_start_time, $leave_end, $leave_end_time, $leave_type='Vacation', $description;

    public function render()
    {
        return view('livewire.request.forms.new-leave-form');
    }

    protected $rules = [
        'leave_start' => 'required',
        'leave_end' => 'required',
    ];

    public function updated()
    {

    }

    public function saveForm()
    {
        //dd('save');
        $this->validate();

        $newLeave = new LeaveForm();
        $newLeave->user_id = Auth::id();
        $newLeave->leave_start = $this->leave_start;
        $newLeave->leave_start_time = $this->leave_start_time;
        $newLeave->leave_end = $this->leave_end;
        $newLeave->leave_end_time = $this->leave_end_time;
        $newLeave->leave_type = $this->leave_type;
        $newLeave->description = $this->description;
        $newLeave->save();

        $this->redirect(route('leave-forms.index'));

    }
}
