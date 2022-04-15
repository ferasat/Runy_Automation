<?php

namespace App\Http\Livewire\Request\Payment;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Rqs\Models\PaymentRequest;

class NewRequestPayment extends Component
{
    public $price ,$currency='UAE Dirham' , $book_id , $getter , $passenger_name='' , $person_id , $cause, $deadline, $name_bank, $number_account_bank,
        $number_cart_bank, $account_owner_bank, $description , $admin_approval=0 , $type_spent , $status=1 , $signature_1 ,
        $signature_2 , $signature_3 , $signature_4, $signature_5;

    protected $rules = [
        'price' => 'required',
        'book_id' => 'required',
        'getter' => 'required',
        'cause' => 'required'
    ];

    public function render()
    {
        return view('livewire.request.payment.new-request-payment');
    }

    public function updated()
    {

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
        $newPay->status = $this->status ;
        if ($newPay->save()){
            $this->redirect(route('payments.index'));
        }else{
            dd($newPay->save());
        }
    }
}
