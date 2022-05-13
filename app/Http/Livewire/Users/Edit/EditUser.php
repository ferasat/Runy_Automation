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
    public $name, $family, $cellPhone, $username, $pic, $pic_up = null, $Signature, $Signature_up = null, $codeMeli, $about,
        $gender, $birthDate, $levelUser = 'Counter'
    , $status = 'active', $levelPermission = '1', $email, $password, $password_confirmation;


    public function mount()
    {
        $this->user = User::query()->findOrFail($this->user_id);
        //dd($this->user);
        $this->name = $this->user->name;
        //dd($this->name);
        $this->family = $this->user->family;
        $this->cellPhone = $this->user->cellPhone;
        $this->pic = $this->user->pic;
        $this->Signature = $this->user->Signature;
        $this->email = $this->user->email;
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
        // dd($this->password);
        if ($this->password !== null or $this->password !== ''){
            if ($this->password !== $this->password_confirmation ){
                session()->flash('password_status' , 'The password does not match');
            }
        }
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
//        $this->user->password = $this->password;
        $user->status = $this->status;
        $user->levelPermission = $this->levelPermission;
        $user->levelUser = $this->levelUser;
        $user->gender = $this->gender;
        $user->save();
        $this->redirect(route('users.index'));
    }

    public function changePass($user_id)
    {
        if ($this->password !== $this->password_confirmation ){
            session()->flash('password_status' , 'The password does not match');
        }else{
            $user = User::query()->findOrFail($user_id);
            $user->password = $this->password ;
            $user->save();

            session()->flash('password_status' , 'The password does not match');
        }

    }
}
