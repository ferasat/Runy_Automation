<?php

namespace App\Http\Livewire\Request\Payment;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Referral\Controllers\ReferralController;
use Rqs\Models\PaymentRequest;
use Referral\Models\Referral;

class NewRequestPayment extends Component
{
    public $price ,$currency='UAE Dirham' , $book_id , $getter , $passenger_name='' , $person_id , $cause, $deadline, $name_bank, $number_account_bank,
        $number_cart_bank, $account_owner_bank, $description , $admin_approval=0 , $type_spent , $status=1 , $signature_1 ,
        $signature_2 , $signature_3 , $signature_4, $signature_5 , $to_id;

    protected $rules = [
        'price' => 'required',
        'book_id' => 'required',
        'getter' => 'required',
        'cause' => 'required'
    ];

    public function render()
    {
        $users = User::all();
        return view('livewire.request.payment.new-request-payment' , compact('users'));
    }

    public function updated()
    {

    }

    public function createReferral($from , $to , $description , $type , $type_id )
    {
        $new = new Referral() ;
        $new -> from = $from ;
        $new -> signature_from = userSignature($from) ;
        $new -> to = $to ;
        $new -> signature_to = userSignature($to) ;
        $new -> description = $description ;
        $new -> type = $type ;
        $new -> type_id = $type_id ;
        $new -> save();
    }

    public function save(){
        $this->validate();
        $newPay = new PaymentRequest();
        $newPay->user_id = Auth::id() ;
        $newPay->book_id = $this->book_id ;
        $newPay->price = $this->price ;
        $newPay->currency = $this->currency ;
        $newPay->getter = $this->getter ;
        $newPay->cause = $this->cause ;
        $newPay->deadline = $this->deadline ;
        $newPay->passenger_name = $this->passenger_name ;
        $newPay->name_bank = $this->name_bank ;
        $newPay->number_account_bank = $this->number_account_bank ;
        $newPay->account_owner_bank = $this->account_owner_bank ;
        $newPay->person_id = $this->person_id ;
        $newPay->description = $this->description ;
        $newPay->status = $this->status ;
        //dd($newPay);
        if ($newPay->save()){

            $new = new Referral() ;
            $new -> from = Auth::id() ;
            $new -> signature_from = userSignature(Auth::id()) ;
            $new -> to = $this->to_id ;
            $new -> signature_to = userSignature($this->to_id) ;
            $new -> description = $this->description ;
            $new -> type = 'pay' ;
            $new -> type_id = $newPay->id ;
            $new -> save();
            //dd('dd');

            $this->redirect(route('payments.index'));
        }else{
            dd($newPay->save());
        }
    }
}
