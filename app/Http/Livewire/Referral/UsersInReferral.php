<?php

namespace App\Http\Livewire\Referral;

use Livewire\Component;

class UsersInReferral extends Component
{
    public $type , $type_id ;
    public function render()
    {
        $persons = personInReferral($this->type , $this->type_id) ;
        return view('livewire.referral.users-in-referral' , compact('persons'));
    }

    protected $listeners=[
        'updateUserInRefer' => 'render',
    ];
}
