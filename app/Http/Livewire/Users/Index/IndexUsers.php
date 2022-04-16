<?php

namespace App\Http\Livewire\Users\Index;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUsers extends Component
{
    use WithPagination;

    public function render()
    {
        $users = User::query()->orderByDesc('id')->paginate(10);
        return view('livewire.users.index.index-users', compact('users'));
    }

    public function edit($id)
    {

    }
    public function delete($id)
    {
        User::query()->findOrFail($id)->delete();
        $this->render();
    }
    public function disable($id)
    {
        $user = User::query()->findOrFail($id);
        $user -> status = 'disabled';
        $user -> save() ;
        $this->render();
    }
}
