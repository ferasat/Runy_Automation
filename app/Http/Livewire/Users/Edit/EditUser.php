<?php

namespace App\Http\Livewire\Users\Edit;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditUser extends Component
{
    use WithFileUploads;

    public $user_id , $user , $name, $family, $cellPhone, $username, $pic, $pic_up = null, $Signature, $Signature_up = null,
        $codeMeli, $about, $gender, $birthDate, $levelUser = 'Counter' , $status = 'active', $levelPermission = '1', $email,
        $password, $password_confirmation , $showPassSuc=0;
    protected $queryString = ['user_id'];

    public function mount()
    {
        $this->name = $this->user->name ;
        $this->name = $this->user->name;
        //dd($this->name);
        $this->family = $this->user->family;
        $this->cellPhone = $this->user->cellPhone;
        $this->email = $this->user->email;
        $this->status = $this->user->status;
        $this->levelPermission = $this->user->levelPermission;
        $this->levelUser = $this->user->levelUser;
        $this->gender = $this->user->gender;

        $this->pic = $this->user->pic;
        $this->Signature = $this->user->Signature;
    }
    public function render()
    {
        return view('livewire.users.edit.edit-user');
    }

    public function upload_pic()
    {
        $this->validate([
            'pic_up' => 'image|max:1024', // 1MB Max
        ]);

        $url = 'storage/' . $this->pic_up->store('uploads/users_' . $this->user_id, 'public');
        //dd($url);
        return $url;
    }

    public function upload_Signature()
    {
        $this->validate([
            'Signature_up' => 'image|max:1024', // 1MB Max
        ]);

        $url = 'storage/' . $this->Signature_up->store('uploads/Signature_' . $this->user_id, 'public');
        return $url;
    }

    public function save()
    {
        //dd('Asd');
        $user = User::query()->findOrFail($this->user_id);
        //dd($this->name, $this->family);
        $user->name = $this->name;
        $user->family = $this->family;
        $user->cellPhone = $this->cellPhone;
        if ($this->pic_up !== null) {
            $user->pic = $this->upload_pic();
        }
        if ($this->Signature_up !== null) {
            $user->Signature = $this->upload_Signature();
        }
        //dd($this->email);
        $user->email = $this->email;
        $user->status = $this->status;
        $user->levelPermission = $this->levelPermission;
        $user->levelUser = $this->levelUser;
        $user->gender = $this->gender;
        $user->save();
        $this->redirect(route('users.index'));
    }

    public function changePass($user_id)
    {
        $this->validate([
            'password' => 'min:8',
            'password_confirmation' => 'min:8',
        ]);
        if ($this->password == $this->password_confirmation ){
            $user = User::query()->findOrFail($user_id);
            $user->password = bcrypt($this->password) ;
            $user->save();

            $this -> showPassSuc = 1 ;
            session()->flash('password_status' , 'The password is change');

        }else{
            session()->flash('password_not' , 'The password does not match');
        }

    }

}
