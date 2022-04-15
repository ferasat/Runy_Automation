<?php

namespace App\Http\Livewire\Users\New;

use App\Models\User;
use Livewire\Component;

class NewUser extends Component
{
    public $name, $family, $cellPhone, $username, $pic, $Signature, $codeMeli, $about, $gender, $birthDate, $levelUser='Counter'
    , $status = 'active', $levelPermission = '1', $email, $password;

    protected $rules = [
        'name' => 'required',
        'family' => 'required',
        'password' => 'required',
        'Signature' => 'required',
        'email' => 'required|email',
        'cellPhone' => 'integer'
    ];

    public function render()
    {
        return view('livewire.users.new.new-user');
    }


    public function updated()
    {
        $this->validate();
        dd('45');
    }

    public function newuser()
    {
        //dd('45');

        $newUser = new User();
        $newUser->name = $this->name ;
        $newUser->family = $this->family ;
        $newUser->cellPhone = $this->cellPhone ;
        $newUser->pic = $this->pic ;
        $newUser->Signature = $this->Signature ;
        $newUser->email = $this->email ;
        $newUser->password = $this->password ;
        $newUser->status = $this->status ;
        $newUser->levelPermission = $this->levelPermission ;
        $newUser->levelUser = $this->levelUser ;
        $newUser->gender = $this->gender ;
        if ($newUser->save()){
            $this->redirect(route('users.index'));
        }else{
            dd($newUser->save());
        }
    }

}
