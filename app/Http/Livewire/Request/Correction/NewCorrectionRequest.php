<?php

namespace App\Http\Livewire\Request\Correction;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

use Referral\Models\Referral;
use Rqs\Models\CorrectionRequest;

class NewCorrectionRequest extends Component
{

    public $book_id , $passenger_name , $date , $supplier , $supplier_rate  , $currency , $applicant , $cancel_hotel ,
    $penalty_cancellation_share , $applicant_rate , $cancel_fine_hotel , $counter_signature , $accounting_signature , $accounting_user_id ,
    $status , $user_id , $show = false , $description , $users , $to_id , $namePerson_1;

    public function mount()
    {
        $this->users = User::all();
        $this->cancel_hotel = 0;
        $this->currency = 'UAE Dirham';

    }

    protected $rules = [
        'book_id' => 'required',
        'passenger_name' => 'required',
    ];

    public function render()
    {
        return view('livewire.request.correction.new-correction-request' );
    }

    public function updated()
    {
        $this->validate();

        if ($this->cancel_hotel == 1)
            $this->show = true;
        elseif ($this->cancel_hotel == 0)
            $this->show = false;
        else $this->show = false ;
    }



    public function save()
    {
        $this->validate();

        $newRq = new CorrectionRequest();
        $newRq -> book_id = $this->book_id ;
        $newRq -> date = $this->date ;
        $newRq -> user_id = Auth::id() ;
        $newRq -> passenger_name = $this->passenger_name ;
        $newRq -> supplier = $this->supplier ;
        $newRq -> supplier_rate = $this->supplier_rate ;
        $newRq -> applicant = $this->applicant ;
        $newRq -> applicant_rate = $this->applicant_rate ;
        $newRq -> cancel_hotel = $this->cancel_hotel ;
        $newRq -> penalty_cancellation_share = $this->penalty_cancellation_share ;
        $newRq -> cancel_fine_hotel = $this->cancel_fine_hotel ;
        $newRq -> counter_signature = $this->counter_signature ;
        $newRq -> description = $this->description ;
        $newRq -> status = 'Send For Accounting' ;

        if ($newRq -> save()){
            $new = new Referral() ;
            $new -> from = Auth::id() ;
            $new -> user_id = Auth::id() ;
            $new -> signature_from = userSignature(Auth::id()) ;
            $new -> to = $this->to_id ;
            $new -> signature_to = userSignature($this->to_id) ;
            $new -> description = $this->description ;
            $new -> type = 'Correction' ;
            $new -> type_id = $newRq->id ;
            $new -> save();

            $new -> ref_id = $new ->id;
            $new -> save();

            $newRq -> person_1 = $this->to_id ;
            $newRq -> save();

        }else {
            dd('not Ok!');
        }

        $this->redirect(route('corrections.index'));
    }

}
