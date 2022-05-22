<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Referral\Models\Referral;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if (Auth::user()->levelPermission > 4)
            $referrals = Referral::query()->orderByDesc('id')->paginate(5);
        else
            $referrals = Referral::query()->where('from' , Auth::id())->orWhere('to' , Auth::id())->orderByDesc('id')->paginate(5);
        return view('dashboard' , compact('referrals'));
    }
}
