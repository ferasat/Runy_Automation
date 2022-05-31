<?php

namespace App\Http\Livewire\Request\Correction;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Referral\Models\Referral;
use Rqs\Models\CorrectionRequest;

class ShowCorrectionRequest extends Component
{
    public $item, $canSeeRef_1, $users, $approve, $to_id;

    public function seeForm($correction_id, $num)
    {
        // dd($this->item->person_1);
        if ($correction_id !== null) {
            if ($correction_id == $this->item->person_1 and $num == 1)
                return true;
            elseif ($correction_id == $this->item->person_2 and $num == 2)
                return true;
            else
                return false;
        } else {
            return false;
        }
    }

    public function mount()
    {
        //dd($this->seeForm( Auth::id() , 1));
        $this->canSeeRef_1 = $this->seeForm(Auth::id(), 1);
        $this->namePerson_1 = fullName($this->item->person_1);
        $this->users = User::all();
        $this->to_id = 0 ;
    }

    public function render()
    {
        return view('livewire.request.correction.show-correction-request');
    }

    public function save($correction_id, $int)
    {
        $referr = Referral::query()->where([
            'type' => 'Correction',
            'type_id' => $correction_id,
        ])->first();

        if ($this->approve == 1) {

            $new = new Referral();
            $new->from = Auth::id();
            $new->user_id = $referr->user_id;
            $new->ref_id = $referr->ref_id;
            $new->signature_from = userSignature(Auth::id());
            $new->to = $this->to_id;
            $new->signature_to = userSignature($this->to_id);
            $new->description = $referr->description;
            $new->type = 'Correction';
            $new->type_id = $correction_id;
            $new->save();

            $correction = CorrectionRequest::query()->findOrFail($correction_id);
            if ($int == 1) {
                $correction->signature_1 = userSignature($correction->person_1);
                $correction->approve_1 = 1;
                $correction->status = fullName(Auth::id()) . ' approved.';
                $correction->save();
                $this->item->approve_1 = 1;
            }
            if ($int == 2) {
                $correction->signature_2 = userSignature($correction->person_2);
                $correction->approve_2 = 1;
                $correction->status = fullName(Auth::id()) . ' approved.';
                $correction->save();
                $this->item->approve_2 = 1;
            } else {
                dd('Not Save ...!');
            }
        } else {
            dd('Not Save ...!!');
        }
    }
}
