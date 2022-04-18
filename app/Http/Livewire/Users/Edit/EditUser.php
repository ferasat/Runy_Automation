<?php

namespace App\Http\Livewire\Users\Edit;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditUser extends Component
{
    use WithFileUploads;

    public $user_id, $user;
    protected $queryString = ['user_id'];
    public $name, $family, $cellPhone, $username, $pic, $pic_up = null, $Signature, $Signature_up = null, $codeMeli, $about, $gender, $birthDate, $levelUser = 'Counter'
    , $status = 'active', $levelPermission = '1', $email, $password;


    public function mount()
    {
        $this->user = User::query()->findOrFail($this->user_id);
        $this->name = $this->user->name;
        $this->family = $this->user->family;
        $this->cellPhone = $this->user->cellPhone;
        $this->pic = $this->user->pic;
        $this->Signature = $this->user->Signature;
        $this->email = $this->user->email;
        $this->password = $this->user->password;
        $this->status = $this->user->status;
        $this->levelPermission = $this->user->levelPermission;
        $this->levelUser = $this->user->levelUser;
        $this->gender = $this->user->gender;
    }

    public function render()
    {

        return view('livewire.users.edit.edit-user');
    }

    public function updated()
    {

    }

    public function save()
    {
        $this->user->name = $this->name;
        $this->user->family = $this->family;
        $this->user->cellPhone = $this->cellPhone;
        $this->user->pic = $this->pic_up->store('uploads/users/'.$this->user_id);
        $this->user->Signature = $this->Signature_up->store('uploads/Signature/'.$this->user_id);
        $this->user->email = $this->email;
        $this->user->password = $this->password;
        $this->user->status = $this->status ;
        $this->user->levelPermission = $this->levelPermission;
        $this->user->levelUser = $this->levelUser ;
        $this->user->gender = $this->gender ;

        if ($this->user->save())
            $this->redirect(route('users.index'));
        else dd($this->user->save());
    }
}
