<?php

namespace App\Http\Livewire\Request\Forms;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Referral\Models\Referral;
use Rqs\Models\LeaveForm;

class NewLeaveForm extends Component
{
    public $leave_start, $leave_start_time, $leave_end, $leave_end_time, $leave_type='Vacation', $description, $users,$to_id;

    public function mount()
    {
        $this->users = User::all();
        $this->to_id = Auth::id() ;
    }

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

        $new = new Referral() ;
        $new -> from = Auth::id() ;
        $new -> user_id = Auth::id() ;
        $new -> signature_from = userSignature(Auth::id()) ;
        $new -> to = $this->to_id ;
        $new -> signature_to = userSignature($this->to_id) ;
        $new -> description = $this->description ;
        $new -> type = 'Leave' ;
        $new -> type_id = $newLeave->id ;
        $new -> save();

        $new -> ref_id = $new ->id;
        $new -> save();

        $this->redirect(route('leave-forms.index'));

    }
}
