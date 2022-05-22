<?php

namespace App\Http\Livewire\Referral;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Livewire\Component;
use Referral\Models\Referral;

class IndexReferral extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        if (Auth::user()->levelPermission > 4)
            $referrals = Referral::query()->orderByDesc('id')->paginate(15);
        else
            $referrals = Referral::query()->where('from' , Auth::id())->orWhere('to' , Auth::id())->orderByDesc('id')->paginate(15);
        return view('livewire.referral.index-referral' , compact('referrals'));
    }
}
