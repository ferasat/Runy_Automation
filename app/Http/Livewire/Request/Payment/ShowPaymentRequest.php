<?php

namespace App\Http\Livewire\Request\Payment;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Referral\Models\Referral;

class ShowPaymentRequest extends Component
{
    public $item , $is_account , $users , $to_id , $approve ;

    public function mount()
    {
        if (Auth::user()->levelPermission == 6 or Auth::user()->levelPermission == 9 or Auth::user()->levelPermission == 10)
            $this->is_account = true ;
        else
            $this->is_account = false ;
        $this -> users = User::all();
        $this->to_id = Auth::id();
        $this->approve = 0;
    }
    public function render()
    {
        return view('livewire.request.payment.show-payment-request');
    }

    public function save()
    {
        $referr = Referral::query()->findOrFail($this->item->id);
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

    }

}
