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
        return view('livewire.users.index.index-users' , compact('users'));
    }
}
