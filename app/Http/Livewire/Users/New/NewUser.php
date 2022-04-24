<?php

namespace App\Http\Livewire\Users\New;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewUser extends Component
{
    use WithFileUploads;

    public $name, $family, $cellPhone, $username, $pic, $Signature, $codeMeli, $about, $gender, $birthDate, $levelUser = 'Counter'
    , $status = 'active', $levelPermission = '1', $email, $password, $user_id;

    public function mount()
    {
        $this->user_id = Auth::id();
    }

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
        // dd($this->pic->store('uploads/users/' . $this->user_id, 'public'));
        $this->validate();
    }

    public function upload_pic()
    {
        $this->validate([
            'pic' => 'image|max:1024', // 1MB Max
        ]);

        $url = 'storage/'.$this->pic->store('uploads/users_' . $this->user_id , 'public');
        return $url ;
    }

    public function upload_Signature()
    {
        $this->validate([
            'Signature' => 'image|max:1024', // 1MB Max
        ]);

        $url = 'storage/'.$this->Signature->store('uploads/Signature_' . $this->user_id , 'public');
        return $url ;
    }

    public function newuser()
    {

        $newUser = new User();
        $newUser->name = $this->name;
        $newUser->family = $this->family;
        $newUser->cellPhone = $this->cellPhone;
        $newUser->pic = $this->upload_pic();
        $newUser->Signature = $this->upload_Signature();
        $newUser->email = $this->email;
        $newUser->password = $this->password;
        $newUser->status = $this->status;
        $newUser->levelPermission = $this->levelPermission;
        $newUser->levelUser = $this->levelUser;
        $newUser->gender = $this->gender;
        $newUser->save();
        $this->redirect(route('users.index'));
        if ($newUser->save()) {
            $this->redirect(route('users.index'));
        } else {
            dd($newUser->save());
        }
    }

}
