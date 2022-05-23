<?php

namespace App\Http\Livewire\Request\Payment;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Referral\Models\Referral;
use Rqs\Models\PaymentRequest;

class ShowPaymentRequest extends Component
{
    public $item , $is_account , $users , $to_id , $approve ;

    public function mount()
    {
        $this->is_account = is_accounting(Auth::id());
        $this -> users = User::all();
        $this->to_id = Auth::id();
        $this->approve = 0;
    }
    public function render()
    {
        return view('livewire.request.payment.show-payment-request');
    }

    public function save($pay_id)
    {
        $referr = Referral::query()->where('ref_id' , $pay_id)->first();
        //dd($referr , $this->item->id);
        if ($this->approve == 1){
            $new = new Referral() ;
            $new -> from = Auth::id() ;
            $new -> user_id = $referr->user_id ;
            $new -> ref_id = $referr->ref_id ;
            $new -> signature_from = userSignature(Auth::id()) ;
            $new -> to = $this->to_id ;
            $new -> signature_to = userSignature($this->to_id) ;
            $new -> description = $referr->description ;
            $new -> type = 'pay' ;
            $new -> type_id = $this->item->id ;
            $new -> save();

            $this->emit('updateUserInRefer');

            session()->flash('successRefer' , 'Okay !');
        }else {
            dd('Not');
        }


    }

}
