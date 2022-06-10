<?php

namespace App\Http\Livewire\Request\Forms;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Referral\Models\Referral;
use Rqs\Models\OvertimeForm;

class NewOverTimeForm extends Component
{
    public $over_start, $over_start_time, $over_end, $over_end_time,  $description, $users,$to_id;

    public function mount()
    {
        $this->users = User::all();
        $this->to_id = Auth::id() ;
    }
    public function render()
    {
        return view('livewire.request.forms.new-over-time-form');
    }
    protected $rules = [
        'over_start' => 'required',
        'over_end' => 'required',
    ];

    public function updated()
    {

    }

    public function saveForm()
    {
        //dd('save');
        $this->validate();

        $newLeave = new OvertimeForm();
        $newLeave->user_id = Auth::id();
        $newLeave->over_start = $this->over_start;
        $newLeave->over_start_time = $this->over_start_time;
        $newLeave->over_end = $this->over_end;
        $newLeave->over_end_time = $this->over_end_time;
        $newLeave->description = $this->description;
        $newLeave->save();

        $new = new Referral() ;
        $new -> from = Auth::id() ;
        $new -> user_id = Auth::id() ;
        $new -> signature_from = userSignature(Auth::id()) ;
        $new -> to = $this->to_id ;
        $new -> signature_to = userSignature($this->to_id) ;
        $new -> description = $this->description ;
        $new -> type = 'OverTime' ;
        $new -> type_id = $newLeave->id ;
        $new -> save();

        $new -> ref_id = $new ->id;
        $new -> save();

        $this->redirect(route('over-time-forms.index'));

    }

}
