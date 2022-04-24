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
        $this->user->name = $this->name;
        $this->user->family = $this->family;
        $this->user->cellPhone = $this->cellPhone;
        if ($this->pic_up !== null) {
            $this->user->pic = $this->upload_pic();
        }
        if ($this->Signature_up !== null) {
            $this->user->Signature = $this->upload_Signature();
        }
        $this->user->email = $this->email;
//        $this->user->password = $this->password;
        $this->user->status = $this->status;
        $this->user->levelPermission = $this->levelPermission;
        $this->user->levelUser = $this->levelUser;
        $this->user->gender = $this->gender;
        $this->user->save();
        $this->redirect(route('users.index'));
    }
}
