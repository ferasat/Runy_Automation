<?php

namespace App\Http\Livewire\Users\Index;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUsers extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $users = User::query()->orderByDesc('id')->paginate(2);
        return view('livewire.users.index.index-users', compact('users'));
    }

    public function edit($id)
    {

    }
    public function delete($id)
    {
        if (Auth::user()->levelUser == 'Admin' or Auth::user()->levelUser == 'SAdmin'){
            User::query()->findOrFail($id)->delete();
            $this->render();
            session()->flash('delete' , 'Delete User ');
        }

    }
    public function disable($id)
    {
        $user = User::query()->findOrFail($id);
        $user -> status = 'disabled';
        $user -> save() ;
        $this->render();
    }
}
