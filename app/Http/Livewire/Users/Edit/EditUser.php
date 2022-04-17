<?php

namespace App\Http\Livewire\Users\Edit;

use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{
    public $user_id , $user ;
    public $name, $family, $cellPhone, $username, $pic ,$pic_up= null , $Signature, $Signature_up = null , $codeMeli, $about, $gender, $birthDate, $levelUser='Counter'
    , $status = 'active', $levelPermission = '1', $email, $password;
    protected $queryString = ['user_id'];

    public function render()
    {
        $this->user = User::query()->findOrFail($this->user_id);
        $this->name = $this->user->name;
        $this->family = $this->user->family ;
        $this->cellPhone = $this->user->cellPhone;
        $this->pic = $this->user->pic ;
        $this->Signature = $this->user->Signature ;
        $this->email = $this->user->email ;
        $this->password = $this->user->password ;
        $this->status = $this->user->status;
        $this->levelPermission = $this->user->levelPermission ;
        $this->levelUser = $this->user->levelUser ;
        $this->gender = $this->user->gender;
        return view('livewire.users.edit.edit-user');
    }
}
