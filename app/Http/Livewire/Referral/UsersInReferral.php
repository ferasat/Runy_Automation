<?php

namespace App\Http\Livewire\Referral;

use Livewire\Component;

class UsersInReferral extends Component
{
    public $type , $type_id ;
    public function render()
    {
        return view('livewire.referral.users-in-referral');
    }
}
