<?php

namespace App\Http\Livewire\Theme\Header;

use Livewire\Component;

class HeaderCover extends Component
{
    public $title , $description ;
    public function render()
    {
        return view('livewire.theme.header.header-cover');
    }
}
