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
    public $item , $canSee , $users , $to_id , $approve ,$canSeeRef_2 , $canSeeRef_3 , $canSeeRef_4 , $canSeeRef_5 ;

    public function seeForm($pay_id , $num)
    {
        if ($pay_id !== null )

            if ($pay_id == $this->item->person_1 and $num == 1 )
                return true ;
            elseif ($pay_id == $this->item->person_2 and $num == 2)
                return true ;
            elseif ($pay_id == $this->item->person_3 and $num == 3)
                return true;
            elseif ($pay_id == $this->item->person_4 and $num == 4)
                return true ;
            elseif ($pay_id === $this->item->person_5 and $num == 5)
                return true ;
            else
                return false ;

        else
            return false ;
    }

    public function mount()
    {
        //dd( $this->seeForm( Auth::id() , 2) );
        //$this -> canSeeRef_1 = $this->seeForm(Auth::id() , 1) ;
        $this -> canSeeRef_2 = $this->seeForm( Auth::id() , 2) ;
        $this -> canSeeRef_3 = $this->seeForm( Auth::id() , 3) ;
        $this -> canSeeRef_4 = $this->seeForm( Auth::id() , 4) ;
        $this -> canSeeRef_5 = $this->seeForm( Auth::id() , 5) ;
        //dd($this->item->person_5);
        $this -> users = User::all();
        $this -> to_id = Auth::id();
        $this -> approve = 0;

    }
    public function render()
    {
        return view('livewire.request.payment.show-payment-request');
    }

    public function save($pay_id , $int)
    {
        //dd($pay_id);
        $referr = Referral::query()->where([
            'type' => 'pay' ,
            'type_id' => $pay_id ,
        ])->first();
        //dd($referr);

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
            $new -> type_id = $pay_id ;
            $new -> save();

            $referr-> status = 1 ;
            $referr-> save();

            $this->emit('updateUserInRefer');

            $pay = PaymentRequest::query()->findOrFail($this->item->id);
            if ($int == 2){
                $pay -> person_3 = $this->to_id ;
                $pay -> approve_2 = 1 ;
                $pay -> signature_2 = userSignature(Auth::id()) ;
                $pay -> status = fullName(Auth::id()).' approved.' ;
                $pay -> save();
                $this -> item -> approve_2 = 1 ;
            }elseif ($int == 3){
                $pay -> person_4 = $this->to_id ;
                $pay -> approve_3 = 1 ;
                $pay -> signature_3 = userSignature(Auth::id()) ;
                $pay -> status = fullName(Auth::id()).' approved.' ;
                $pay -> save();
                $this -> item -> approve_3 = 1 ;
            }elseif ($int == 4){
                $pay -> person_5 = $this->to_id ;
                $pay -> approve_4 = 1 ;
                $pay -> signature_4 = userSignature(Auth::id()) ;
                $pay -> status = fullName(Auth::id()).' approved.' ;
                $pay -> save();
                $this -> item -> approve_4 = 1 ;
            }elseif ($int == 5){
                $pay -> approve_5 = 1 ;
                $pay -> signature_5 = userSignature(Auth::id()) ;
                $pay -> status = fullName(Auth::id()).' approved.' ;
                $pay -> save();
                $this -> item -> approve_5 = 1 ;
            }else {
                dd('Error');
            }

            $this->render();

            session()->flash('successRefer' , 'Okay !');
        }else {
            dd('Not');
        }


    }

}
